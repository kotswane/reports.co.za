<?php

error_reporting(E_ALL);
$opts = getopt('f:d:rb:', ['ext:', 'php:', 'diff::']);

if ((int)isset($opts['d']) + (int)isset($opts['f']) !== 1) {
    $self = basename(__FILE__);
    echo <<<EOF
Usage:
      php $self -f<php_script> [-b] [--php <path_to_php>] [ --diff [<file>]]
      php $self -d<dir_name> [-b] [-r] [--php <path_to_php>] [--ext <extension>[,<extension>...] [ --diff [<file>]]

Where:
      -f<php_script>      Convert single file <php_script>.
      -d<dir_name>        Convert all ".php"(see "--ext") files inside <dir_name> directory.
      -r                  Walk through directories recursively. Without this flag only concrete directory will be processed.
      -b<backup_dir>      Backup converted files into <backup_dir>.
      --ext               Comma separated list of file extensions for conversion. If set then ".php" will not be added automatically.
      --php <path_to_php> Path to PHP interpreter to migrate.
      --diff[=<file>]     Redirect diff-info into <file>. Write to stdout if <file> does not specified.

Examples:
      php $self -f./index.php -b --diff
          Convert file ./index.php and make backup to ./index.php_backup and show diff

      php $self -d/srv/http/api -r --ext phpt,php
          Convert all ".php" and ".phpt" files inside whole /srv/http/api directory tree

      php $self -d/srv/http/api --php /root/sapi/bin/php --diff=./diff.out
          Convert all ".php" files inside /srv/http/api directory and write diff to ./diff.out
          using /root/sapi/bin/php for check for deprecation
EOF;
    exit(0);
}

$converter = new Converter($opts);

if (isset($opts['f'])) {
    $converter->convertFile($opts['f']);
} elseif (isset($opts['d'])) {
    $converter->convertDirectory($opts['d'], isset($opts['r']));
}

class Converter
{
    private string $php;
    private string $backupDir;
    private array $ext;

    /**
     * @var bool|string
     */
    private $diff;
    private string $dir = '';
    private string $diffContent = '';

    public function __construct(array $opts)
    {
        $this->php = isset($opts['php']) ? $opts['php'] : PHP_BINARY;
        $this->backupDir = isset($opts['b']) ? rtrim($opts['b'], "/\\") . DIRECTORY_SEPARATOR : '';
        $this->ext = isset($opts['ext']) ? explode(',', $opts['ext']) : ['php'];
        $this->diff = isset($opts['diff']) ? ($opts['diff'] !== false ? $opts['diff'] : true) : false;

        if ($this->backupDir && !is_dir($this->backupDir)) {
            $this->fatalError("Backup directory $this->backupDir not found");
        }
    }

    public function convertDirectory(string $dir, bool $recursively): void
    {
        if (!is_dir($dir)) {
            $this->fatalError("Target directory $dir not found");
        }

        $this->dir = rtrim($dir, "/\\") . DIRECTORY_SEPARATOR;
        $regex = '/^.+\.(' . implode('|', $this->ext) . ')$/';

        if ($recursively) {
            $dirIterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
            $path = '';
        } else {
            $dirIterator = new DirectoryIterator($dir);
            $path = $this->dir;
        }

        $iterator = new RegexIterator($dirIterator, $regex, RegexIterator::GET_MATCH);

        foreach ($iterator as $file) {
            $this->convertFile($path . $file[0]);
        }
    }

    public function convertFile(string $file): void
    {
        if (!is_file($file)) {
            $this->fatalError("Target file $file not found");
        }

        $deprecated = $this->getDeprecatedLines($file);

        if (empty($deprecated)) {
            return;
        }

        $tokens = token_get_all(file_get_contents($file));
        $actualTokens = $this->actualTokens($tokens);

        while ($braces = $this->findPair($actualTokens)) {
            if (
                $actualTokens[$braces[0]] !== '${'   // Complex string.
                && $this->validNext($tokens, $braces[0], $braces[1])
            ) {
                $tokens[$braces[0]] = '[';
                $tokens[$braces[1]] = ']';
            }

            unset($actualTokens[$braces[0]], $actualTokens[$braces[1]]);
        }

        $convertedFile = $this->writeConverted($tokens, $file);
        $this->diff($file, $convertedFile);
        $this->backup($file, $convertedFile);
        $notConverted = $this->getDeprecatedLines($convertedFile);

        if (!empty($notConverted)) {
            foreach ($notConverted as $line) {
                echo " -  Failed to convert line $line in $file" . PHP_EOL;
            }

            echo " ?  $file is not fully converted." . PHP_EOL;
        } else {
            echo "+   $file successfully converted." . PHP_EOL;
        }

        if (!rename($convertedFile, $file)) {
            $this->fatalError("Failed to replace $file with $convertedFile", $convertedFile);
        }
    }

    private function getDeprecatedLines(string $file): array
    {
        $output = [];
        $escapedFile = escapeshellarg($file);
        exec("$this->php -d error_reporting=E_ALL -l $escapedFile 2>&1", $output, $ret);

        if ($ret !== 0) {
            foreach ($output as $string) {
                echo '>   ' . $string . PHP_EOL;
            }

            $this->fatalError("Processing of file $file is failed");
        }

        $output = array_filter($output, fn($line) => preg_match('/Deprecated: +Array and string/i', $line) !== 0);
        array_walk($output, function (&$line) { $line = (int)trim(strrchr($line, ' ')); });
        return $output;
    }

    private function writeConverted(array $tokens, string $original): string
    {
        do {
            $outputFileName = $original . mt_rand(0, 1000);
        } while (is_file($outputFileName));

        $outputFile = fopen($outputFileName, 'wb');

        if (!$outputFile) {
            $this->fatalError("Cannot create temp file $outputFileName");
        }

        foreach ($tokens as $token) {
            if (is_array($token)) {
                fwrite($outputFile, $token[1]);
            } else {
                fwrite($outputFile, $token);
            }
        }

        fclose($outputFile);

        return $outputFileName;
    }

    private function backup(string $file, string $convertedFile): void
    {
        if ($this->backupDir) {
            $backupFileName = $this->backupDir . str_replace($this->dir, '', $file);
            if (!is_dir(pathinfo($backupFileName, PATHINFO_DIRNAME))) {
                if (!mkdir(pathinfo($backupFileName, PATHINFO_DIRNAME), 0777, true)) {
                    $this->fatalError("Failed to create directory tree for $backupFileName", $convertedFile);
                }
            }
            if (!rename($file, $backupFileName)) {
                $this->fatalError("Failed to backup $file into $backupFileName", $convertedFile);
            }
        }
    }

    private function actualTokens(array $tokens): array
    {
        $result = [];
        $inString = false;
        $depth = 0;

        foreach ($tokens as $key => $token) {
            if ($token === '"') {
                $inString = !$inString;
            }

            $tokenStr = null;

            if ($token === '{' || $token === '}') {
                $tokenStr = $token;
            } else if (is_array($token) && ($token[1] === '${' || $token[1] === '{' || $token[1] === '->')) {
                $tokenStr = $token[1];
            }

            if ($tokenStr !== null) {
                if ($inString) {
                    if ($tokenStr === '}') {
                        $depth--;

                        if ($depth === 0) {
                            continue; // ignore outer closing brace
                        }
                    } else {
                        $depth++;

                        if ($depth === 1) {
                            continue; // ignore outer opening brace
                        }
                    }
                }

                $result[$key] = $tokenStr;
            }
        }

        return $result;
    }

    /**
     * @return int[] | null
     */
    private function findPair(array $tokens): ?array
    {
        if (count($tokens) < 2) {
            return null;
        }

        $last = '';
        $lastKey = 0;

        foreach ($tokens as $key => $token) {
            if ($token === '{' && $last === '->') {
                continue;
            }

            if (($last === '{' || $last === '${') && $token === '}') {
                return [$lastKey, $key];
            } else {
                $last = $token;
                $lastKey = $key;
            }
        }

        return null;
    }

    private function validNext(array $tokens, int $index, int $endIndex): bool
    {
        $index++;

        if ($tokens[$index] === '}') {
            return false; // empty block
        }

        $trivialTokens = [T_COMMENT, T_DOC_COMMENT, T_WHITESPACE];
        $hasNonTrivialTokens = false;

        while ($index < $endIndex) {
            if ($tokens[$index] === ';') {
                return false; // array/string offset accesses can't contain semicolon
            }

            if  (!is_array($tokens[$index]) || !in_array($tokens[$index][0], $trivialTokens, true)) {
                $hasNonTrivialTokens = true;
            }

            $index++;
        }

        return $hasNonTrivialTokens;
    }

    private function fatalError(string $text, string $file = ''): void
    {
        if ($file) {
            unlink($file);
        }

        if ($this->diffContent !== '') {
            $this->writeDiff();
        }

        die($text . PHP_EOL);
    }

    private function diff(string $file, string $convertedFile): void
    {
        if (!$this->diff) {
            return;
        }

        $original = fopen($file, 'rb');
        $converted = fopen($convertedFile, 'rb');
        $i = 1;

        $this->diffContent .= "file: $file" . PHP_EOL;

        while (($line = fgets($original)) !== false) {
            $newLine = fgets($converted);

            if ($line !== $newLine) {
                $this->diffContent .= $i . 'c' . $i . PHP_EOL;
                $this->diffContent .= "< $line";
                $this->diffContent .= '---' . PHP_EOL;
                $this->diffContent .= "> $newLine" . PHP_EOL;
            }

            $i++;
        }

        fclose($converted);
        fclose($original);
    }

    private function writeDiff(): void
    {
        if ($this->diff === true) {
            echo $this->diffContent;
        } else if ($this->diff !== false) {
            file_put_contents($this->diff, $this->diffContent);
        }
    }

    public function __destruct()
    {
        $this->writeDiff();
    }
}