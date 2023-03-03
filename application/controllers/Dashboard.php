<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('UserModel');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['users'] = $this->UserModel->index() ? count($this->UserModel->index()) : null;
        $data['recent_users'] = $this->UserModel->recent();
        $this->load->view('Dashboard/dashboard', $data);
    }
}
