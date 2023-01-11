<?php
//error_reporting(E_ALL);
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracereport extends CI_Controller {

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
	private $latestclient;
	private $reports;
	private $reports_type;
	
	
	public function  __construct(){
		parent::__construct();
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		

		$this->load->model("Province_model");
		
		$this->reports = $this->Report_model->list_reports();
		$this->reports_type = $this->Report_type_model->list_reports_type();
		
	 }
	 
	public function index(){
		$data["successFlash"] = "";
		$data["errorFlash"] = "";
		$data["infoFlash"] = "";
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;
		$data["content"] = "dashboard/home";
		
		$this->load->view('site',$data);
	}
	
	public function idsearch(){
		$data["successFlash"] = "";
		$data["infoFlash"] = "";
		$data["errorFlash"] = "";
		$data["errorMessage"] = "";
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;
		
		if ($this->input->post("postback")=="post"){
			
			if(!$this->input->post('idNumber')){
				redirect('tracereport/id-search');
			}
			
			$IsTicketValid = array("XDSConnectTicket"=>$this->session->userdata('tokenId'));
		
			$this->client = $this->mysoapclient->getClient();
			$this->latestclient = $this->mysoapclient->getClientlatest();
			$resp = $this->client->IsTicketValid($IsTicketValid);
			if($resp->IsTicketValidResult != true || $resp->IsTicketValidResult ==""){
				$this->session->set_userdata(array('tokensession' =>'Session expired, please login again'));
				redirect('user/login');
			}
		   
			$response = $this->client->ConnectConsumerMatch(array(
			'IdNumber'=>$this->input->post('idNumber'),
			'ConnectTicket'=>$this->session->userdata('tokenId'),
			'ProductId' => 2,
			'EnquiryReason' => 'Consumer Trace'
			));
			
			$xml = simplexml_load_string($response->ConnectConsumerMatchResult);

			if ($xml->Error || $xml->NotFound){
				if($xml->Error){
					$data["errorMessage"] = $xml->Error[0];
				}else{
					$data["errorMessage"] = $xml->NotFound;
				}
				$data["content"] = "tracereport/id-search";
				$this->load->view('site',$data);
			}else {
				
				$objJsonDocument = json_encode($xml);
				$arrOutput = json_decode($objJsonDocument, TRUE);
				
				$response = $this->getSearchData($arrOutput['ConsumerDetails']['EnquiryID'], $arrOutput['ConsumerDetails']['EnquiryResultID']);
				$data['report'] = $response;
				$this->session->set_userdata(array('report' =>$data['report']));
				$data["content"] = "tracereport/trace-report";
				$this->load->view('site',$data);
			}
		}else{
			$data["content"] = "tracereport/id-search";
			$this->load->view('site',$data);
		}
	}
	
	public function addresssearch(){
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;		
		$data["successFlash"] = "";
		$data["infoFlash"] = "";
		$data["errorFlash"] = "";
		$data["errorMessage"] = "";
		$data["consumerList"] = array();
		$data["provinces"] = $this->Province_model->list_provinces();
		
		
		if ($this->input->post("postback")=="post"){
			
			if(!$this->input->post('listprovinces')){
				redirect('tracereport/addresssearch');
			}
			
			$IsTicketValid = array("XDSConnectTicket"=>$this->session->userdata('tokenId'));
		
			$this->client = $this->mysoapclient->getClient();
			$this->latestclient = $this->mysoapclient->getClientlatest();
			$resp = $this->client->IsTicketValid($IsTicketValid);
			if($resp->IsTicketValidResult != true || $resp->IsTicketValidResult ==""){
				$this->session->set_userdata(array('tokensession' =>'Session expired, please login again'));
				redirect('user/login');
			}
		
			$response = $this->client->ConnectAddressMatch(array(
				'Province' => $this->input->post('listprovinces'),
				'Suburb' => $this->input->post('suburb'), 
				'City' => $this->input->post('city'), 
				'PostalMatch' => true,
				'ConnectTicket' => $this->session->userdata('tokenId'), 
				'StreetName_PostalNo' => $this->input->post('streetName'), 
				'PostalCode' => $this->input->post('postalCode'), 
				'StreetNo' => $this->input->post('streetNo'), 
				'Surname' => $this->input->post('surname')));
				
			$xml = simplexml_load_string($response->ConnectAddressMatchResult,"SimpleXMLElement");
			
			if ($xml->Error || $xml->NotFound){
				if($xml->Error){
					$data["errorMessage"] = $xml->Error[0];
				}else{
					$data["errorMessage"] = $xml->NotFound;
				}
				$data["consumerList"]["details"] = array();
			}else{
				$data["consumerList"]["details"] = array();
				$objJsonDocument = json_encode($xml);
				$arrOutput = json_decode($objJsonDocument, TRUE);

				foreach($arrOutput as $arrOutputListKey => $arrOutputListValue){

					if (!is_array($arrOutputListValue)){
						$data["consumerList"]["details"][]= $arrOutputListValue;
						
						$resp = $this->client->IsTicketValid($IsTicketValid);
						if($resp->IsTicketValidResult != true || $resp->IsTicketValidResult ==""){
							$this->session->set_userdata(array('tokensession' =>'Session expired, please login again'));
							redirect('user/login');
						}
						$response = $this->client->AdminEnquiryResult(array(
						'ConnectTicket' => $this->session->userdata('tokenId'),
						'EnquiryResultID' => $arrOutputListValue['EnquiryResultID']));
				
						$xml = simplexml_load_string($response->AdminEnquiryResultResult,"SimpleXMLElement");
						$objJsonDocument = json_encode($xml);
						$arrOutput = json_decode($objJsonDocument, TRUE);
						$data["consumerList"]["DetailsViewed"][]= (($arrOutput["Result"]["DetailsViewedYN"]=="true")? "Yes":"No");
					}else{

							foreach($arrOutputListValue as $arrOutputListValueListKey => $arrOutputListValueListValue){
							
							$data["consumerList"]["details"][]= $arrOutputListValueListValue;
							$resp = $this->client->IsTicketValid($IsTicketValid);
							if($resp->IsTicketValidResult != true || $resp->IsTicketValidResult ==""){
								$this->session->set_userdata(array('tokensession' =>'Session expired, please login again'));
								redirect('user/login');
							}
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
			
		}else{
			$data["consumerList"]["details"] = array();
		}
		$data["content"] = "tracereport/addresssearch";
		$this->load->view('site',$data);	
	}
	
	public function telephonesearch(){
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;		
		$data["successFlash"] = "";
		$data["infoFlash"] = "";
		$data["errorFlash"] = "";
		$data["errorMessage"] = "";
		$data["consumerList"] = array();
		
		if ($this->input->post("postback")=="post"){
			
			if(!$this->input->post('cellphoneCode')){
				redirect('tracereport/telephonesearch');
			}	
			
			if ($this->input->post("cellphoneCode") != "" && $this->input->post("cellphoneNo") != ""){
				$code = $this->input->post("cellphoneCode");
				$number = $this->input->post("cellphoneNo");
				
			}else if($this->input->post("telephoneCode") != "" && $this->input->post("telephoneNo") != ""){
				$code = $this->input->post("telephoneCode");
				$number = $this->input->post("telephoneNo");
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
				$data["consumerList"]["details"] = array();
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
		} else {
			$data["consumerList"]["details"] = array();
		}
		$data["content"] = "tracereport/telephone-search";
		$this->load->view('site',$data);
		
	}
	
	private function getSearchData($enquiryID, $enquiryResultID){
		
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
				'ProductID' => 2));
				
		$xml = simplexml_load_string($response->ConnectGetResultResult,"SimpleXMLElement");
		$objJsonDocument = json_encode($xml);
		$arrOutput = json_decode($objJsonDocument);
		return $arrOutput;
	}
	
	public function customerdatalist(){
		

		$IsTicketValid = array("XDSConnectTicket"=>$this->session->userdata('tokenId'));
		
		$this->client = $this->mysoapclient->getClient();
		$this->latestclient = $this->mysoapclient->getClientlatest();
		$resp = $this->client->IsTicketValid($IsTicketValid);
		if($resp->IsTicketValidResult != true || $resp->IsTicketValidResult ==""){
			$this->session->set_userdata(array('tokensession' =>'Session expired, please login again'));
			redirect('user/login');
		}
		
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;
		$response = $this->getSearchData($this->uri->segment(3), $this->uri->segment(4));
		$data['report'] = $response;
		$this->session->set_userdata(array('report' =>$data['report']));
		$data["content"] = "tracereport/trace-report";
		$this->load->view('site',$data);
		
	}
	
	public function fuzzysearch(){
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;		
		$data["successFlash"] = "";
		$data["infoFlash"] = "";
		$data["errorFlash"] = "";
		$data["errorMessage"] = "";
		$data["consumerList"] = array();
		$data["content"] = "tracereport/fuzzy-search";
		$this->load->view('site',$data);
		
	}
	
	
	public function downloadidreport(){
		try{
			ob_clean();
			$data['report'] = $this->session->userdata('report');
			$this->load->library('pdf');
			$html = $this->load->view('tracereport/pdf-trace-report',$data, true);
			$this->pdf->createPDF($html, "customer-tracereport-".time(), true);

		}catch(Exception $ex){
			print_r($ex);
		}

	}
}
