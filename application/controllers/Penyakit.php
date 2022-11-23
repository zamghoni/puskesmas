<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller{

	private $folder = 'backend/penyakit/';
	private $foldertemplate = 'backend/';

	public function __construct()
	{
		parent::__construct();
		belum_login();
		cek_admin();
		$this->load->model(array('M_penyakit'));
		//Codeigniter : Write Less Do More
	}

	function index()
	{
		$data = array(
			'subpage' => 'Data',
			'page' => 'Penyakit',
			'row' => $this->M_penyakit->get(),
		);
		$this->template->load($this->foldertemplate.'template',$this->folder.'data',$data);
	}

	public function form()
	{
		$penyakit = new stdClass();
		$penyakit->kd_penyakit = null;
		$penyakit->nama_penyakit = null;
		$penyakit->definisi = null;
		$penyakit->solusi = null;
		$data = array(
			'page' => 'Penyakit',
			'subpage' => 'Tambah',
			'row' => $penyakit,
		);
		if ($this->form_validation->run() == FALSE) {
			$this->template->load($this->foldertemplate.'template',$this->folder.'form', $data);
		}
	}

	public function edit($id)
	{
		$query = $this->M_penyakit->get($id);
		if ($query->num_rows() > 0) {
			$penyakit = $query->row();
			$data = array(
			'page' => 'Penyakit',
			'subpage' => 'Edit',
			'row' => $penyakit,
			);
			$this->template->load($this->foldertemplate.'template',$this->folder.'form', $data);
		} else {
			$this->session->set_flashdata('error', "Data tidak ditemukan");
			redirect('Penyakit','refresh');
		}
	}


	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($_POST['Tambah'])) {
			if($this->M_penyakit->cek_kd($post['kd_penyakit'])->num_rows() > 0){
				$this->session->set_flashdata('error', "Kode penyakit <b>$post[kd_penyakit]</b> sudah terdaftar, silahkan ganti dengan yang berbeda");
				redirect('penyakit/form');
			} else{
				$this->M_penyakit->add($post);
			}
		}else if (isset($_POST['Edit'])) {
			$this->M_penyakit->edit($post);
		}
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data berhasil disimpan');
		}
		redirect('Penyakit');
	}

	public function del($id)
	{
		$this->M_penyakit->del($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data berhasil dihapus');
		}
		redirect('Penyakit');
	}

}
