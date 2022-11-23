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

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="row">
        <div class="col-lg-6">
          <div class="info-box mb-4 rounded">
            <i class="bx bx-map"></i>
            <h3>Alamat Kami</h3>
            <p>Jl. Teluk Gong Raya No.2
            Pejagalan, Kec. Penjaringan
            Jakarta Utara, Indonesia</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4 rounded">
            <i class="bx bx-envelope"></i>
            <h3>Email Kami</h3>
            <p>pkm_penji@yahoo.co.id</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4 rounded">
            <i class="bx bx-phone-call"></i>
            <h3>Hubungi Kami</h3>
            <p>021 669 4917</p>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-lg-6">
          <iframe class="mb-4 mb-lg-0 rounded" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.945281110573!2d106.780916!3d-6.138054!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaecb726661e2d7e3!2sPKC%20Penjaringan!5e0!3m2!1sen!2sus!4v1669169961570!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form rounded">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="nama_lengkap" class="form-control" id="name" required oninvalid="this.setCustomValidity('Masukkan Nama Lengkap anda')" oninput="setCustomValidity('')"  placeholder="Nama Lengkap Anda">
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" required oninvalid="this.setCustomValidity('Masukkan Email anda')" oninput="setCustomValidity('')">
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" required oninvalid="this.setCustomValidity('Masukkan Subjek anda')" oninput="setCustomValidity('')">
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Masukkan Pesan Anda" required oninvalid="this.setCustomValidity('Masukkan Pesan anda')" oninput="setCustomValidity('')"></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </div>
  </section><!-- End Contact Section -->
</main><!-- End #main -->
