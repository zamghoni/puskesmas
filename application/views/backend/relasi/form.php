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
            <li class="breadcrumb-item"><a href="<?=site_url('gejala')?>"><i class="bx bx-home-alt"></i></a>
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
            echo form_open_multipart('relasi/process',$attributes); ?>
            <div class="row g-3">
              <div class="col-md-12">
                <input type="hidden" name="id_relasi" value="<?=$row->id_relasi?>">
                <label for="kd_penyakit" class="form-label">Nama Penyakit *</label>
                <select class="single-select" id="kd_penyakit" name="kd_penyakit" required>
                  <?php $kd_penyakit = $this->input->post('kd_penyakit') ? $this->input->post('kd_penyakit') : $row->kd_penyakit ?>
                  <option value="">- Daftar Penyakit -</option>
                  <?php foreach ($penyakit->result() as $key => $data) { ?>
                  <option value="<?=$data->kd_penyakit?>" <?=$data->kd_penyakit == $kd_penyakit ? 'selected' : null?>> <?=$data->kd_penyakit.' | '.$data->nama_penyakit?> </option>
                <?php } ?>
                </select>
              </div>
              <div class="col-md-12">
                <label for="kd_gejala" class="form-label">Gejala Penyakit *</label>
                <select class="single-select" id="kd_gejala" name="kd_gejala" required>
                  <?php $kd_gejala = $this->input->post('kd_gejala') ? $this->input->post('kd_gejala') : $row->kd_gejala ?>
                  <option value="">- Daftar Gejala -</option>
                  <?php foreach ($gejala->result() as $key => $data) { ?>
                  <option value="<?=$data->kd_gejala?>" <?=$data->kd_gejala == $kd_gejala ? 'selected' : null?>> <?=$data->kd_gejala.' | '.$data->nama_gejala?> </option>
                <?php } ?>
                </select>
              </div>
              <div class="col-md-12">
                <label for="bobot" class="form-label">Bobot *</label>
                <select class="single-select" id="bobot" name="bobot" required>
                  <?php $bobot = $this->input->post('bobot') ? $this->input->post('bobot') : $row->bobot ?>
                  <option value="">- Pilih -</option>
                  <option value="1" <?=$bobot == '1' ? 'selected' : null?>> 1 </option>
                  <option value="2" <?=$bobot == '2' ? 'selected' : null?>> 2 </option>
                  <option value="3" <?=$bobot == '3' ? 'selected' : null?>> 3 </option>
                  <option value="4" <?=$bobot == '4' ? 'selected' : null?>> 4 </option>
                  <option value="5" <?=$bobot == '5' ? 'selected' : null?>> 5 </option>
                </select>
              </div>
              <div class="col-12 text-center">
                <a href="<?=site_url('relasi')?>" class="btn btn-outline-secondary"><span class="bx bx-arrow-back"></span> Kembali</a>
                <button type="submit" name="<?=$subpage?>" class="btn btn-primary px-2"><span class="bx bx-save"></span> Simpan</button>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
    <!--end page wrapper -->
