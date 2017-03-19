<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function __construct() {
		parent::__construct();	//toujours récuperer le __construct CI 
		// $this->output->enable_profiler(true);// ensuite on debug
		$this->load->helper('url');
		$this->load->helper('date');	
		$this->load->library('session');
		$this->load->helper('security');
		$this->load->model('LoginModel');
	}		

	public function login()	{

		$client = $this->input->post('utilisateur');
		$pass = $this->input->post('pass');

		// magic_quotes_gpc($client);

		$check = $this->LoginModel->log($client, md5($pass));

		$this->load->view('reads/header_login');
		$this->load->view('login');
		$this->load->view('reads/footer');	

		if($this->input->post() == false){

		} else if (!empty($check)) {

			$this->session->set_userdata('client', $client);
			// $test = $this->session->client;
			redirect(base_url('/index.php/sessionForUser'));			
			// $u['lol'] = '<span id="lol">Signed in as' . $this->session->set_userdata('client', $client).'</span>';

		} else {
			
			echo 'Enter a valid password or user ! ';
		}		
	}
}
