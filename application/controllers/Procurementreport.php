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
		
		$this->reports = $this->Report_model->list_reports();
		$this->reports_type = $this->Report_type_model->list_reports_type();	
	 }
	 
	
	public function companyname(){
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;		
		$data["successFlash"] = "";
		$data["infoFlash"] = "";
		$data["errorFlash"] = "";
		$data["errorMessage"] = "";
		$data["consumerList"] = array();

		
		if ($this->input->post("postback")=="post"){
			
			if(!$this->input->post('companyname')){
				redirect('procurementreport/companyname');
			}	
			

			$IsTicketValid = array("XDSConnectTicket"=>$this->session->userdata('tokenId'));
			
			$this->client = $this->mysoapclient->getClient();
			$this->latestclient = $this->mysoapclient->getClientlatest();
			$resp = $this->client->IsTicketValid($IsTicketValid);
			if($resp->IsTicketValidResult != true || $resp->IsTicketValidResult ==""){
				$this->session->set_userdata(array('tokensession' =>'Session expired, please login again'));
				redirect('user/login');
			}
		
			$response = $this->client->ConnectTelephoneMatch(array(
				'TelephoneCode' => $code,
				'ConnectTicket' => $this->session->userdata('tokenId'),
				'TelephoneNo' => $number));
			

			$xml = simplexml_load_string($response->ConnectTelephoneMatchResult,"SimpleXMLElement");
			if ($xml->NotFound){
				$data["errorMessage"] = $xml->NotFound;
			}else{
				$data["consumerList"]["details"] = array();
				$objJsonDocument = json_encode($xml);
				$arrOutput = json_decode($objJsonDocument, TRUE);
				
				foreach($arrOutput as $arrOutputListKey => $arrOutputListValue){
					
					if (!is_array($arrOutputListValue)){
						$data["consumerList"]["details"][]= $arrOutputListValueListValue;
						$response = $this->client->AdminEnquiryResult(array(
						'ConnectTicket' => $this->session->userdata('tokenId'),
						'EnquiryResultID' => $arrOutputListValueListValue['EnquiryResultID']));
						
						$xml = simplexml_load_string($response->AdminEnquiryResultResult,"SimpleXMLElement");
						$objJsonDocument = json_encode($xml);
						$arrOutput = json_decode($objJsonDocument, TRUE);
						$data["consumerList"]["DetailsViewed"][]= (($arrOutput["Result"]["DetailsViewedYN"]=="true")? "Yes":"No");
					
					}else{
						foreach($arrOutputListValue as $arrOutputListValueListKey => $arrOutputListValueListValue){
							
							$data["consumerList"]["details"][]= $arrOutputListValueListValue;
							
							$response = $this->client->AdminEnquiryResult(array(
							'ConnectTicket' => $this->session->userdata('tokenId'),
							'EnquiryResultID' => $arrOutputListValueListValue['EnquiryResultID']));
							
							$xml = simplexml_load_string($response->AdminEnquiryResultResult,"SimpleXMLElement");
							$objJsonDocument = json_encode($xml);
							$arrOutput = json_decode($objJsonDocument, TRUE);
							$data["consumerList"]["DetailsViewed"][]= (($arrOutput["Result"]["DetailsViewedYN"]=="true")? "Yes":"No");
						}
					}
				}
			}
		}
		$data["content"] = "procurementreport/companyname";
		$this->load->view('site',$data);		
	}
	
	public function companyregistrationno(){
		
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;
		$data["successFlash"] = "";
		$data["infoFlash"] = "";
		$data["errorFlash"] = "";
		$data["errorMessage"] = "";
		$data["consumerList"] = array();
		$data["content"] = "procurementreport/companyregistrationno";
		$this->load->view('site',$data);
		
	}
}
