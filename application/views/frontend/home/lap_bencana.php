<style>
#tabel1 {
  color: #000000;
  border-collapse: collapse;
  /* border: 1px solid #f2f5f7; */
}
#tabel1 tr th {
  background: #284063;
  color: white;
}
#tabel1, th, td {
  border: 1px solid #000000;
}
#tabel1 tr:nth-child(odd) {
  background-color: #f2f2f2;
}
img{
  margin-left: 2cm;
  float: left;
  margin-right: 50px;
}
h4{
  margin-top: -10px;
  text-align: center;
}
.left{
  text-align: right;
}
.right{
  text-align: left;
}
.noBorder {
  border:none !important;
  text-align: center;
}
.noBorder2 {
  border:none !important;
  text-align: left;
}
@page {
  margin: 0cm 0cm;
}
header {
  position: fixed;
  top: 0.8cm;
  left: 0cm;
  right: 0cm;
  height: 3cm;
}
body {
  margin-top: 3.5cm;
  margin-left: 2cm;
  margin-right: 2cm;
  margin-bottom: 2cm;
  font-size: 10.5px;
}
.right {
  position: absolute;
  right: 0px;
  width: 200px;
  padding: 10px;
}
</style>
<body>
<header>
  <img src="assets/images/favicon/apple-icon-180x180.png" width="72px" height="72px"><br>
  <h4 style="font-size:14px"><?=strtoupper($subpage.' '.$page)?>N <br> BPBD KABUPATEN TEGAL <br>
    <?php $tanggal = date('Y-m-d'); ?>
    PER <?=date_indo($tanggal)?></h4>
</header>
<p></p>
<table width="50%" cellspacing="0" cellpadding="0">
  <?php if ($this->input->post('jenis')){ ?>
    <?php foreach ($jenis as $key => $data){ ?>
      <?php if ($data->jenis_bencana == $this->input->post('jenis')){ ?>
        <tr>
          <td class="noBorder2">Jenis Bencana</td>
          <td class="noBorder2">:</td>
          <td class="noBorder2"><?=$data->jenis_bencana?></td>
        </tr>
      <?php } ?>
    <?php } ?>
  <?php } ?>
  <?php if ($this->input->post('tahun')){ ?>
    <?php foreach ($tahun as $key => $data){ ?>
      <?php if (date('Y', strtotime($data->tgl_kejadian)) == $this->input->post('tahun')) { ?>
        <tr>
          <td class="noBorder2">Tahun</td>
          <td class="noBorder2">:</td>
          <td class="noBorder2"><?=date('Y', strtotime($data->tgl_kejadian))?></td>
        </tr>
      <?php } ?>
    <?php } ?>
  <?php } ?>
</table>
<p></p>
  <div class="card-body">
    <div class="table-responsive">
      <table  class="table table-bordered table-hover" id="tabel1" width="100%" cellspacing="0">
        <thead>
          <tr style="color:white">
            <th>No</th>
            <th>Jenis Bencana</th>
            <th>Lokasi Kejadian</th>
            <th>Tanggal Kejadian</th>
            <th>Penyebab</th>
            <th>Kronologi</th>
            <th>Kerugian</th>
            <th>Terdampak</th>
            <th>Personil Lapangan</th>
            <th>Bantuan</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1;
          foreach($row->result()as $key => $data) {?>
            <tr>
              <td style="text-align: center;"><?=$no?></td>
              <td><?=$data->jenis_bencana?></td>
              <td><?=$data->lokasi_kejadian .'<br> Kec. '.$data->nama_kecamatan?></td>
              <td><?=longdate_indo($data->tgl_kejadian).'<br> Pukul: '.$data->jam_kejadian?></td>
              <td><?=$data->penyebab?></td>
              <td><?=$data->kronologi?></td>
              <td><?=$data->kerugian?></td>
              <td><?=$data->terdampak?></td>
              <td><?=$data->personil_lapangan?></td>
              <td><?=$data->bantuan?></td>
            </tr>
          <?php $no++; } ?>
          </tbody>
        </table>
        <br>
        <left>
          <strong>Dicetak pada :</strong> <?=longdate_indo(date('Y-m-d')); ?> <br> <strong>Pukul :</strong> <?=date('H:i:s') ?>
        </left>
        <div class="right">
          <p style="text-align:center">
            KEPALA PELAKSANA <br>
            BPBD KABUPATEN TEGAL <br>
            <br>
            <br>
            <br>
            <strong>ELILIYA HIDAYAH, S.IP., M.M</strong><br>
            NIP. 19690108 199003 2 006
          </p>
        </div>

      </body>
