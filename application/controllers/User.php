<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
	public function index()
	{
			$data['errorSession'] = "username and password required"; 
			$this->load->view('login',$data);
	}
	
	public function login()
	{
		$data['logoutSession'] = ""; 
		$data['errorSession'] = "";
		
		$this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required'); 

		
		if ($this->form_validation->run() != FALSE)
		{
				$this->load->model("User_model");
				if($this->User_model->login(array("username"=>$this->input->post("username"),"password"=>$this->input->post("password"))) == -1){
					$data['errorSession'] = "Invalid username and password"; 
					$this->load->view('login',$data);
				}else{
					$client = $this->mysoapclient->getClient();
					$loginRequest = array("strUser"=>"LKcentrix_UAT","strPwd"=>"xds100");
					
					$loginResponse = $client->Login($loginRequest);

					if ($loginResponse->LoginResult == "UserNotFound" || $loginResponse->LoginResult == "NotAuthenticated"){
						//$data['errorSession'] = $loginResponse->LoginResult; 
						$data['errorSession'] = "Invalid username and password"; 
						$this->load->view('login',$data);
					}else{
						$this->session->set_userdata(array('username' => $this->input->post("username"),'isloggedin' => true,'tokenId' => $loginResponse->LoginResult));
						redirect('/tracereport');
					}
				}
		}
		else
		{
				$data['errorSession'] = "username and password required"; 
				if ($this->session->userdata('tokensession')){
						$data['errorSession'] = $this->session->userdata('tokensession');
						$this->session->sess_destroy();
				}
				$this->load->view('login',$data);
		}
	
	}
	
	public function logout()
	{
		$data['logoutSession'] = "";
		$data['errorSession'] = "Successfully logged out";
		$this->session->sess_destroy();
		$this->load->view('login',$data);
	}
}
