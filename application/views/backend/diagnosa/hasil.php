<!--start page wrapper -->
<?php $this->view('backend/message')?>
<div class="page-wrapper">
  <div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3"><?=$page?></div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="<?=site_url('diagnosa')?>"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><?=$subpage.' '.$page?></li>
          </ol>
        </nav>
      </div>
    </div>
    <!--end breadcrumb-->
    <div class="row">
      <div class="col-xl-7 mx-auto">
        <div class="card border-top border-0 border-4 border-primary">
          <div class="card-body p-5">
            <div class="card-title d-flex align-items-center">
              <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
              </div>
              <h5 class="mb-0 text-primary"><?=$subpage.' '.$page?></h5>
            </div>
            <hr>
            <?php $attributes = array('onsubmit' => 'return tambah(this)');
            echo form_open_multipart('diagnosa/savediagnosa',$attributes); ?>
            <h5>A. Identitas Anda</h5>
            <table class="table table-sm table-hover table-borderless m-0">
              <tbody>
                <tr>
                  <td width="120px">Nama Lengkap</td>
                  <td width="10px">:</td>
                  <td><b><?=$row->nama_lengkap?></b></td>
                  <input type="hidden" name="id_user" value="<?=$row->id_user?>">
                  <input type="hidden" name="nama" value="<?=$row->nama_lengkap?>">
                  <input type="hidden" name="email" value="<?=$row->email?>">
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td>:</td>
                  <td><?=$row->jk?></td>
                  <input type="hidden" name="jk" value="<?=$row->jk?>">
                </tr>
                <tr>
                  <td>Umur</td>
                  <td>:</td>
                  <td><?=$row->umur?></td>
                  <input type="hidden" name="umur" value="<?=$row->umur?>">
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td>:</td>
                  <td><?=$row->alamat?></td>
                  <input type="hidden" name="alamat" value="<?=$row->alamat?>">
                </tr>
              </tbody>
            </table>
            <p></p>
            <h5>B. Gejala yang diinput</h5>
            <?php $no=1;
            foreach ($gejala->result() as $key => $data) { ?>
              <h6 class="mb-0">
                <?=$no.'. '.$data->nama_gejala ?> <br>
              </h6>
              <?php $no++;
            } ?>
            <p></p>
            <h5>C. Hasil Diagnosa</h5>
            <p>Anda di diagnosa menderita pernyakit :</p>
            <?php $no=1; $count=0;
            foreach ($hsl_diagnosa->result() as $key => $hsl) {
              foreach ($gejala->result() as $key => $data){
                if ($data->tmpkd_gejala == $hsl->kd_gejala){ ?>
                  <h6 class="mb-0">
                    <?=$no.'. '.$hsl->nama_penyakit ?><br />
                    <input type="hidden" class="form-check-input" name="kd_penyakit[]" value="<?=$hsl->kd_penyakit?>">
                  </h6>
                  <p class="text-justify"><?=$hsl->definisi?></p>
                  <div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
                    <div class="d-flex align-items-center">
                      <div class="font-35 text-white"><i class="bx bxs-check-circle"></i>
                      </div>
                      <div class="ms-3">
                        <h6 class="mb-0 text-white">Solusi</h6>
                        <div class="text-white"><?=$hsl->solusi?></div>
                      </div>
                    </div>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                  </div>
                  <?php $no++; $count++; } } } ?>
                  <p>Total diagnosa : <?=$count?> penyakit</p>
                  <div class="col-12 text-center">
                    <button type="submit" name="Removetmp" class="btn btn-outline-secondary"><span class="bx bx-arrow-back"></span> Kembali</button>
                    <button type="submit" name="SaveDiagnosa" class="btn btn-primary px-2"><span class="bx bx-save"></span> Simpan Hasil</button>
                  </div>
                  <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
          <!--end page wrapper -->
