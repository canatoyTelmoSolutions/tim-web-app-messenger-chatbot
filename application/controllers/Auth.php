<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


	public function index()
	{
		$this->load->helper('url');
		$this->load->view('Auth/index');
	}

	public function forgotpassword()
	{
		$this->load->helper('url');
		$this->load->view('Auth/forgot');
	}
}
