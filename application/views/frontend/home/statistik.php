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
                    labels: [<?php foreach ($jenis->result() as $key => $data): ?>
                      <?='"'.$data->jenis_bencana.'",' ?>
                      <?php endforeach; ?>],
                      datasets: [{
                        label: "Total",
                        backgroundColor: ["#0d6efd", "#212529", "#17a00e", "#f41127", "#ffc107"],
                        data: [<?php foreach ($jmlbencana->result() as $key => $data): ?>
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
                          text: 'Statistik Bencana di Kabuaten Tegal'
                        }
                      }
                    });
                    </script>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End Team Section -->
    </main><!-- End #main -->
