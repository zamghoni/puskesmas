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
        <table id="example" class="table table-hover table-borderless" style="width:100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Relawan</th>
              <th>Alamat</th>
              <th>Kecamatan</th>
              <th>Asal Posko</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1;
            foreach ($row->result() as $key => $data): ?>
            <tr>
              <td><?=$no?></td>
              <td><?=$data->nama_relawan?></td>
              <td><?=$data->alamat_relawan?></td>
              <td><?=$data->nama_kecamatan?></td>
              <td><?=$data->asal_posko?></td>
            </tr>
            <?php $no++;
          endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section><!-- End Team Section -->
</main><!-- End #main -->
