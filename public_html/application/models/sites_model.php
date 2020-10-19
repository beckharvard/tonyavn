<?php
class Sites_model extends CI_Model {

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
	
	public function set_sites()
	{
		$this->load->helper('url');

		$slug = url_title($this->input->post('element_Label'), 'dash', TRUE);

		$data = array(
			'element_Label' => $this->input->post('element_Label'),
			'href' => $this->input->post('href'),
			'type' => $this->input->post('type')
		);

		return $this->db->insert('websites', $data);
	}
	
	public function get_messages($senders_id)
	{		
		$this->db->select('message', 'created')->from('messages')->where('id', $senders_id )
		->order_by('created');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	
	}
	
	public function set_messages()
	{
		$this->load->helper('url');
		//set the time of the message
		$timestamp = date('Y-m-d G:i:s');		
		//set up an array for the data to be stored in the DB
		$data = array(
			'message' => $this->input->post('message'),
			'id' => $this->session->userdata('user_id'),
			'created' => $timestamp
		);	
		// create the SMS string
		$message = $this->session->userdata('user_name') . ' sent you a message saying: ' . $this->input->post('message');
		// send it
		$this->send_sms($message);
		// store it in the database
		return $this->db->insert('messages', $data);
	}
	
	public function delete_site($data)
	{
		$this->load->helper('url');
		// write the db update query like
		$this->db->where(array('href' => $data['href']));
		$this->db->delete('websites'); 
		// check that the record exists
		// delete it
		// return the updated list via get_sites
		return $this->get_sites();
		
	}
	
	public function send_sms($message)
	{

		mail( '6179576462@txt.att.net', '', $message  );
	
	}
	
	
}