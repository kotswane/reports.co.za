<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
    class mysoapclient {
		
	   private $client;
	   function __construct() {
		   $options = array(
				'uri'=>'http://schemas.xmlsoap.org/soap/envelope/',
				'style'=>SOAP_RPC,
				'use'=>SOAP_ENCODED,
				'soap_version'=>SOAP_1_1,
				'cache_wsdl'=>WSDL_CACHE_MEMORY,
				'connection_timeout'=>15,
				'trace'=>true,
				'encoding'=>'UTF-8',
				'exceptions'=>true,
			);
		
			$wsdl = "https://www.uat.xds.co.za/xdsconnect/XDSConnectWS.asmx?wsdl";
	
			try{
				$this->client = new SoapClient($wsdl, $options);
			}catch(Exception $ex){
				print_r($ex->getMessage());
			}
			
	   }
	   
	   public function getClient(){
		   return $this->client;
	   }
	   
	}
?>