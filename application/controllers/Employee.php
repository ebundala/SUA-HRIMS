<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	public function index()
	{
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model("employee/employee_model");
        
        $this->load->view('header');
        $this->load->view('employee/index');
        $this->load->view('footer');
	}



}
