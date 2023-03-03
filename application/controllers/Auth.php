<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$data['title'] = 'TIM - Chatbot';
		$this->load->view('Auth/index', $data);
	}
}
