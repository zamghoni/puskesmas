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

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">
      <!-- <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div> -->
      <div class="row portfolio-container" id="page">
        <?php foreach ($row->result() as $key => $data): ?>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="<?=base_url('upload/album/'.$data->foto_album)?>" class="img-fluid" alt="<?=$data->judul_album?>" style="width:415px;height:310px;">
            <div class="portfolio-info">
              <h4><?=$data->judul_album?></h4>
              <p><?=$data->ket_album?></p>
              <div class="portfolio-links">
                <a href="<?=base_url('upload/album/'.$data->foto_album)?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?=$data->judul_album?>"><i class="bx bx-show-alt"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
              </div>
            </div>
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
  </section><!-- End Portfolio Section -->

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container">

      <div class="section-title">
        <h2>Partner</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="https://www.lapor.go.id/themes/lapor/assets/images/logo.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="https://polrestegal.com/wp-content/uploads/2021/11/LOGO.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="https://www.pmi-kabtegal.or.id/asset/logo/pmi-6.jpeg" class="img-fluid" alt="" style="width:250px;"></div>
          <div class="swiper-slide"><img src="https://dinkes.tegalkab.go.id/asset/logo/logo1.png" class="img-fluid" alt="" style="width:200px;"></div>
          <div class="swiper-slide"><img src="https://rsudsoeselo.tegalkab.go.id/wp-content/uploads/2016/12/logo-small.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="https://rsudsuradadi.tegalkab.go.id/assets/logo.png" class="img-fluid" alt="" style="height:60px;"></div>
          <div class="swiper-slide"><img src="https://utama.tegalkab.go.id/assets/images/logo_header.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="<?=base_url()?>assets/frontend/img/clients/client-8.png" class="img-fluid" alt=""></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Clients Section -->

</main><!-- End #main -->
