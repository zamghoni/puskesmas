<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala extends CI_Controller{

	private $folder = 'backend/gejala/';
	private $foldertemplate = 'backend/';

	public function __construct()
	{
		parent::__construct();
		belum_login();
		cek_admin();
		$this->load->model(array('M_gejala'));
		//Codeigniter : Write Less Do More
	}

	function index()
	{
		$data = array(
			'subpage' => 'Data',
			'page' => 'Gejala',
			'row' => $this->M_gejala->get(),
		);
		$this->template->load($this->foldertemplate.'template',$this->folder.'data',$data);
	}

	public function form()
	{
		$gejala = new stdClass();
		$gejala->kd_gejala = null;
		$gejala->nama_gejala = null;
		$data = array(
			'page' => 'Gejala',
			'subpage' => 'Tambah',
			'row' => $gejala,
		);
		if ($this->form_validation->run() == FALSE) {
			$this->template->load($this->foldertemplate.'template',$this->folder.'form', $data);
		}
	}

	public function edit($id)
	{
		$query = $this->M_gejala->get($id);
		if ($query->num_rows() > 0) {
			$gejala = $query->row();
			$data = array(
			'page' => 'Gejala',
			'subpage' => 'Edit',
			'row' => $gejala,
			);
			$this->template->load($this->foldertemplate.'template',$this->folder.'form', $data);
		} else {
			$this->session->set_flashdata('error', "Data tidak ditemukan");
			redirect('gejala','refresh');
		}
	}


	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($_POST['Tambah'])) {
			if($this->M_gejala->cek_kd($post['kd_gejala'])->num_rows() > 0){
				$this->session->set_flashdata('error', "Kode gejala <b>$post[kd_gejala]</b> sudah terdaftar, silahkan ganti dengan yang berbeda");
				redirect('gejala/form');
			} else{
				$this->M_gejala->add($post);
			}
		}else if (isset($_POST['Edit'])) {
			$this->M_gejala->edit($post);
		}
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data berhasil disimpan');
		}
		redirect('gejala');
	}

	public function del($id)
	{
		$this->M_gejala->del($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data berhasil dihapus');
		}
		redirect('gejala');
	}

}
