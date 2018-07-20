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
        $data['query']=$this->form_model->listRecords();
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('header',$data);
			$this->load->view('form',$data);
			$this->load->view('footer');

		}
		else
		{
		
		 $this->form_model->insertRecord();
		 $data['query']=$this->form_model->listRecords();
		 $this->load->view('header',$data);
		 $this->load->view('form',$data);
			$this->load->view('footer');
		}
	}

	public function create(){
	
}

}
