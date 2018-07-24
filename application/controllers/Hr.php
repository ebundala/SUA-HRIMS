<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hr extends CI_Controller {
	public function index()
	{
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model("hr/hr_model");
		$data['title']="HR Portal";
        
		$this->load->view('header',$data);
		$this->load->view('hr/navigation',$data);
        $this->load->view('hr/index',$data);
        $this->load->view('footer',$data);
	}



}
