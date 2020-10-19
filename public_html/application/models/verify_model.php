<?php
class Verify_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->helper('date');
	}
	
	function verify($activation_code)
 	{ 	
  		$this->db->where("activation_code",$activation_code);
  		$query=$this->db->get("user");
  		if($query->num_rows()>0)
  		{ 			
  			// mark them as activated
 			 $activation=array(
 				'activated'=> '1'
 			);
 			$this->db->where("activation_code",$activation_code);
 			$this->db->update('user', $activation);
   			return true;  			
  		}
  		return false;
 	}	
}
?>