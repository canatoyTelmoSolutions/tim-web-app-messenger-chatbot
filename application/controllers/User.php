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
		
        $this->load->view('User/create');
	}

	public function store() {

	}

	public function edit() {
		$this->load->helper('url');
        $this->load->view('User/edit');
	}

	public function update() {

	}
}