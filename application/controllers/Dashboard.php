<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  private $folder = "backend/dashboard/";
  private $foldertemplate = "backend/";

  public function __construct()
  {
    parent::__construct();
    belum_login();
    //Codeigniter : Write Less Do More
    $this->load->model(array('M_penyakit','M_gejala','M_user','M_diagnosa'));
  }

  public function index()
  {
    $id = $this->fungsi->user_login()->id;
    $data = array(
      'page' => 'Dashboard',
      'subpage' => 'Puskesmas Penjaringan',
      'penyakit' => $this->M_penyakit->get(),
      'gejala' => $this->M_gejala->get(),
      'jmldiagnosa' => $this->M_diagnosa->jmldiagnosa(),
      'pasien' => $this->M_diagnosa->getpasien(),
      'user' => $this->M_user->getpasien(),
    );
    $this->template->load($this->foldertemplate.'template',$this->folder.'data', $data);
  }
}
