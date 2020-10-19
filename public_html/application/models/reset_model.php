<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reset_model extends CI_Model {
 
 	public function __construct()
 	{
 		$this->load->database();
 	}
 	
 	public function update_password()
 	{
 		$data=array(
    		'password'=>md5($this->input->post('password'))
  		);
  		
  		$email = $this->input->post('email_address');
    	$password = md5($this->input->post('password'));
  		
  		$this->db->where('email', $email); 
  		$this->db->update('user', $data);
  			
		return true;
	
 	}
}