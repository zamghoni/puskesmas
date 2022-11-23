<!--start page wrapper -->
<?php $this->view('backend/message')?>
<div class="page-wrapper">
  <div class="page-content">
    <?php echo get_cookie('username'); ?>
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
      <div class="col">
        <div class="card radius-10 bg-primary bg-gradient">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div>
                <p class="mb-0 text-white">Data Penyakit</p>
                <h4 class="my-1 text-white"><?=$penyakit->num_rows()?> Penyakit</h4>
              </div>
              <div class="text-white ms-auto font-35"><i class="bx bx-plus-medical"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card radius-10 bg-danger bg-gradient">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div>
                <p class="mb-0 text-white">Data Gejala</p>
                <h4 class="my-1 text-white"><?=$gejala->num_rows()?> Gejala</h4>
              </div>
              <div class="text-white ms-auto font-35"><i class="bx bx-target-lock"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card radius-10 bg-warning bg-gradient">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div>
                <p class="mb-0 text-dark">Data Pasien</p>
                <h4 class="text-dark my-1"><?=$pasien->num_rows()?> Pasien</h4>
              </div>
              <div class="text-dark ms-auto font-35"><i class="bx bx-donate-heart"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card radius-10 bg-success bg-gradient">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div>
                <p class="mb-0 text-white">Data User</p>
                <h4 class="my-1 text-white"><?=$user->num_rows()?> User</h4>
              </div>
              <div class="text-white ms-auto font-35"><i class="bx bx-user-circle"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <h6 class="mb-0 text-uppercase">Data Statistik Diagnosa</h6>
      <hr/>
      <script src="<?=base_url('')?>assets/plugins/chartjs/js/Chart.min.js"></script>
      <div class="card">
        <div class="card-body">
          <div class="chart-container1">
            <canvas id="chart7"></canvas>
            <script type="text/javascript">
            // chart 7
            new Chart(document.getElementById("chart7"), {
              type: 'horizontalBar',
              data: {
                labels: [<?php foreach ($penyakit->result() as $key => $data): ?>
                  <?='"'.$data->nama_penyakit.'",' ?>
                <?php endforeach; ?>],
                datasets: [{
                  label: "Data Diagnosa",
                  backgroundColor: ["#0d6efd", "#212529", "#17a00e", "#f41127", "#ffc107"],
                  data: [<?php foreach ($jmldiagnosa->result() as $key => $data): ?>
                    <?=$data->total.',' ?>
                  <?php endforeach; ?>]
                }]
              },
              options: {
                maintainAspectRatio: false,
                legend: {
                  display: false
                },
                title: {
                  display: true,
                  text: 'Data Diagnosa'
                }
              }
            });
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!--end row-->
<!--end page wrapper -->
