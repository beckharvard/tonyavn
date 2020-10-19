<?php
class Pages_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->helper('date');
	}
	
	public function get_sites($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('websites');
			return $query->result_array();
		}

		$query = $this->db->get_where('websites', array('slug' => $slug));
		return $query->row_array();
	}

}
