<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{

	public function index()
	{

		$data['title'] = 'Pendaftaran';
		// Load model Kegiatan
		$this->load->model('Pendaftaran_Model', 'pdft');
		$list_pdft = $this->pdft->getPendaftaran();
		$data["list_pdft"] = $list_pdft;

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/navbar');
		$this->load->view('Pendaftaran/index', $data);
		$this->load->view('layouts/footer');
	}

	public function view()
	{
		$data['title'] = 'View Data Pendaftaran';

		$_id = $this->input->get('id');
		$this->load->model('Pendaftaran_Model', 'pdft');
		$data['view_pdft'] = $this->pdft->viewPendaftaran($_id);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/sidebar');
		$this->load->view('Pendaftaran/view', $data);
		$this->load->view('layouts/footer');
	}

	public function create()
	{
		$data['title'] = 'Tambah Pendaftaran';

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/sidebar');
		$this->load->view('Pendaftaran/create');
		$this->load->view('layouts/footer');
	}

	public function save()
	{
		$this->load->model('Pendaftaran_Model', 'pdftr');

		$_id = $this->input->post('id');
		$_tanggal_daftar = $this->input->post('tanggal_daftar');
		$_alasan = $this->input->post('alasan');
		$_users_id = $this->input->post('users_id');
		$_kegiatan_id = $this->input->post('kegiatan_id');
		$_kategori_peserta_id = $this->input->post('kategori_peserta_id');
		$_nosertifikat = $this->input->post('nosertifikat');
		$_idedit = $this->input->post('idedit');

		$data_pdftr[] = $_id;
		$data_pdftr[] = $_tanggal_daftar;
		$data_pdftr[] = $_alasan;
		$data_pdftr[] = $_users_id;
		$data_pdftr[] = $_kegiatan_id;
		$data_pdftr[] = $_kategori_peserta_id;
		$data_pdftr[] = $_nosertifikat;

		if (isset($_idedit)) {
			$data_pdftr[] = $_idedit;
			$this->pdftr->update($data_pdftr);
		} else {
			$this->pdftr->save($data_pdftr);
		}

		redirect(base_url() . '/Pendaftaran/index', 'refresh');
	}

	public function edit()
	{
		$_id = $this->input->get('id');
		$this->load->model('Pendaftaran_Model', 'pdftr');
		$pdftr_edit = $this->pdftr->findById($_id);

		$data['title'] = 'Update data Pendaftaran';

		$data['pdftr_edit'] = $pdftr_edit;

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/sidebar');
		$this->load->view('pendaftaran/edit', $data);
		$this->load->view('layouts/footer');
	}

	public function delete()
	{
		$_id = $this->input->get('id');
		$this->load->model('Pendaftaran_Model', 'pdftr');
		$this->pdftr->deletePendaftaran($_id);
		redirect(base_url('pendaftaran/index'));
	}
}
