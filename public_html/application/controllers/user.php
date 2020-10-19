<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('pages_model');
		$this->load->model('reset_model');
 	}
 	
 	public function index()
 	{
 		if(($this->session->userdata('user_name')!=""))
  		{		
   			$this->welcome();
  		}
  		else
  		{
   			$data['title']= 'Register';
   			$this->load->view('templates/header', $data);
   			$this->load->view("user/registration", $data);
   			$this->load->view('templates/footer',$data);
  		}
 	}
	
 	public function welcome()
 	{ 	
  		$data['title']= 'Welcome';
  		$this->load->view('templates/header', $data);
  		$this->load->view('user/welcome', $data);
  		$this->load->view('templates/footer',$data);
 	}
 	
 	public function login()
 	{
		$this->load->helper('email');
 		$this->load->library('form_validation');
 		 		
  		$this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
  		$this->form_validation->set_rules('pswd', 'Password', 'trim|required|min_length[4]|max_length[32]');
  		
  		$email=$this->input->post('email');
  		$password=md5($this->input->post('pass'));

  		$result=$this->user_model->login($email,$password);
  		// if the user exists and email is verified
  		if($result) 
  		{
  			
  			$this->welcome();
  		}
  		else 
  		{   
  			$active=$this->user_model->unactivated($email);
  			if($active)
  			{
  				// need to write error handling and to define source email as a constant
  				echo "<p style=\"color: orange\">Your email or password was incorrect!</p>";
  				$data['title']= 'Login';
   				$this->load->view('templates/header', $data);
   				$this->load->view("user/login", $data);
   				$this->load->view('templates/footer',$data);
  			}
  			else if(!$active)
  			{
  				// need to write error handling and to define source email as a constant
  				echo "<p style=\"color: orange\">Your email has not yet been verified, please check for an email from ";
  				echo  "mail@tonyavn.com </p>";
  				$this->index();
  			}
                        else
  			{
  				// need to write error handling and to define source email as a constant
  				echo "<p style=\"color: orange\">Your email or password was incorrect!</p>";
  				$data['title']= 'Login';
   				$this->load->view('templates/header', $data);
   				$this->load->view("user/login", $data);
   				$this->load->view('templates/footer',$data);
  			
  			}
  		}
 	}
 	
 	public function verify()
 	{
 		// Set to, from, message, etc.		
		// get user_email from the session
		$registrant_email = $this->session->userdata('user_email');

		// make an activation code
 		$activation_code = $this->user_model->get_activation($registrant_email);
 		
 		$subject = 'Welcome to my website';
 		$message = 'To activate your account:
 		<a href='.base_url().'index.php/verify/activate/'.$activation_code.'>Click Here</a>';
 	
 		$this->email($registrant_email, $subject, $message);
 	
 		$data['title']= 'Verify';
  		$this->load->view('templates/header', $data);
  		$this->load->view('user/verifying', $data);
  		$this->load->view('templates/footer',$data);
 	}
 
 	public function email($registrant_email, $subject, $message)
 	{
	$config = Array(
    		'protocol' => 'smtp',
    		'smtp_host' => 'mail.tonyavn.com',
    		'smtp_port' => 26,
    		'smtp_user' => 'tonyavnc',
    		'smtp_pass' => 'KBaker1969$',
    		'mailtype'  => 'html', 
    		'charset'   => 'iso-8859-1'
			);
		$this->load->library('email', $config);
		$this->email->set_newline("\n");
		

		// Set to, from, message, etc.		
		// get user_email from the session
		// $registrant_email = $this->session->userdata('user_email');

		// make an activation code
 		// $activation_code = $this->user_model->get_activation($registrant_email);
		
		// initialize the email configuration
        $this->email->initialize($config);
		// set the from account *this is a burner account*
        $this->email->from('mail@tonyavn.com', 'TonyAvn');
        $this->email->to($registrant_email); 

        $this->email->subject('Welcome to my website');
        $this->email->message('To activate your account: 
        <a href='.base_url().'index.php/verify/activate/'.$activation_code.'>Click Here</a>'); 

        $this->email->send();
 	}
// eventually I should be able to remove this! 		
 	public function registration()
 	{
 		$this->load->helper('email');
  		$this->load->library('form_validation');
  		// field name, error message, validation rules
  		$this->form_validation->set_rules('user_name', 'Full Name', 'trim|required|min_length[3]|xss_clean');
  		$this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
  		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
  		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

  		if($this->form_validation->run() == FALSE)
  		{
   			$this->index();
  		}
  		else
  		{
   			$new_user = $this->user_model->add_user(); 
   			if($new_user)
   			{			
   				$this->verify();
   			}
   			else
   			{
   				// TODO write a custom error handler
   				print_r("<p style=\"color: orange\"> Looks like you might have an account. 
   				To reset your password: <a href=".base_url()."index.php/user/reset/>Click Here</a></p>");
   					
   				$this->index();
   			}
  		}
 	}
//
 	public function logout()
 	{
  		$newdata = array(
  		'user_id'   =>'',
  		'user_name'  =>'',
  		'user_email'     => '',
  		'logged_in' => FALSE,
  		);
  		
  		$this->session->unset_userdata($newdata);
  		$this->session->sess_destroy();
  		//$this->index();
  		
  		$data['title']= 'Login';
   		$this->load->view('templates/header', $data);
   		$this->load->view("user/login", $data);
   		$this->load->view('templates/footer',$data);

 	}
  	
 	public function reset()
 	{
 		$this->load->helper('email');
  		$this->load->library('form_validation');
  		// field name, error message, validation rules
  		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
 	
 		if($this->form_validation->run() == FALSE)
  		{
   			$this->reset_error();
  		}
  		else
  		{
 		// TODO? rewrite the email function?
 		// if not post
 		// route user to the password rest page
 		// else
 		// call the user_model liek...
 			$email=$this->input->post('email');
 			$exists = $this->user_model->exists($email);
 			if($exists)
 			{ 
				$this->reset_password($email);
 			}
 			else
 			{
 			// create a message to tell the user the email was not found
 			// relaod the page with that message displayed
 			
 				print_r("<p style=\"color: orange\">You must have used a different email address when you registered.</p>");
   				
 				$data['title']= 'Reset PW';
   				$this->load->view('templates/header', $data);
   				$this->load->view("user/reset", $data);
   				$this->load->view('templates/footer',$data);
   			}
 		}
 	}
 	
 	public function reset_password($email)
 	{

 		$subject = 'Reset your password';
 		$message = 'To reset your password: 
        	<a href='.base_url().'index.php/user/reset_form/'.$email.'>Click Here</a>';
 				
 		// call new email function
 		$this->email($email, $subject, $message);
 		
 		$data['title']= 'Password Reset';
   		$this->load->view('templates/header', $data);
   		$this->load->view("user/password_reset", $data);
   		$this->load->view('templates/footer',$data);
 	
 	}
 	
 	public function reset_form()
 	{
 	/*	$this->load->helper('email');
  		$this->load->library('form_validation');
  		// field name, error message, validation rules
  		$this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
  		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
  		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

  		if($this->form_validation->run() == FALSE)
  		{
  			echo "?";
   			$data['title']= 'Update Password';
   			$this->load->view('templates/header', $data);
   			$this->load->view("user/reset_form", $data);
   			$this->load->view('templates/footer',$data);	
  		}
	*/	
		$email = $this->input->post('email');
  		$password = md5($this->input->post('password'));	 	

		if (!$email || !$password)
		{
			echo $email ;
    		$data['title']= 'Update Password';
   			$this->load->view('templates/header', $data);
   			$this->load->view("user/reset_form", $data);
   			$this->load->view('templates/footer',$data);
		}
		else
		{

  			// update password and login
  			$done = $this->reset_model->reset();
  			
  			if($done)
  			{
  				$this->welcome();
  			}
  			else
  			{
  				echo "Um, let's try this again";
  			}
		}
 	}
 	
 	public function reset_error()
 	{
 		$data['title']= 'Reset PW';
   		$this->load->view('templates/header', $data);
   		$this->load->view("user/reset_error", $data);
   		$this->load->view('templates/footer',$data);
 	
 	}
 	
}
?>