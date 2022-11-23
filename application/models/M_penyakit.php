<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penyakit extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function get($id = null)
  {
    $this->db->from('penyakit');
    if ($id != null) {
      $this->db->where('kd_penyakit',$id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function add($post)
  {
    $params = [
      'kd_penyakit' => strtoupper($post['kd_penyakit']),
      'nama_penyakit' => ucwords($post['nama_penyakit']),
      'definisi' => $post['definisi'],
      'solusi' => $post['solusi'],
    ];
    $this->db->insert('penyakit', $params);
  }

  public function edit($post)
  {
    $params = [
      'kd_penyakit' => strtoupper($post['kd_penyakit']),
      'nama_penyakit' => ucwords($post['nama_penyakit']),
      'definisi' => $post['definisi'],
      'solusi' => $post['solusi'],
    ];
    $this->db->where('kd_penyakit', $post['kd_penyakit']);
    $this->db->update('penyakit', $params);
  }

  function cek_kd($code, $id = null)
  {
    $this->db->from('penyakit');
    $this->db->where('kd_penyakit', $code);
    if($id != null){
      $this->db->where('id !=', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function del($id)
	{
    $this->db->where('kd_penyakit', $id);
    $this->db->delete('penyakit');
	}

}
