<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


	public function index() {
        $this->load->view('Auth/index');
	}

	public function logout() {
		$this->load->model('AuthModel');
		$this->AuthModel->logout();
		redirect('auth');
	}
}