<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kecamatan extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function get($id = null)
  {
    $this->db->from('kecamatan');
    if ($id != null) {
      $this->db->where('id_kecamatan',$id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function add($post)
  {
    $params = [
      'nama_kecamatan' => ucwords($post['nama_kecamatan']),
    ];
    $this->db->insert('kecamatan', $params);
  }

  public function edit($post)
  {
    $params = [
      'nama_kecamatan' => ucwords($post['nama_kecamatan']),
    ];
    $this->db->where('id', $post['id']);
    $this->db->update('kecamatan', $params);
  }

  function cek_kecamatan($code, $id = null)
  {
    $this->db->from('kecamatan');
    $this->db->where('nama_kecamatan', $code);
    if($id != null){
      $this->db->where('id !=', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function del($id)
	{
    $this->db->where('id_kecamatan', $id);
    $this->db->delete('kecamatan');
	}

}
