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
      <div class="card-title m-3 ms-auto">
        <a href="<?=site_url('gejala/form')?>" class="btn btn-sm btn-primary"><span class="bx bx-plus"></span> Tambah</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Gejala</th>
                <th>Nama Gejala</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1;
              foreach ($row->result() as $key => $data) { ?>
                <tr>
                  <td width="1%"><?=$no?></td>
                  <td><?=$data->kd_gejala?></td>
                  <td><?=$data->nama_gejala?></td>
                  <td width="1%">
                    <a href="<?=site_url('gejala/edit/'.$data->kd_gejala)?>" title="Edit" class="btn btn-sm btn-success"><i class="bx bx-edit me-0"></i></a>
                    <a href="<?=site_url('gejala/del/'.$data->kd_gejala)?>" title="Hapus" class="btn btn-sm btn-danger hapus text-white"><i class="bx bx-trash me-0"></i></a>
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
