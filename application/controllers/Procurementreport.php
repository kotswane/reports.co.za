<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Procurementreport extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	 
	private $client;
	private $reports;
	private $reports_type;
	
	public function  __construct(){
		ini_set('default_socket_timeout', 6000);
		parent::__construct();
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		
		
		$IsTicketValid = array("XDSConnectTicket"=>$this->session->userdata('tokenId'));
		
		$this->client = $this->mysoapclient->getClient();
		
		if($this->client->IsTicketValid($IsTicketValid) != true){
			$this->session->set_userdata(array('tokensession' =>'Session expired, please login again'));
			redirect('user/login');
		}
		$this->load->model("Auditlog_model");
		$this->reports = $this->Report_model->list_reports();
		$this->reports_type = $this->Report_type_model->list_reports_type();	
	 }
	 
	
	public function companyname(){
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}	

		$data = array('id'=>$this->session->userdata('userId'),'site'=>'tracing portal');
		$response = $this->redisclient->request($data);

		if($response->status != "success"){
			$this->session->set_userdata(array('tokensession' => 'Session expired, please login again'));
			redirect('user/login');
		}	
		
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;
		$data["successFlash"] = "";
		$data["infoFlash"] = "";
		$data["errorFlash"] = "";
		$data["errorMessage"] = "";
		$data["consumerList"] = array();

		
		if ($this->input->post("postback")=="post"){
				
			
			$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
			
			$userIp=$this->input->ip_address();
			$secret = $this->config->item('google_secret');
			$url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$userIp;
	 
			$ch = curl_init(); 
			curl_setopt($ch, CURLOPT_URL, $url); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
			$output = curl_exec($ch); 
			curl_close($ch);      
			 
			$status = json_decode($output, true);			
			if ($status['success'] == false){
				$data['errorMessage'] = 'Sorry Recaptcha Unsuccessful!!';
				$data["content"] = "procurementreport/companyname";
				$data["consumerList"]['details'] = array();
				$this->load->view('site',$data);
			} else {

				$IsTicketValid = array("XDSConnectTicket"=>$this->session->userdata('tokenId'));
				
				$this->client = $this->mysoapclient->getClient();
				$this->latestclient = $this->mysoapclient->getClientlatest();
				$resp = $this->client->IsTicketValid($IsTicketValid);
				if($resp->IsTicketValidResult != true || $resp->IsTicketValidResult ==""){
					$this->session->set_userdata(array('tokensession' =>'Session expired, please login again'));
					redirect('user/login');
				}
			
				
				if($this->input->post('companyname') == "" ){
					$data["consumerList"]['details'] = array();
					$data["errorMessage"] = "Company name required";
					$data["content"] = "procurementreport/companyname";
					$this->load->view('site',$data);
				} else {
					
					
					$ref = $this->session->userdata('userId')."-".uniqid()."-".rand(10,100);
					$response = $this->client->ConnectBusinessMatch(array(
						'Reg1' => '',
						'Reg2' => '',
						'Reg3' => '',
						'BusinessName' => $this->input->post('companyname'),
						'VatNo' => '',
						'SolePropIDNo' => '',
						'YourReference' => $ref,
						'ConnectTicket' => $this->session->userdata('tokenId')));

					$xml = simplexml_load_string($response->ConnectBusinessMatchResult,"SimpleXMLElement");
	
					if ($xml->NotFound || $xml->Error){
						
						$auditlog = array(
						"auditlog_reportname"=>"procurementreport",
						"auditlog_userId"=>$this->session->userdata('userId'),
						"auditlog_reporttype"=>"companyname",
						"auditlog_searchdata"=>json_encode(array(
						'Reg1' => '',
						'Reg2' => '',
						'Reg3' => '',
						'BusinessName' => $this->input->post('companyname'),
						'VatNo' => '',
						'SolePropIDNo' => '',
						'YourReference' => $ref)),
						"auditlog_fnexecuted" => "ConnectBusinessMatch",
						"auditlog_issuccess" => false);
						$this->Auditlog_model->save($auditlog);						
						
						
						if ($xml->Error){
							$data["errorMessage"] = $xml->Error;
						}else{
							$data["errorMessage"] = $xml->NotFound;
						}
						$data["consumerList"]['details'] = array();
						$data["content"] = "procurementreport/companyname";
						$this->load->view('site',$data);
						
					}else{
						
						$auditlog = array(
						"auditlog_reportname"=>"procurementreport",
						"auditlog_userId"=>$this->session->userdata('userId'),
						"auditlog_reporttype"=>"companyname",
						"auditlog_searchdata"=>json_encode(array(
						'Reg1' => '',
						'Reg2' => '',
						'Reg3' => '',
						'BusinessName' => $this->input->post('companyname'),
						'VatNo' => '',
						'SolePropIDNo' => '',
						'YourReference' => $ref)),
						"auditlog_fnexecuted" => "ConnectBusinessMatch",
						"auditlog_issuccess" => true);
						$this->Auditlog_model->save($auditlog);
						
						$objJsonDocument = json_encode($xml);
						$data["consumerList"]['details'] = json_decode($objJsonDocument,TRUE);
						$data["content"] = "procurementreport/companyname";
						$this->load->view('site',$data);
						
					}
				}
			}
		}else {
			$data["consumerList"]['details'] = array();
			$data["content"] = "procurementreport/companyname";
			$this->load->view('site',$data);
		}		
	}
	
	public function companyregistrationno(){
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}	

		$data = array('id'=>$this->session->userdata('userId'),'site'=>'tracing portal');
		$response = $this->redisclient->request($data);

		if($response->status != "success"){
			$this->session->set_userdata(array('tokensession' => 'Session expired, please login again'));
			redirect('user/login');
		}	
		
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;
		$data["successFlash"] = "";
		$data["infoFlash"] = "";
		$data["errorFlash"] = "";
		$data["errorMessage"] = "";
		$data["consumerList"] = new stdClass;

		
		if ($this->input->post("postback")=="post"){
				
			
			$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
			
			$userIp=$this->input->ip_address();
			$secret = $this->config->item('google_secret');
			$url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$userIp;
	 
			$ch = curl_init(); 
			curl_setopt($ch, CURLOPT_URL, $url); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
			$output = curl_exec($ch); 
			curl_close($ch);      
			 
			$status = json_decode($output, true);			
			if ($status['success'] == false){
				$data['errorMessage'] = 'Sorry Recaptcha Unsuccessful!!';
				$data["content"] = "procurementreport/companyregistrationno";

				$this->load->view('site',$data);
			} else {

				$IsTicketValid = array("XDSConnectTicket"=>$this->session->userdata('tokenId'));
				
				$this->client = $this->mysoapclient->getClient();
				$this->latestclient = $this->mysoapclient->getClientlatest();
				$resp = $this->client->IsTicketValid($IsTicketValid);
				if($resp->IsTicketValidResult != true || $resp->IsTicketValidResult ==""){
					$this->session->set_userdata(array('tokensession' =>'Session expired, please login again'));
					redirect('user/login');
				}
			
			   $ref = $this->session->userdata('userId')."-".uniqid()."-".rand(10,100);
				$regnumb = explode("/",$this->input->post('companyregistrationno'));
				if(count($regnumb) < 3){
					$data["errorMessage"] = "invalid Company Registration Number Format, please use the correct formr eg. 2222/444426/12";
					$data["content"] = "procurementreport/companyregistrationno";
					$this->load->view('site',$data);
				} else {

					$response = $this->client->ConnectBusinessMatch(array(
						'Reg1' => $regnumb[0],
						'Reg2' => $regnumb[1],
						'Reg3' => $regnumb[2],
						'BusinessName' => '',
						'VatNo' => '',
						'SolePropIDNo' => '',
						'YourReference' => $ref,
						'ConnectTicket' => $this->session->userdata('tokenId')));
					

					$xml = simplexml_load_string($response->ConnectBusinessMatchResult,"SimpleXMLElement");
					if ($xml->NotFound || $xml->Error){
						
						if ($xml->Error){
							$data["errorMessage"] = $xml->Error;
						}else{
							$data["errorMessage"] = $xml->NotFound;
						}
						
						$auditlog = array(
						"auditlog_reportname"=>"procurementreport",
						"auditlog_userId"=>$this->session->userdata('userId'),
						"auditlog_reporttype"=>"companyregistrationno",
						"auditlog_searchdata"=>json_encode(array(
						'Reg1' => $regnumb[0],
						'Reg2' => $regnumb[1],
						'Reg3' => $regnumb[2],
						'BusinessName' => '',
						'VatNo' => '',
						'SolePropIDNo' => '',
						'YourReference' => $ref)),
						"auditlog_fnexecuted" => "ConnectBusinessMatch",
						"auditlog_issuccess" => false);
						$this->Auditlog_model->save($auditlog);	
						
						$data["content"] = "procurementreport/companyregistrationno";
						$this->load->view('site',$data);
						
					}else{
					
						$auditlog = array(
						"auditlog_reportname"=>"procurementreport",
						"auditlog_userId"=>$this->session->userdata('userId'),
						"auditlog_reporttype"=>"companyregistrationno",
						"auditlog_searchdata"=>json_encode(array(
						'Reg1' => $regnumb[0],
						'Reg2' => $regnumb[1],
						'Reg3' => $regnumb[2],
						'BusinessName' => '',
						'VatNo' => '',
						'SolePropIDNo' => '',
						'YourReference' => $ref)),
						"auditlog_fnexecuted" => "ConnectBusinessMatch",
						"auditlog_issuccess" => true);
						$this->Auditlog_model->save($auditlog);		
						
						$objJsonDocument = json_encode($xml);
						$data["consumerList"] = json_decode($objJsonDocument);
						$data["content"] = "procurementreport/companyregistrationno";
						$this->load->view('site',$data);
						
					}
				}
			}
		}else {
			$data["content"] = "procurementreport/companyregistrationno";
			$this->load->view('site',$data);
		}
	}
	
	public function customerdatalist(){
		
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}	

		$data = array('id'=>$this->session->userdata('userId'),'site'=>'tracing portal');
		$response = $this->redisclient->request($data);

		if($response->status != "success"){
			$this->session->set_userdata(array('tokensession' => 'Session expired, please login again'));
			redirect('user/login');
		}	
		
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;
		$data["successFlash"] = "";
		$data["infoFlash"] = "";
		$data["errorFlash"] = "";
		$data["errorMessage"] = "";

		$response = $this->getSearchData($this->uri->segment(3), $this->uri->segment(4),$this->uri->segment(5));
		$data['content'] = "procurementreport/customerdatalist";
		$data['report'] = $response;
		$this->load->view('site',$data);
	}
	
	private function getSearchData($enquiryID, $enquiryResultID, $type){
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		
		$data = array('id'=>$this->session->userdata('userId'),'site'=>'tracing portal');
		$response = $this->redisclient->request($data);

		if($response->status != "success"){
			$this->session->set_userdata(array('tokensession' => 'Session expired, please login again'));
			redirect('user/login');
		}

		$IsTicketValid = array("XDSConnectTicket"=>$this->session->userdata('tokenId'));
		
		$this->client = $this->mysoapclient->getClient();
		$this->latestclient = $this->mysoapclient->getClientlatest();
		$resp = $this->client->IsTicketValid($IsTicketValid);
		if($resp->IsTicketValidResult != true || $resp->IsTicketValidResult ==""){
			$this->session->set_userdata(array('tokensession' =>'Session expired, please login again'));
			redirect('user/login');
		}
		
		
		$response = $this->client->ConnectGetResult(array(
				'EnquiryID' => $enquiryID,
				'EnquiryResultID' => $enquiryResultID, 
				'ConnectTicket' => $this->session->userdata('tokenId'), 
				'ProductID' => 41));
			
		$xml = simplexml_load_string($response->ConnectGetResultResult,"SimpleXMLElement");
		$objJsonDocument = json_encode($xml);
		$arrOutput = json_decode($objJsonDocument);
		
		$auditlog = array(
			"auditlog_reportname"=>"procurementreport",
			"auditlog_userId"=>$this->session->userdata('userId'),
			"auditlog_reporttype"=> $type,
			"auditlog_searchdata"=>json_encode(array(
				'EnquiryID' => $enquiryID,
				'EnquiryResultID' => $enquiryResultID,
				'ProductID' => 41)),
			"auditlog_fnexecuted" => "ConnectGetResult",
			"auditlog_issuccess" => true
		);
		$this->Auditlog_model->save($auditlog);
				
		return $arrOutput;
	}
}
