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
	}

	public function validation($inserting = true, $id = null)
	{
		$mobile_number_rule = 'required|min_length[11]|max_length[11]';
		$email_rule = 'required|valid_email';

		if ($id and !$inserting) {
			$existing_user = $this->UserModel->select('id', $id);
			$existing_mobile = $existing_user['mobile_number'];
			$existing_email = $existing_user['email'];

			// is_unique[] rule will only be added if users's mobile/email has new value
			$email_rule = $existing_email == $this->input->post('email') ? '' : $email_rule . '|is_unique[users.email]';
			$mobile_number_rule = $existing_mobile == $this->input->post('number') ? '' : $mobile_number_rule . '|is_unique[users.mobile_number]';
		} else {
			$email_rule = $email_rule . '|is_unique[users.email]';
			$mobile_number_rule = $mobile_number_rule . '|is_unique[users.mobile_number]';
		}

		$this->form_validation->set_rules('firstname', 'First Name', 'required|max_length[255]');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|max_length[255]');
		$this->form_validation->set_rules('age', 'Age', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required|max_length[255]');
		$this->form_validation->set_rules(
			'number',
			'Mobile number',
			$mobile_number_rule
		);
		$this->form_validation->set_rules(
			'email',
			'Email',
			$email_rule
		);
	}

	public function index()
	{
		$data['title'] = 'Users';
		$data['users'] = $this->UserModel->index();
		$this->load->view('User/index', $data);
	}

	public function create()
	{
		$data['title'] = 'Create user';
		$this->load->view('User/create', $data);
	}

	public function store()
	{
		$this->validation(true);

		if ($this->form_validation->run()) {
			$this->UserModel->create();

			$data['users'] = $this->UserModel->index();
			redirect(site_url('/user'));
		} else {
			$this->create();
		}
	}

	public function edit($id)
	{
		$data['title'] = 'Edit user';
		$data['user'] = $this->UserModel->select('id', $id);
		$this->load->view('User/edit', $data);
	}

	public function update($id)
	{
		$this->validation(false, $id);

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
