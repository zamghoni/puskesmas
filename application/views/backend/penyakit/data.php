<!--start page wrapper -->
<?php $this->view('backend/message')?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
$(function(){
  $('.text').truncatable({	limit: 100, more: '[<strong style="color:red;">&raquo;&raquo;&raquo;</strong>]', less: true, hideText: '[<strong>&laquo;&laquo;&laquo;</strong>]' });
});
</script>
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
        <a href="<?=site_url('penyakit/form')?>" class="btn btn-sm btn-primary"><span class="bx bx-plus"></span> Tambah</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Penyakit</th>
                <th>Nama Penyakit</th>
                <th>Definisi</th>
                <th>Solusi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1;
              foreach ($row->result() as $key => $data) { ?>
                <tr>
                  <td width="1%"><?=$no?></td>
                  <td><?=$data->kd_penyakit?></td>
                  <td><?=$data->nama_penyakit?></td>
                  <td>
										<!-- Button trigger modal -->
										<button type="button" class="badge bg-dark" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal<?=$data->kd_penyakit?>">Definisi</button>
										<!-- Modal -->
										<div class="modal fade" id="exampleVerticallycenteredModal<?=$data->kd_penyakit?>" tabindex="-1" style="display: none;" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Definisi <?=$data->nama_penyakit?></h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body text-wrap"><?=$data->definisi?></div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</div>
									</td>
                  <td>	<!-- Button trigger modal -->
										<button type="button" class="badge bg-light text-dark" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModalsolusi<?=$data->kd_penyakit?>">Solusi</button>
										<!-- Modal -->
										<div class="modal fade" id="exampleVerticallycenteredModalsolusi<?=$data->kd_penyakit?>" tabindex="-1" style="display: none;" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Solusi <?=$data->nama_penyakit?></h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body text-wrap"><?=$data->solusi?></div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</div>
                  </td>
                  <td width="1%">
                    <a href="<?=site_url('penyakit/edit/'.$data->kd_penyakit)?>" title="Edit" class="btn btn-sm btn-success"><i class="bx bx-edit me-0"></i></a>
                    <a href="<?=site_url('penyakit/del/'.$data->kd_penyakit)?>" title="Hapus" class="btn btn-sm btn-danger hapus text-white"><i class="bx bx-trash me-0"></i></a>
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
