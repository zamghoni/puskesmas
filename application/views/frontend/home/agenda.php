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

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">
      <div class="row">
        <?php foreach ($row->result() as $key => $data): ?>
          <div class="col-lg-4 mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-calendar-event"></i></div>
              <h4><a href=""><?=$data->nama_acara?></a></h4>
              <p class="text-wrap" style="text-align:left">
                Tanggal : <?=mediumdate_indo($data->tgl_acara)?> <br>
                Waktu : <?=$data->waktu_acara?> <br>
                Tempat : <?=$data->tempat_acara?>
                Deskripsi : <?=$data->deskripsi?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="row">
        <div class="col pt-4">
          <?php echo $pagination; ?>
        </div>
      </div>
    </div>
  </section><!-- End Services Section -->
</main><!-- End #main -->
