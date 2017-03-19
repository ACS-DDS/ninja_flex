<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TchatController extends CI_Controller {

	public function __construct() {
		parent::__construct();	//toujours récuperer le __construct CI 
		$this->output->enable_profiler(true);// ensuite on debug
		$this->load->helper('url');
		$this->load->helper('date');	
		$this->load->library('session');
		$this->load->model('TchatModel');
	}	
	public function tchat(){
		//$id_session = $this->session->client;
		//****************************************************************************************
			/**TCHAT (OPTIONNEL)**/
		//****************************************************************************************
		$message = htmlentities($this->input->post('message_post'));
		$num = htmlentities($this->input->post('num'));	

		if(!empty($message)){

			$this->TchatModel->message($message, $num);

		}
			//****************************************************************************************
			/**INSERT MESS FINIS (OPTIONNEL)**/
			//****************************************************************************************
		$read['userpost'] = $this->TchatModel->getHistory();

		$this->load->view('tchat', $read);
			
	}
}		