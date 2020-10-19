<?php
class Pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pages_model');
		// needed for create() because we don't want non-users adding pages
		$this->load->library('session');
		
	}

	public function view($page = 'home')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		$titledata['title'] = ucfirst($page); // Capitalize the first letter

		// in order to add css and js we need the url helper
		$this->load->helper('url');       
		$this->load->view('templates/header', $titledata);
		$this->load->view('pages/'.$page, $titledata);
		$this->load->view('templates/footer', $titledata);

	}
	// route the use to the pages model and get the sites
	public function index()
	{

		$data['websites'] = $this->pages_model->get_sites();
		$data['title'] = 'Home';

		$this->load->view('templates/header', $data);
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer');

	}	

}