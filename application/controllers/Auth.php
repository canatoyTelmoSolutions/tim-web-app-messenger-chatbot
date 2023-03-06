<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('AuthModel');
	}

	public function login()
	{
		$data['title'] = 'Login';
		$this->load->view('Auth/index', $data);
	}

	public function forgotpassword()
	{
		$this->load->view('Auth/forgot');
	}
	public function resetpassword()
	{
		$this->load->view('Auth/reset');
	}

	public function authenticate()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[255]');
		$this->form_validation->set_rules('password', 'Password', 'required|max_length[255]');

		if ($this->form_validation->run()) {

			$data = array(
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
			);

			$this->AuthModel->login($data) ?
				redirect(site_url('/dashboard')) : $this->login();
		} else {
			$this->login();
		}
	}

	public function invalidateSessions()
	{
		$this->AuthModel->logout();
		redirect(base_url('/login'));
	}
}
