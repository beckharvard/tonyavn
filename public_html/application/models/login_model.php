<?php class Login_model extends CI_Model {
 
 	public function __construct()
 	{
  		parent::__construct();
  		$this->load->helper('date');
 	}
 	
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
 	
}
?>