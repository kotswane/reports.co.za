<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Company Registration Number</title>
</head>
<body>
<section class="content-header">
    <h1>LKCentrix Solutions PTY LTD</h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo site_url();?>/procurementreport/companyregistrationno"><i class="fa fa-dashboard"></i> Dashboard</a></li><li>Procurement Report</li>
        <li class="active">Company Registration Number</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Company Registration Number</h3>
            <div class="box-tools pull-right">
                <a href="<?php echo site_url();?>/procurementreport/companyregistrationno" type="button" class="btn btn-box-tool"><i class="fa fa-list-ul"></i></a>
            </div>
        </div>
           <!-- Error Alert -->
            <?php if($errorMessage != ""){?>
				<div class="alert alert-danger" role="alert"><?php echo $errorMessage;?></div>
		   <?php }?>
        <form data-toggle="validator" role="Company Name Search" action="<?php echo site_url();?>/procurementreport/companyregistrationno" method="post">
            <div class="box-body">
                 <div class="form-group">
                    <label for="companyregistrationno">Registration Number</label>
                    <input type="text"  class="form-control" value="<?php echo set_value('companyregistrationno');?>" id="companyregistrationno" name="companyregistrationno" placeholder="Company Registration Number" maxlength="60" autofocus required/>
                 </div>
            </div>
            <div class="box-footer">
                <button class="btn btn-primary" type="submit"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search</button>
            </div>
        </form>
    </div>
</section>
</body>
</html>


