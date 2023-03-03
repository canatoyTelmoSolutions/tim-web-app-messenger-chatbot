<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{

        public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
        }
        public function index()
        {
                $data['title'] = 'Settings';
                $this->load->view('Setting/index', $data);
        }
}
