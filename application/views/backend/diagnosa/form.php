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
            echo form_open_multipart('diagnosa/process',$attributes); ?>
            <input type="hidden" name="id" value="<?=$row->id?>">
            <div class="row g-3">
              <div class="col-md-6">
                <label for="id_user" class="form-label">Nama Pasien *</label>
                <select class="single-select" id="id_user" name="id_user" required>
                  <?php $id_user = $this->input->post('id_user') ? $this->input->post('id_user') : $row->id_user ?>
                  <option value="">- Daftar Pasien -</option>
                  <?php foreach ($user->result() as $key => $data) { ?>
                  <option value="<?=$data->id?>" <?=$data->id == $id_user ? 'selected' : null?>> <?=$data->nama_lengkap?> </option>
                <?php } ?>
                </select>
              </div>
              <div class="col-md-6">
                <label for="jk" class="form-label">Jenis Kelamin *</label>
                <select class="form-select" id="jk" name="jk" required>
                  <?php $jk = $this->input->post('jk') ? $this->input->post('jk') : $row->jk ?>
                  <option value="">- Pilih -</option>
                  <option value="Wanita" <?=$jk == 'Wanita' ? 'selected' : null?>> Wanita </option>
                  <option value="Laki-laki" <?=$jk == 'Laki-laki' ? 'selected' : null?>> Laki-laki </option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="umur" class="form-label">Umur *</label>
                <input type="text" class="form-control" name="umur" value="<?=$row->umur?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="25" required>
              </div>
              <div class="col-md-6">
                <label for="alamat" class="form-label">Alamat *</label>
                <input type="text" name="alamat" class="form-control" id="alamat"
                 value="<?=$row->alamat?>" required oninvalid="this.setCustomValidity('Masukkan alamat anda')" oninput="setCustomValidity('')"  placeholder="Masukan alamat">
              </div>
              <div class="col-md-12">
                <hr>
                <h5>Silahkan pilih gejala-gejala yang anda alami dibawah ini:</h5>
                <?php foreach ($gejala->result() as $key => $data){ ?>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="kd_gejala[]" value="<?=$data->kd_gejala?>">
                    <label for="kd_gejala" class="form-check-label"><?=$data->nama_gejala?></label> <br>
                  </div>
                <?php } ?>
              </div>
              <div class="col-12 text-center">
                <a href="<?=site_url('diagnosa')?>" class="btn btn-outline-secondary"><span class="bx bx-arrow-back"></span> Kembali</a>
                <button type="submit" name="<?=$subpage?>" class="btn btn-primary px-2"><span class="bx bx-save"></span> Simpan</button>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
    <!--end page wrapper -->
