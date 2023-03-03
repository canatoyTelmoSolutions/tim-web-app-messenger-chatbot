<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AuthModel extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
	}

	public function user(): bool
	{
		if ($this->session->has_userdata('authenticated')) {
			return $this->session->userdata('authenticated');
		}
		return false;
	}

	public function login(array $data): bool
	{
		$query = $this->db->where('email', $data['email'])->select('role, password, firstname, lastname')->get('users');
		if ($query->num_rows()) {
			$target = $query->result_array()[0];
			if (password_verify($data['password'], $target['password'])) {
				$this->session->set_userdata('authenticated', true);
				$this->session->set_userdata(
					'user',
					array(
						'role' => $target['role'],
						'firstname' => $target['firstname'],
						'lastname' => $target['lastname']
					)
				);
				return true;
			}
		}

		$this->session->set_flashdata('denied', 'Invalid Credentials!');
		return false;
	}

	public function logout()
	{
		$this->session->sess_destroy();
	}

	public function register()
	{
	}
}
