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
    <div class="p-4">
      <div class="row">
        <?php  echo form_open_multipart('home/filter'); ?>
        <div class="container align-center">
          <div class="card col-6">
            <div class="card-header">
              <h3>Registrasi Pasien</h3>
            </div>
            <div class="card-body">
              <div class="info-box mb-4 rounded">
                <form action="#" method="post" role="form" class="php-email-form rounded">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" required oninvalid="this.setCustomValidity('Masukkan Nama Lengkap anda')" oninput="setCustomValidity('')"  placeholder="Nama Lengkap Anda">
                  <p></p>
                  <label for="jk" class="form-label">Jenis Kelamin</label>
                  <select class="form-control" name="jk">
                    <option value="">- Pilih -</option>
                    <option value="Wanita">Wanita</option>
                    <option value="Laki-laki">Laki-laki</option>
                  </select>
                  <p></p>
                  <label for="umur" class="form-label">Umur</label>
                  <input type="number" name="umur" class="form-control">
                  <p></p>
                  <label for="alamat" class="form-label">Alamat</label>
                  <input type="text" name="alamat" class="form-control">
                  <p></p>
                  <label for="email" class="form-label">Email</label>
                  <input type="text" name="email" class="form-control">
                  <p></p>
                  <button type="submit" class="btn btn-success" >Simpan</button>
                </form>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section><!-- End Team Section -->
</main><!-- End #main -->
