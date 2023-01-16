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
				$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
				$userIp=$this->input->ip_address();
				$secret = $this->config->item('google_secret');
				$url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$userIp;
		 
				$ch = curl_init(); 
				curl_setopt($ch, CURLOPT_URL, $url); 
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
				$output = curl_exec($ch); 
				curl_close($ch);      
				 
				$status= json_decode($output, true);

				if ($status['success'] == false){
					$data['errorSession'] = 'Sorry Recaptcha Unsuccessful!!';
					$this->load->view('login',$data);
				}else {
					
					$this->load->model("User_model");
					$login = $this->User_model->login(array("username"=>$this->input->post("username"),"password"=>$this->input->post("password")));
					if($this->User_model->login(array("username"=>$this->input->post("username"),"password"=>$this->input->post("password"))) == -1){
						$data['errorSession'] = "Invalid username and password"; 
						$this->load->view('login',$data);
					}else{
						
						$client = $this->mysoapclient->getClient();
						$loginRequest = array("strUser"=>"LKcentrix_UAT","strPwd"=>"xds100");
						
						$loginResponse = $client->Login($loginRequest);

						if ($loginResponse->LoginResult == "UserNotFound" || $loginResponse->LoginResult == "NotAuthenticated"){
							$data['errorSession'] = "Invalid username and password"; 
							$this->load->view('login',$data);
						}else{
							$data = array('id'=>$login[0]->id,'site'=>'tracing portal');
							$response = $this->redisclient->generate($data);
							
							if($response->status == "success"){
								$this->session->set_userdata(array('username' => $this->input->post("username"),'isloggedin' => true,'tokenId' => $loginResponse->LoginResult,'userId' => $login[0]->id));
								redirect('/tracereport');
							}else {
								$data['errorSession'] = "You have an active session in another computer, please logout and login here"; 
								$this->load->view('login',$data);
							}
						}
					}
				}
				
		}
		else
		{
				$data['errorSession'] = "Username and Password required";
				if ($this->session->userdata('tokensession')){

						$datax = array('id'=>$this->session->userdata('userId'),'site'=>'tracing portal');
						$data['errorSession'] = $this->session->userdata('tokensession');
						$response = $this->redisclient->remove($datax);
						$this->session->sess_destroy();
						$this->load->view('login',$data);
				} else {
					$this->load->view('login',$data);
				}
		}
	
	}
	
	public function logout()
	{
		$datax = array('id'=>$this->session->userdata('userId'),'site'=>'tracing portal');
		$response = $this->redisclient->remove($datax);
		$data['logoutSession'] = "";
		$data['errorSession'] = "Successfully logged out";
		$this->session->sess_destroy();
		$this->load->view('login',$data);
	}
}
