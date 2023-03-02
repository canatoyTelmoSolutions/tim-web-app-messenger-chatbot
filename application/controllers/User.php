<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('UserModel');
		$this->load->database();
	}

	public function validation()
	{
		$this->form_validation->set_rules('firstname', 'First Name', 'required|max_length[255]');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|max_length[255]');
		$this->form_validation->set_rules('age', 'Age', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required|max_length[255]');
		$this->form_validation->set_rules(
			'number',
			'Mobile number',
			'required|min_length[11]|max_length[11]|is_unique[users.mobile_number]'
		);
		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|valid_email|is_unique[users.email]'
		);
	}

	public function index()
	{
		$data['users'] = $this->UserModel->index();
		$this->load->view('User/index', $data);
	}

	public function create()
	{
		$this->load->view('User/create');
	}

	public function store()
	{
		$this->validation();

		if ($this->form_validation->run()) {
			$this->UserModel->create();
			redirect(site_url('/user'));
		} else {
			$this->create();
		}
	}

	public function edit($id)
	{
		$data['user'] = $this->UserModel->select('id', $id);
		$this->load->view('User/edit', $data);
	}

	public function update($id)
	{
		$this->validation();

		if ($this->form_validation->run()) {
			$this->UserModel->update($id);
			redirect(site_url('/user'));
		} else {
			$this->edit($id);
		}
	}

	public function delete($id)
	{
		$this->UserModel->destroy($id);
		redirect(site_url('/user'));
	}
}
