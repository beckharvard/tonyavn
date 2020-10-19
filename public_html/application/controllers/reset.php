<?php
class Reset extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('reset_model');
		// this might not strictly be necessary anymore...
		parse_str($_SERVER['QUERY_STRING'],$_GET);
		$this->load->helper('url');
 	}

	public function reset()
	{
				
		$this->load->helper('url');
		$email = $this->uri->segment(3);
		
		// see if the user can be reset
		$reset = $this->reset_model->reset($email);

		// TODO someday add a way to auto-login

		// for now, make them login	it allows them to remeber UN/PW		
	 	$data['title']= 'Reset';
  		$this->load->view('templates/header', $data);
  		$this->load->view('user/reset_form', $email);
  		$this->load->view('templates/footer',$data);

	}

}