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
            <div class="row g-3">
              <div class="col-md-12">
                <label for="kd_diagnosa" class="form-label">Kode diagnosa *</label>
                <input type="text" name="kd_diagnosa" class="form-control" id="kd_diagnosa"
                required oninvalid="this.setCustomValidity('Masukkan Kode diagnosa')" oninput="setCustomValidity('')"  placeholder="Masukan kode diagnosa"
                <?php if ($subpage != "Tambah"){ ?>
                  value="<?=$row->kd_diagnosa?>" readonly
                <?php }else{ ?>
                  autofocus
                <?php } ?>
                  >
              </div>
              <div class="col-md-12">
                <label for="nama_diagnosa" class="form-label">Nama diagnosa *</label>
                <input type="text" name="nama_diagnosa" class="form-control" id="nama_diagnosa"
                value="<?=$row->nama_diagnosa?>" required oninvalid="this.setCustomValidity('Masukkan Nama diagnosa')" oninput="setCustomValidity('')"  placeholder="Masukan nama diagnosa">
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
