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
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><?=$subpage.' '.$page?></li>
          </ol>
        </nav>
      </div>
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase"><?=$subpage.' '.$page?></h6>
    <hr/>
    <div class="card">
      <div class="card-title m-3">
        <?php  echo form_open_multipart('diagnosa/filter'); ?>
        <div class="row">
          <div class="col-md-3">
            <label for="kd_penyakit">Daftar Penyakit</label>
            <select class="single-select" id="kd_penyakit" name="kd_penyakit">
              <?php $kd_penyakit = $this->input->post('kd_penyakit'); ?>
              <option value="">- Daftar Penyakit -</option>
              <?php foreach ($penyakit->result() as $key => $data) { ?>
                <option value="<?=$data->kd_penyakit?>" <?=$data->kd_penyakit == $kd_penyakit ? 'selected' : null?>> <?=$data->kd_penyakit.' | '.$data->nama_penyakit?> </option>
              <?php } ?>
            </select>
          </div>
          <div class="col-md-3">
            <label for="jk">Jenis Kelamin</label>
            <select class="single-select" id="jk" name="jk">
              <?php $jk = $this->input->post('jk') ?>
              <option value="">- Pilih Jenis Kelamin-</option>
              <option value="Wanita" <?=$jk == 'Wanita' ? 'selected' : null?>> Wanita </option>
              <option value="Laki-laki" <?=$jk == 'Laki-laki' ? 'selected' : null?>> Laki-laki </option>
            </select>
          </div>
          <div class="col-md-3">
            <label for="">Proses</label> <br>
            <button type="submit" class="btn btn-sm btn-secondary" name="Reset"><span class="bx bx-reset"></span> Reset</button>
            <button type="submit" class="btn btn-sm btn-primary" name="Filter"><span class="bx bx-filter-alt"></span> Filter</button>
            <button type="submit" class="btn btn-sm btn-danger" name="Cetak"><span class="bx bx-download"></span> PDF</button>
          </div>
          <?php echo form_close(); ?>
          <?php if ($this->fungsi->user_login()->role != 1){ ?>
            <div class="col-md-3 text-end">
              <br>
              <a href="<?=site_url('diagnosa/form')?>" class="btn btn-sm btn-primary"><span class="bx bx-plus"></span> Tambah</a>
            </div>
          <?php } ?>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-striped table-bordered text-wrap" style="width:100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Jenis Kelamin</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Hasil Diagnosa</th>
                <th>Tgl Diagnosa</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1;
              foreach ($row->result() as $key => $data) { ?>
                <tr>
                  <td width="1%"><?=$no?></td>
                  <td><?=$data->nama?></td>
                  <td><?=$data->jk?></td>
                  <td><?=$data->umur?></td>
                  <td><?=$data->alamat?></td>
                  <td><?=$data->email?></td>
                  <td><?=$data->kd_penyakit.' | '.$data->nama_penyakit?></td>
                  <td><?=igDate($data->tanggal)?></td>
                  <td width="1%">
                    <!-- <a href="<?=site_url('diagnosa/edit/'.$data->id)?>" title="Edit" class="btn btn-sm btn-success"><i class="bx bx-edit me-0"></i></a> -->
                    <a href="<?=site_url('diagnosa/del/'.$data->id)?>" title="Hapus" class="btn btn-sm btn-danger hapus text-white"><i class="bx bx-trash me-0"></i></a>
                  </td>
                </tr>
              <?php $no++;
            } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!--end page wrapper -->
