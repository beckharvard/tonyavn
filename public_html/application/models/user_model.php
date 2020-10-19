<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
 
 	public function __construct()
 	{
  		parent::__construct();
  		$this->load->helper('date');
 	}
// this probably can go, too! UGH 	
 	function exists($email)
 	{
 		// construct the query for this user record
  		$this->db->where("email",$email);
  		$query=$this->db->get("user");
  		if($query->num_rows()>0)
  		{
  			return true;
  		}
  		return false;
 	}
 	
 	function unactivated($email)
 	{
 		// construct the query for this user record
  		$this->db->where("email",$email);
  		$this->db->select('activated');
  		// check if they are activated?
  		$query=$this->db->get("user");

		if($query->num_rows()>0)
  		{
			$row = $query->row_array();
			if( $row['activated'] > 0 )
			{
  				return true;
  			}
  		}
  		return false;
 	}
 	
// Redundant yes? yet? 
 	function login($email,$password)
 	{
 		// construct the query for this user record
  		$this->db->where("email",$email);
  		$this->db->where("password",$password);
  		$query=$this->db->get("user");

		// if there is a match
  		if($query->num_rows()>0)
  		{
  			// check if that user has been activated
  			$row = $query->row_array();
			if( $row['activated'] > 0 )
			{
				// iterate through that result
   				foreach($query->result() as $rows)
   				{
    	  			//add all data to session
					$newdata = array(
      				'user_id'  => $rows->id,
      				'user_name'  => $rows->username,
      				'user_email'    => $rows->email,
      				'logged_in'  => TRUE,
					);
   				}
   			// set the session
   			$this->session->set_userdata($newdata);
   			return true;
   			}  			
  		}
  		return false;
 	}
 
 	public function add_user()
 	{
 			
 		// set the user data from post into an array 
  		$data=array(
    		'username'=>$this->input->post('user_name'),
    		'email'=>$this->input->post('email_address'),
    		'password'=>md5($this->input->post('password'))
  		);
  		// grab the email from post
  		$email = $this->input->post('email_address');  		
  		// check for the email in the db
  		$this->db->select('email');
  		$this->db->from('user');
  		$this->db->where('email', $this->input->post('email_address')); 
  		$check_email=$this->db->get();
  		
  		
  		// Check for a user with this email address if none
  		if(!$check_email->num_rows() > 0 )
  		{ 			
  			 // insert the new record
  			$this->db->insert('user',$data);
  		
			// set the users email in the session for retrieval in user contoller
			// not 100% convinced this it the best way/or place to do this...
			$newdata = array('user_email' => $this->input->post('email_address'));
			$this->session->set_userdata($newdata);

			return $data;
  		} 
		// need to fix this for view, but at least I am checking!  	
		log_message('5', 'email address exists, registration failed.');
		$empty = array();	

		return $empty;
 	}
 	
 	public function get_activation($registrant_email)
 	{
 		// call to generate an activation code
 		$activation_code = $this->generateRandomString();
 		// stuff that into the datdase
 		$activation_data=array(
 			'activation_code'=>$activation_code
 		);
 		$this->db->where('email', $registrant_email);
 		$this->db->update('user', $activation_data);
 		
 		return $activation_code;
 	
 	}
 	
 	// http://stackoverflow.com/questions/4356289/php-random-string-generator
 	public function generateRandomString($length = 10) 
 	{
    	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    	$charactersLength = strlen($characters);
    	$randomString = '';
    	for ($i = 0; $i < $length; $i++) 
    	{
    	    $randomString .= $characters[rand(0, $charactersLength - 1)];
    	}
   		return $randomString;
	} 	
 	
}
?>