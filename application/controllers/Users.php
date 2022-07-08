<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Users';
		// Load model Kegiatan
		$this->load->model('Users_Model', 'user');
		$list_user = $this->user->getAll();
		$data["list_user"] = $list_user;

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/navbar');
		$this->load->view('User/index', $data);
		$this->load->view('layouts/footer');
	}

	public function view()
	{
		$data['title'] = 'Users';

		$_id = $this->input->get('id');
		$this->load->model('Users_Model', 'user');
		$data["view_user"] = $this->user->findById($_id);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/navbar');
		$this->load->view('User/view', $data);
		$this->load->view('layouts/footer');
	}
}
