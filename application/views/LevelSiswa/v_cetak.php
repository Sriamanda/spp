<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=".$GetSiswa->nis."-".$GetSiswa->nama.".xls");
?>
<html>
<head>
  <title>Data SISWA</title>
</head>
<body>

NISN :<?php echo $GetSiswa->nisn; ?> <br>
NIS: <?php echo $GetSiswa->nis; ?><br>
Nama: <?php echo $GetSiswa->nama; ?><br>
Alamat : <?php echo $GetSiswa->alamat; ?><br>
No Telp : <?php echo $GetSiswa->no_telp; ?><br>
Kelas : <?php echo $GetSiswa->nama_kelas; ?><br>
<br><br>

<table  cellpadding="10">
  <tr>
    <td>Tanggal Bayar</td>
    <td>Bulan</td>
    <td>Tahun</td>
    <td>Jumlah Bayar</td>
  </tr>
  <?php
    foreach($DataSiswa as $ReadDS)
    {
  ?>
  <tr>
    <td><?php echo $ReadDS->tgl_bayar; ?></td>
    <td><?php echo $ReadDS->bulan_bayar; ?></td>
    <td><?php echo $ReadDS->tahun_bayar; ?></td>
    <td><?php echo $ReadDS->jumlah_bayar; ?></td>
  </tr><?php
}?>
</table>    


 </body>
 </html>  