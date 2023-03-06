<?php

defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{

    public function __construct()
    {
        $this->load->helper('url');
        $this->load->database();
        date_default_timezone_set('Asia/Manila');
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
            'password' => NULL,
            'role' => 'user'
        );

        return $this->db->insert('users', $data);
    }

    public function index()
    {
        $query = $this->db->where('deleted_at', NULL)->where('role', 'user')->get('users');
        if ($query->num_rows()) {
            return $query->result_array();
        }
        return null;
    }

    public function recent()
    {
        $query = $this->db->where('deleted_at', NULL)->where('role', 'user')->order_by('id', 'DESC')->limit(7)->get('users');
        if ($query->num_rows()) {
            return $query->result_array();
        }
        return null;
    }

    public function select($id)
    {
        $query = $this->db->where('deleted_at', NULL)->where('role', 'user')->where('id', $id)->get('users');
        if ($query->num_rows()) {
            return $query->result_array()[0];
        } else return 0;
    }

    public function search($search_query)
    {
        $query = $this->db
            ->having('deleted_at', NULL)
            ->having('role', 'user')
            ->like('email', $search_query)
            ->or_like('firstname', $search_query)
            ->or_like('lastname', $search_query)
            ->get('users');

        if ($query->num_rows()) {
            return $query->result_array();
        }
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
            'updated_at' => date('Y-m-d H:i:s')
        );

        return $this->db->update('users', $data, array('id' => $id));
    }

    public function destroy($id)
    {
        $data = array(
            'deleted_at' => date('Y-m-d H:i:s')
        );

        $condition = array(
            'id' => $id
        );

        return $this->db->update('users', $data, $condition);
    }
}
