<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_relasi extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function get($id = null)
  {
    $kd_penyakit = $this->input->post('kd_penyakit');
    $kd_gejala = $this->input->post('kd_gejala');
    $this->db->from('relasi');
    $this->db->join('gejala', 'gejala.kd_gejala = relasi.kd_gejala', 'left');
    $this->db->join('penyakit', 'penyakit.kd_penyakit = relasi.kd_penyakit', 'left');
    $this->db->group_by('penyakit.kd_penyakit');
    if ($kd_penyakit) {
    $this->db->where('penyakit.kd_penyakit',$kd_penyakit);
    }
    if ($kd_gejala) {
    $this->db->where('gejala.kd_gejala',$kd_gejala);
    }
    if ($id != null) {
      $this->db->where('id_relasi',$id);
    }
    $query = $this->db->get();
    return $query;
  }

  function getrelasi($id = null)
  {
    $this->db->from('relasi');
    $this->db->join('gejala', 'gejala.kd_gejala = relasi.kd_gejala', 'left');
    $this->db->join('penyakit', 'penyakit.kd_penyakit = relasi.kd_penyakit', 'left');
    $query = $this->db->get();
    return $query;
  }

  public function add($post)
  {
    $params = [
      'kd_gejala' => $post['kd_gejala'],
      'kd_penyakit' => $post['kd_penyakit'],
      'bobot' => $post['bobot'],
    ];
    $this->db->insert('relasi', $params);
  }

  public function edit($post)
  {
    $params = [
      'kd_gejala' => $post['kd_gejala'],
      'kd_penyakit' => $post['kd_penyakit'],
      'bobot' => $post['bobot'],
    ];
    $this->db->where('id_relasi', $post['id_relasi']);
    $this->db->update('relasi', $params);
  }

  public function del($id)
	{
    $this->db->where('id_relasi', $id);
    $this->db->delete('relasi');
	}

}
