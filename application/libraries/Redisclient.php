<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
    class redisclient {
		
	   private $client;
	   private $url;
	   
	   function __construct() {
		   $this->url = "http://ec2-13-244-102-227.af-south-1.compute.amazonaws.com:5000/api/";
	   }
	   
	   public function generate($data) {
		 $payload = json_encode($data);
		 $ch = curl_init(); 
		 curl_setopt($ch, CURLOPT_URL, $this->url."generate"); 
		 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		 curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload);
		 curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));		 
		 $output = curl_exec($ch); 
		 curl_close($ch);      
		 $status= json_decode($output);		 
		 return $status;
	   }
	   
	   public function request($data){
		 $payload = json_encode($data);
		 $ch = curl_init(); 
		 curl_setopt($ch, CURLOPT_URL, $this->url."request"); 
		 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		 curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload);
		 curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));		 
		 $output = curl_exec($ch); 
		 curl_close($ch);      
		 $status= json_decode($output);		 
		 return $status;
	   }
	   
	   public function remove($data){
		 $payload = json_encode($data);
		 $ch = curl_init(); 
		 curl_setopt($ch, CURLOPT_URL, $this->url."delete"); 
		 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		 curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload);
		 curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));		 
		 $output = curl_exec($ch); 
		 curl_close($ch);      
		 $status= json_decode($output);		 
		 return $status;
	   }
	   
	}
?>