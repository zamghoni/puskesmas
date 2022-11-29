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

  public function addtemppasien($post)
  {
    $params = [
      'id_user' => $post['id_user'],
      'jk' => $post['jk'],
      'umur' => $post['umur'],
      'alamat' => $post['alamat'],
      'tanggal' => date('Y-m-d H:i:s'),
    ];
    $this->db->insert('tmp_pasien', $params);
  }

  public function addtempgejala($post)
  {
    $id_user = $post['id_user'];
    $jml_gejala = sizeof($this->input->post('kd_gejala'));
    $main_arr=array();
    for ($i=0; $i < $jml_gejala ; $i++) {
      $params[$i] = array(
        'id_user' => $id_user,
        'tmpkd_gejala' => $this->input->post('kd_gejala['.$i.']'),
      );
      $main_arr[]=$params[$i];
    }
    $this->db->insert_batch('tmp_gejala', $main_arr);
  }

  public function addhasildiagnosa($post)
  {
    $id_user = $post['id_user'];
    $jml_penyakit = sizeof($this->input->post('kd_penyakit'));
    $main_arr=array();
    for ($i=0; $i < $jml_penyakit ; $i++) {
      $params[$i] = array(
        'nama' => $post['nama'],
        'jk' => $post['jk'],
        'umur' => $post['umur'],
        'alamat' => $post['alamat'],
        'tanggal' => date('Y-m-d H:i:s'),
        'kd_penyakit' => $this->input->post('kd_penyakit['.$i.']'),
      );
      $main_arr[]=$params[$i];
    }
    $this->db->insert_batch('analisa_hasil', $main_arr);
  }

  function gettmppasien($id = null)
  {
    $this->db->from('tmp_pasien');
    $this->db->join('user', 'user.id = tmp_pasien.id_user', 'left');
    if ($id != null) {
      $this->db->where('id_user',$id);
    }
    $query = $this->db->get();
    return $query;
  }

  function gettmpgejala()
  {
    $this->db->from('tmp_gejala');
    $this->db->join('gejala', 'gejala.kd_gejala = tmp_gejala.tmpkd_gejala', 'left');
    $query = $this->db->get();
    return $query;
  }

  function gethasil()
  {
    $this->db->from('relasi');
    $this->db->join('tmp_gejala', 'tmp_gejala.tmpkd_gejala = relasi.kd_gejala', 'left');
    $this->db->join('penyakit', 'penyakit.kd_penyakit = relasi.kd_penyakit', 'left');
    $this->db->group_by('relasi.kd_penyakit');
    $this->db->order_by('relasi.kd_penyakit', 'ASC');
    $query = $this->db->get();
    return $query;
  }

  public function deltmp_gejala($id)
	{
    $this->db->where('id_user', $id);
    $this->db->delete('tmp_gejala');
	}

  public function deltmp_pasien($id)
	{
    $this->db->where('id_user', $id);
    $this->db->delete('tmp_pasien');
	}

  public function del($id)
	{
    $this->db->where('id', $id);
    $this->db->delete('analisa_hasil');
	}

}
