<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		
		$this->load->model("Auditlog_model");
		$this->reports = $this->Report_model->list_reports();
		$this->reports_type = $this->Report_type_model->list_reports_type();	
	 }
	 
	
	public function index(){
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		if(!$this->session->userdata('agreed_tc_and_c')){
			 redirect('disclaimer');
		}		
		$data = array('id'=>$this->session->userdata('userId'),'site'=>'tracing portal');
		$response = $this->redisclient->request($data);

		if($response->status != "success"){
			$this->session->set_userdata(array('tokensession' => 'Session expired, please login again'));
			redirect('user/login');
		}
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;
		
		$data["content"] = "dashboard/index";
		$this->load->view('site',$data);
	}

}
