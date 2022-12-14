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
</style>
<body>
<header>
  <img src="assets/images/favicon/apple-icon-180x180.png" width="72px" height="72px"><br>
  <h4 style="font-size:14px"><?=strtoupper($subpage.' '.$page)?> <br> Puskesmas Cilincing <br>
    <?php $tanggal = date('Y-m-d'); ?>
    PER <?=date_indo($tanggal)?></h4>
</header>
<p></p>
<table width="50%" cellspacing="0" cellpadding="0">
  <?php if ($this->input->post('kd_penyakit')){ ?>
    <?php foreach ($penyakit as $key => $data){ ?>
      <?php if ($data->kd_penyakit == $this->input->post('kd_penyakit')){ ?>
        <tr>
          <td class="noBorder2">Nama Penyakit</td>
          <td class="noBorder2">:</td>
          <td class="noBorder2"><?=$data->nama_penyakit?></td>
        </tr>
      <?php } ?>
    <?php } ?>
  <?php } ?>
  <?php if ($this->input->post('jk')){ ?>
        <tr>
          <td class="noBorder2">Jenis Kelamin</td>
          <td class="noBorder2">:</td>
          <td class="noBorder2"><?=$this->input->post('jk');?></td>
        </tr>
  <?php } ?>
</table>
<p></p>
  <div class="card-body">
    <div class="table-responsive">
      <table  class="table table-bordered table-hover" id="tabel1" width="100%" cellspacing="0">
        <thead>
          <tr style="color:white">
            <th>No</th>
            <th>Nama Pasien</th>
            <th>Jenis Kelamin</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Hasil Diagnosa</th>
            <th>Tgl Diagnosa</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1;
          foreach($row->result()as $key => $data) {?>
            <tr>
              <td style="text-align: center;"><?=$no?></td>
              <td><?=$data->nama?></td>
              <td><?=$data->jk?></td>
              <td><?=$data->umur?></td>
              <td><?=$data->alamat?></td>
              <td><?=$data->email?></td>
              <td><?php foreach ($rowhasil->result() as $key => $datarelasi){ ?>
                <?php if ($datarelasi->nama == $data->nama){ ?>
                  <?=$datarelasi->kd_penyakit.'|'.$datarelasi->nama_penyakit?><br>
                <?php } ?>
              <?php } ?></td>
              <td><?=igDate($data->tanggal)?></td>
            </tr>
          <?php $no++; } ?>
          </tbody>
        </table>
        <br>
        <left>
          <strong>Dicetak pada :</strong> <?=longdate_indo(date('Y-m-d')); ?> <br> <strong>Pukul :</strong> <?=date('H:i:s') ?>
        </left>
      </body>
