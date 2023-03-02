<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function create() {
		$this->load->helper('url');
        $this->load->database();

        $data = array(
			'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'age' => $this->input->post('lastname'),
            'gender' => $this->input->post('lastname'),
            'mobile_number' => $this->input->post('number'),
            'address' => $this->input->post('lastname'),
            'email' => $this->input->post('lastname'),
            'password' => 'admin',
            'role' => 'user'
		);

		return $this->db->insert('users', $data);
	}
}