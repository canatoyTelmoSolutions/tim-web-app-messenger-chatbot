<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('UserModel');
	  }

	public function index() {
		$this->load->helper('url');

		$data['users'] = $this->UserModel->get_users();

        $this->load->view('User/index', $data);
	}


	public function create() {
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');

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

			$data['users'] = $this->UserModel->get_users();
			$this->load->view('User/index', $data);
		}
	}

	public function edit() {
		$this->load->helper('url');
        $this->load->view('User/edit');
	}

	public function update() {

	}

	public function delete() {
		$this->load->helper('url');
		$this->UserModel->delete();

		redirect('/user', 'location');
	}
}