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
            <li class="breadcrumb-item"><a href="<?=site_url('penyakit')?>"><i class="bx bx-home-alt"></i></a>
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
            echo form_open_multipart('penyakit/process',$attributes); ?>
            <div class="row g-3">
              <div class="col-md-12">
                <label for="kd_penyakit" class="form-label">Kode penyakit *</label>
                <input type="text" name="kd_penyakit" class="form-control" id="kd_penyakit"
                required oninvalid="this.setCustomValidity('Masukkan Kode penyakit')" oninput="setCustomValidity('')"  placeholder="Masukan kode penyakit"
                <?php if ($subpage != "Tambah"){ ?>
                  value="<?=$row->kd_penyakit?>" readonly
                <?php } ?>
                >
              </div>
              <div class="col-md-12">
                <label for="nama_penyakit" class="form-label">Nama penyakit *</label>
                <input type="text" name="nama_penyakit" class="form-control" id="nama_penyakit"
                value="<?=$row->nama_penyakit?>" required oninvalid="this.setCustomValidity('Masukkan Nama penyakit')" oninput="setCustomValidity('')"  placeholder="Masukan nama penyakit" autofocus>
              </div>
              <div class="col-md-12">
                <label for="definisi" class="form-label">Definisi penyakit *</label>
                <textarea name="definisi" class="form-control" rows="8"><?=$row->definisi?></textarea>
              </div>
              <div class="col-md-12">
                <label for="solusi" class="form-label">Solusi penyakit *</label>
                <textarea name="solusi" class="form-control" rows="8"><?=$row->solusi?></textarea>
              </div>
              <div class="col-12 text-center">
                <a href="<?=site_url('penyakit')?>" class="btn btn-outline-secondary"><span class="bx bx-arrow-back"></span> Kembali</a>
                <button type="submit" name="<?=$subpage?>" class="btn btn-primary px-2"><span class="bx bx-save"></span> Simpan</button>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
    <!--end page wrapper -->
