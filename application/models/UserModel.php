<?php

defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{

    public function __construct()
    {
        $this->load->helper('url');
        $this->load->database();
    }

    public function create()
    {
        $data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'age' => $this->input->post('age'),
            'gender' => $this->input->post('gender'),
            'mobile_number' => $this->input->post('number'),
            'address' => $this->input->post('address'),
            'username' => $this->input->post('email'),
            'email' => $this->input->post('email'),
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'role' => 'user'
        );

        return $this->db->insert('users', $data);
    }

    public function index()
    {
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function select($col, $id)
    {
        $query = $this->db->where($col, $id)->get('users');

        if ($query->num_rows()) {
            return $query->result_array()[0];
        } else return 0;
    }

    public function update($id)
    {
        $data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'age' => $this->input->post('age'),
            'gender' => $this->input->post('gender'),
            'mobile_number' => $this->input->post('number'),
            'address' => $this->input->post('address'),
            'username' => $this->input->post('email'),
            'email' => $this->input->post('email'),
        );

        return $this->db->update('users', $data, array('id' => $id));
    }

    public function destroy($id)
    {
        return $this->db->delete('users', array('id' => $id));
    }
}
