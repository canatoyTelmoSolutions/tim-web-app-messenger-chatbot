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

    public function create($form_fields)
    {
        return $this->db->insert('users', $form_fields);
    }

    public function index()
    {
        $query = $this->db->having('deleted_at', NULL)->having('role', 'user')->get('users');
        if ($query->num_rows()) {
            return $query->result_array();
        }
        return null;
    }

    public function recent()
    {
        $query = $this->db->having('deleted_at', NULL)->having('role', 'user')->order_by('id', 'DESC')->limit(7)->get('users');
        if ($query->num_rows()) {
            return $query->result_array();
        }
        return null;
    }

    public function select($id)
    {
        $query = $this->db->having('deleted_at', NULL)->having('role', 'user')->having('id', $id)->get('users');
        if ($query->num_rows()) {
            return $query->result_array()[0];
        } else return 0;
    }

    public function search($search_query)
    {
        $query = $this->db->having('deleted_at', NULL)->having('role', 'user')
            ->like('email', $search_query)->or_like('firstname', $search_query)
            ->or_like('lastname', $search_query)->get('users');

        if ($query->num_rows()) {
            return $query->result_array();
        }
    }

    public function update($id, $form_fields)
    {
        return $this->db->update('users', $form_fields, array('id' => $id));
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
