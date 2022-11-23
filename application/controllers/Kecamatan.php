<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller{

	private $folder = 'backend/kecamatan/';
	private $foldertemplate = 'backend/';

	public function __construct()
	{
		parent::__construct();
		belum_login();
		cek_admin();
		$this->load->model(array('M_kecamatan'));
		//Codeigniter : Write Less Do More
	}

	function index()
	{
		$data = array(
			'subpage' => 'Data',
			'page' => 'Kecamatan',
			'row' => $this->M_kecamatan->get(),
		);
		$this->template->load($this->foldertemplate.'template',$this->folder.'data',$data);
	}

	public function form()
	{
		$kecamatan = new stdClass();
		$kecamatan->id_kecamatan = null;
		$kecamatan->nama_kecamatan = null;
		$data = array(
			'page' => 'Kecamatan',
			'subpage' => 'Tambah',
			'row' => $kecamatan,
		);
		if ($this->form_validation->run() == FALSE) {
			$this->template->load($this->foldertemplate.'template',$this->folder.'form', $data);
		}
	}

	public function edit($id)
	{
		$query = $this->M_kecamatan->get($id);
		if ($query->num_rows() > 0) {
			$kecamatan = $query->row();
			$data = array(
			'page' => 'Kecamatan',
			'subpage' => 'Edit',
			'row' => $kecamatan,
			);
			$this->template->load($this->foldertemplate.'template',$this->folder.'form', $data);
		} else {
			$this->session->set_flashdata('error', "Data tidak ditemukan");
			redirect('kecamatan','refresh');
		}
	}


	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($_POST['Tambah'])) {
			if($this->M_kecamatan->cek_kecamatan($post['nama_kecamatan'])->num_rows() > 0){
				$this->session->set_flashdata('error', "Nama Kecamatan <b>$post[nama_kecamatan]</b> sudah terdaftar, silahkan ganti dengan yang berbeda");
				redirect('kecamatan/form');
			} else{
				$this->M_kecamatan->add($post);
			}
		}else if (isset($_POST['Edit'])) {
			$this->M_kecamatan->edit($post);
		}
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data berhasil disimpan');
		}
		redirect('kecamatan');
	}

	public function del($id)
	{
		$this->M_kecamatan->del($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data berhasil dihapus');
		}
		redirect('kecamatan');
	}

}
