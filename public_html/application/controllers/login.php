<?php 

class Login extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		// I think I might want to also load another model here (user_model)?
		// no time now, need to submit this
 	}
 	
 	public function index()
 	{
 		// if there is a username in the session
 		if(($this->session->userdata('user_name')!=""))
  		{
			// route the user to the welcome view
   			$this->welcome();
  		}
  		else
  		{
  			// they aren't logged in, so, give them the login page
   			$data['title']= 'Login';
   			$this->load->view('templates/header', $data);
   			$this->load->view("user/login", $data);
   			$this->load->view('templates/footer',$data);
   			
  		}
 	}
	
 	public function welcome()
 	{
 		// they are logged in, give them access to the features
  		$data['title']= 'Welcome';
  		$this->load->view('templates/header', $data);
  		$this->load->view('user/welcome', $data);
  		$this->load->view('templates/footer',$data);
 	}
// need two logins because there are two ways to get there. 
// long term I want this to be DRY, but I'm just not able to figure out why
 	public function login()
 	{
		$this->load->helper('email');
		
		// I am not using this, it's not working and i don't know why.
 		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
  		$this->form_validation->set_rules('pswd', 'Password', 'trim|required|min_length[4]|max_length[32]');
  		
  		// set the variable for email address (serves as a username credential) & pw with one way hash
  		$email=$this->input->post('email');
  		$password=md5($this->input->post('pass'));

		// call the model and check if this un/pw exist s(as typed by the user)
  		$result=$this->user_model->login($email,$password);
  		// if the user exists and email is verified
  		if($result) 
  		{  			
  			$this->welcome();
  		}
  		else 
  		{  
  			// check if user has been activated  
  			$active=$this->user_model->unactivated($email);
  			if($active)
  			{
  				// need to write error handling and to define source email as a constant
  				echo "<p style=\"color: orange\">Your email or password was incorrect!</p>";
  			}
  			else 
  			{
  				// need to write error handling and to define source email as a constant
  				echo "<p style=\"color: orange\">Your email has not yet been verified, please check for an email from ";
  				echo  "johnwhim@gmail.com </p>";
  				$this->index();
  			}
  		}
 	}
	
	// Placeholder for future error handling 	
 	public function login_error()
 	{
 		echo " error!";
   		$data['error']= 'Invalid username or password';
   		$this->load->view('templates/header', $data);
   		$this->load->view("login/login", $data);
   		$this->load->view('templates/footer',$data);
 	}
 }
 ?>