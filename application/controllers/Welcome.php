<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->database();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model("form_model");

		$data['title'] = 'SUA-HRIS';
        
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('header',$data);
			$this->load->view('index',$data);
			$this->load->view('footer');

		}
		else
		{
		
		
		 $this->load->view('header',$data);
		 $this->load->view('index',$data);
			$this->load->view('footer');
		}
	}



}
