<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

    public function get_users() {
        $this->load->helper('url');
        $this->load->database();

        $this->db->select("*");
		$this->db->from("users");

		$result = $this->db->get();

        return $result->result();
    }

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

    public function delete() {
        $this->load->helper('url');
        $this->load->database();
	
		$this->db->where('id', $this->uri->segment(3));
		
		return $this->db->delete('users');	
    }
}