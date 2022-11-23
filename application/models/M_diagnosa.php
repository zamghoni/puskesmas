<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_diagnosa extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function get($id = null)
  {
    $kd_penyakit = $this->input->post('kd_penyakit');
    $jk = $this->input->post('jk');
    $this->db->from('analisa_hasil');
    $this->db->join('penyakit', 'penyakit.kd_penyakit = analisa_hasil.kd_penyakit', 'left');
    $this->db->order_by('id','DESC');
    if ($kd_penyakit) {
    $this->db->where('analisa_hasil.kd_penyakit',$kd_penyakit);
    }
    if ($jk) {
    $this->db->where('analisa_hasil.jk',$jk);
    }
    if ($id != null) {
      $this->db->where('id',$id);
    }
    $query = $this->db->get();
    return $query;
  }

  function getpasien($id = null)
  {
    $this->db->from('analisa_hasil');
    $this->db->group_by('nama');
    $query = $this->db->get();
    return $query;
  }

  function jmldiagnosa($id = null)
  {
    $this->db->select('kd_penyakit, COUNT(kd_penyakit) as total');
    $this->db->group_by('kd_penyakit');
    $this->db->order_by('total', 'desc');
    $query = $this->db->get('analisa_hasil', 10);
    return $query;
  }

  public function del($id)
	{
    $this->db->where('id', $id);
    $this->db->delete('analisa_hasil');
	}

}
