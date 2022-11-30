<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_gejala extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function get($id = null)
  {
    $this->db->from('gejala');
    $this->db->order_by('kd_gejala','DESC');
    if ($id != null) {
      $this->db->where('kd_gejala',$id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function add($post)
  {
    $params = [
      'kd_gejala' => strtoupper($post['kd_gejala']),
      'nama_gejala' => ucwords($post['nama_gejala']),
    ];
    $this->db->insert('gejala', $params);
  }

  public function edit($post)
  {
    $params = [
      'kd_gejala' => strtoupper($post['kd_gejala']),
      'nama_gejala' => ucwords($post['nama_gejala']),
    ];
    $this->db->where('kd_gejala', $post['kd_gejala']);
    $this->db->update('gejala', $params);
  }

  function cek_kd($code, $id = null)
  {
    $this->db->from('gejala');
    $this->db->where('kd_gejala', $code);
    if($id != null){
      $this->db->where('kd_gejala !=', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function del($id)
	{
    $this->db->where('kd_gejala', $id);
    $this->db->delete('gejala');
	}

}
