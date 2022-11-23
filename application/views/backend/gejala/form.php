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
            echo form_open_multipart('gejala/process',$attributes); ?>
            <div class="row g-3">
              <div class="col-md-12">
                <label for="kd_gejala" class="form-label">Kode gejala *</label>
                <input type="text" name="kd_gejala" class="form-control" id="kd_gejala"
                required oninvalid="this.setCustomValidity('Masukkan Kode gejala')" oninput="setCustomValidity('')"  placeholder="Masukan kode gejala"
                <?php if ($subpage != "Tambah"){ ?>
                  value="<?=$row->kd_gejala?>" readonly
                <?php }else{ ?>
                  autofocus
                <?php } ?>
                  >
              </div>
              <div class="col-md-12">
                <label for="nama_gejala" class="form-label">Nama gejala *</label>
                <input type="text" name="nama_gejala" class="form-control" id="nama_gejala"
                value="<?=$row->nama_gejala?>" required oninvalid="this.setCustomValidity('Masukkan Nama gejala')" oninput="setCustomValidity('')"  placeholder="Masukan nama gejala">
              </div>
              <div class="col-12 text-center">
                <a href="<?=site_url('gejala')?>" class="btn btn-outline-secondary"><span class="bx bx-arrow-back"></span> Kembali</a>
                <button type="submit" name="<?=$subpage?>" class="btn btn-primary px-2"><span class="bx bx-save"></span> Simpan</button>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
    <!--end page wrapper -->
