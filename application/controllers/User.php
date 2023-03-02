<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index() {
		$this->load->helper('url');
        $this->load->view('User/index');
	}


	public function create() {
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('UserModel');

		$this->form_validation->set_rules('firstname', 'First Name', 'required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required');
		$this->form_validation->set_rules('age', 'Age', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('number', 'Mobile number', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('User/create');

		}
		else
		{
			$this->UserModel->create();
			$this->load->view('User/index');
		}
	}

	public function edit() {
		$this->load->helper('url');
        $this->load->view('User/edit');
	}

	public function update() {

	}
}