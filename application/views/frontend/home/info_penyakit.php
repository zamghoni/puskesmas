<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="<?=site_url('home')?>">Home</a></li>
        <li><?=$page?></li>
      </ol>
      <h2><?=$page?></h2>
    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team" style="background: white url(<?=base_url()?>assets/frontend/img/footer-bg.png) no-repeat right top;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <table id="example" class="table table-hover table-borderless" style="width:100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Penyakit</th>
                <th>Definisi Penyakit</th>
                <th>Diagnosa</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1;
              foreach ($row->result() as $key => $data): ?>
              <tr>
                <td><?=$no?>.</td>
                <td><b><?=$data->nama_penyakit?></b></td>
                <td><?=$data->definisi?></td>
                <td><?=$data->solusi?></td>
              </tr>
              <?php $no++;
            endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section><!-- End Team Section -->
</main><!-- End #main -->
