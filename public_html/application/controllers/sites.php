<?php
class Sites extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('sites_model');
		// needed for create() because we don't want non-users adding pages
		$this->load->library('session');
		$this->load->helper('form');
		
	}

	public function index()
	{
		
		// call get_sites (connect to the DB and grab the data)
		$data['websites'] = $this->sites_model->get_sites();
		$data['title'] = 'home';

		$this->load->view('templates/header', $data);
		$this->load->view('sites/index', $data);
		$this->load->view('templates/footer');
	}

	public function view()
	{
		// connect to the DB and grab the data
		$data['websites'] = $this->sites_model->get_sites();
		// if the result set is empty, show a 404
		if (empty($data['site']))
		{
			show_404();
		}
		// load the view (for pages & sites)
		$this->load->view('templates/header', $data);
		$this->load->view('sites/view', $data);
		$this->load->view('pages/view', $data);
		$this->load->view('templates/footer');
	}
	
	// this begins the process of sending an SMS
	public function contact()
	{
		if(($this->session->userdata('user_name')!=""))
  		{
			$this->load->helper('form');
			$this->load->library('form_validation');
	
			$title['title'] = 'Send SMS';
			
			$this->form_validation->set_rules('message', 'message', 'required');
			
			if ($this->form_validation->run() === FALSE)
			{
				// load the view
				$this->load->view('templates/header', $title);
				$this->load->view('sites/contact');
				$this->load->view('templates/footer');

			}
			else
			{
				// add the new message to the DB
				$this->sites_model->set_messages();
				// get the list of messages 
				$senders_id = $this->session->userdata('user_id');
				
				// calls the model and uses the surrent user's id to get existing messages
				$message['message'] = $this->sites_model->get_messages($senders_id);
				// now we can sent the message	
				
				if (isset($message))
        		{
        			// load the view with the data
					$this->load->view('templates/header', $title);
					$this->load->view('sites/messages', $message);
					$this->load->view('templates/footer');
        		}
				else 
				{
					// if no results, we need to handle that with a message
					$message['message'] = array("No messages found.");
					
					$this->load->view('templates/header', $title);
					$this->load->view('sites/messages', $message);
					$this->load->view('templates/footer');
				}
				
			}
		}
		// not yet a registered user, take the to registration
		else
		{
			$data['title']= 'Register';
   			$this->load->view('templates/header', $data);
   			$this->load->view("user/registration");
   			$this->load->view('templates/footer');
		}
	}
	
	public function create()
	{
	
		if(($this->session->userdata('user_name')!=""))
  		{
			$this->load->helper('form');
			$this->load->library('form_validation');

			$title['title'] = 'Add work';


			$this->form_validation->set_rules('element_Label', 'element_Label', 'required');
			$this->form_validation->set_rules('href', 'href', 'required');
			$this->form_validation->set_rules('type', 'type', 'required');

			if ($this->form_validation->run() === FALSE)
			{
				// load the view
				$this->load->view('templates/header', $title);
				$this->load->view('sites/create', $title);
				$this->load->view('templates/footer');

			}
			else
			{
				// add the new site
				$this->sites_model->set_sites();
				// get the sites data only after setting the new site
				$data['websites'] = $this->sites_model->get_sites();
				// load the view
				$this->load->view('templates/header', $title);
				$this->load->view('sites/success', $data);
				$this->load->view('templates/footer');
			}
		}
		else
		{
			$data['title']= 'Register';
   			$this->load->view('templates/header', $data);
   			$this->load->view("user/registration");
   			$this->load->view('templates/footer');
		}
	}
	public function delete()
	{
		if(($this->session->userdata('user_name')!="") && ($this->session->userdata('logged_in') == 1))
  		{
			// add check for session username in a conditional here!
			// call get_sites (connect to the DB and grab the data)

			if (!$this->input->post())
			{				
				$data['websites'] = $this->sites_model->get_sites();
				$data['title'] = 'Delete';

				$this->load->view('templates/header', $data);
				$this->load->view('sites/delete', $data);
				$this->load->view('templates/footer');			
			}
			else
			{
				$data = $this->input->post();
				$result = $this->sites_model->delete_site($data);
				
				if($result)
				{
					$updated['websites'] = $this->sites_model->get_sites();
					$success['title'] = "Sucess! Delete Another?";
					$this->load->view('templates/header', $success);
					$this->load->view('sites/delete', $updated);
					$this->load->view('templates/footer');			
				}
				else
				{
					echo "<p style=\"color: orange\">Unable to delete that record.</p>";
				}
			}
  		}
  		else
		{
			$data['title']= 'Register';
   			$this->load->view('templates/header', $data);
   			$this->load->view("user/registration");
   			$this->load->view('templates/footer');
		}
  		
	}	
}