<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{

        public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->model('AuthModel');

                if (!$this->AuthModel->user()) {
                        redirect(base_url('/login'));
                }
        }
        public function index()
        {
                $data['title'] = 'Settings';
                $this->load->view('Setting/index', $data);
        }
}
