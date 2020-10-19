<?php
class Verify extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('verify_model');
		// this might not strictly be necessary anymore...
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->helper('url');
 	}

	public function activate()
	{
				
		$this->load->helper('url');
		$activation_code = $this->uri->segment(3);
		
		// see if the user can be activated
		$activation = $this->verify_model->verify($activation_code);

		// TODO someday add a way to auto-login

		// for now, make them login	it allos them to remeber UN/PW		
	 	$data['title']= 'Verify';
  		$this->load->view('templates/header', $data);
  		$this->load->view('user/verify', $data);
  		$this->load->view('templates/footer',$data);

	}

}