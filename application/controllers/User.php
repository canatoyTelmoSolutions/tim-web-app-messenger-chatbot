<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('UserModel');
		$this->load->model('AuthModel');

		if (!$this->AuthModel->user()) {
			redirect(base_url('/login'));
		}
	}

	public function formFields($image_file_name): array
	{
		$today = date('m/d/Y');
		$birthdate = $this->input->post('birthdate');
		$difference = date_diff(date_create(date('d/m/Y', strtotime($birthdate))), date_create($today));
		$age = $difference->format('%y');

		$form_fields = array(
			'firstname' => $this->input->post('firstname'),
			'lastname' => $this->input->post('lastname'),
			'birthdate' => $birthdate,
			'age' => $age,
			'gender' => ucfirst($this->input->post('gender')),
			'mobile_number' => $this->input->post('number'),
			'address' => $this->input->post('address'),
			'username' => $this->input->post('email'),
			'email' => $this->input->post('email'),
			'role' => 'user'
		);

		// Add image to the $form_fields if not null
		$image_file_name ? $form_fields['image'] = $image_file_name : '';
		// var_dump($form_fields);
		return $form_fields;
	}

	public function validation($inserting = true, $id = null)
	{
		$mobile_number_rule = 'required|min_length[11]|max_length[11]';
		$email_rule = 'required|valid_email';

		if ($id and !$inserting) {
			$existing_user = $this->UserModel->select($id);
			$existing_mobile = $existing_user['mobile_number'];
			$existing_email = $existing_user['email'];

			// is_unique[] rule will only be added if users's mobile/email has new value
			$email_rule = $existing_email == $this->input->post('email') ? '' : $email_rule . '|is_unique[users.email]';
			$mobile_number_rule = $existing_mobile == $this->input->post('number') ? '' : $mobile_number_rule . '|is_unique[users.mobile_number]';
		} else {
			$email_rule = $email_rule . '|is_unique[users.email]';
			$mobile_number_rule = $mobile_number_rule . '|is_unique[users.mobile_number]';
		}

		$this->form_validation->set_rules('firstname', 'First Name', 'required|max_length[255]');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|max_length[255]');
		$this->form_validation->set_rules('birthdate', 'Birthdate', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required|max_length[255]');
		$this->form_validation->set_rules(
			'number',
			'Mobile number',
			$mobile_number_rule
		);
		$this->form_validation->set_rules(
			'email',
			'Email',
			$email_rule
		);
	}

	public function index()
	{
		$data['title'] = 'Users';
		$data['users'] = $this->UserModel->index();
		$this->load->view('User/index', $data);
	}

	public function create($error_message = NULL)
	{
		$data['title'] = 'Create user';
		$data['error'] = $error_message;
		$this->load->view('User/create', $data);
	}

	public function store()
	{
		$this->validation(true);
		$upload_image = $this->upload_image();

		if ($this->form_validation->run() and $upload_image['status'] == 200) {
			$form_fields = $this->formFields($upload_image['file_name']);
			$this->UserModel->create($form_fields);

			$data['users'] = $this->UserModel->index();

			redirect(site_url('/user'));
		} else {
			$upload_image['status'] == 500 ?
				$this->create($upload_image['error_message']) :
				$this->create();
		}
	}

	public function edit($id, $error_message = NULL)
	{
		$data['title'] = 'Edit user';
		$data['error'] = $error_message;
		$data['user'] = $this->UserModel->select($id);
		$this->load->view('User/edit', $data);
	}

	public function update($id)
	{
		$this->validation(false, $id);
		$upload_image = $this->upload_image();

		if ($this->form_validation->run()) {
			// When uploaded an image, pass it to formFields()
			$image_file_name = $upload_image['file_name'] ? $upload_image['file_name'] : NULL;
			$form_fields = $this->formFields($image_file_name);
			$this->UserModel->update($id, $form_fields);
			redirect(site_url('/user'));
		} else {
			$upload_image['status'] == 500 and $upload_image['error_message'] != 'You did not select a file to upload.' ?
				$this->edit($id, $upload_image['error_message']) :
				$this->edit($id);
		}
	}

	public function delete($id)
	{
		$this->UserModel->destroy($id);
		redirect(site_url('/user'));
	}

	public function search()
	{
		$q = $this->input->get('q');
		$data['users'] = $this->UserModel->search($q);
		$data['title'] = 'Search';
		$data['q'] = $q;
		$this->load->view('search', $data);
	}

	public function upload_image(): string | array
	{
		$config['upload_path'] = './uploads/images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 6000;
		$config['max_width'] = 6000;
		$config['max_height'] = 6000;
		$config['encrypt_name'] = TRUE;
		$config['detect_mime'] = TRUE;
		$config['remove_spaces'] = TRUE;
		$config['allowed_types'] = '*';

		$this->upload->initialize($config);

		if (!$this->upload->do_upload('image')) {
			return array(
				'status' => 500,
				'error_message' => $this->upload->display_errors()
			);
		} else {
			return array(
				'status' => 200,
				'file_name' => $this->upload->data()['file_name']
			);
		}
	}
}
