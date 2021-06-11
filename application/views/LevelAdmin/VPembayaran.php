<section class="content-header">
          <h1>
           
          </h1>
</section>

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Infomasi SPP     <small>Data Pembayaran</small></h3>  
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
    
      
      <a href="<?php echo site_url('AdminPembayaran/VFormAddPembayaran'); ?>" class="btn btn-primary btn-sm fa fa-plus"> Tambah Data</a><br><br>
      
  
              <table class="table table-striped" id="data_grid">
                <thead>
                <tr>
                  <th>Nama Petugas</th>
                  <th>Nama Siswa</th>
                  <th>NISN</th>
                  <th>Tanggal Bayar</th>
                  <th>Bulan Bayar</th>
                  <th>Tahun Bayar</th>
                  <th>Tahun SPP</th>
                  <th>Jumlah</th>
                </tr>
                </thead>
                <tbody>
                <?php
  if(!empty($DataPembayaran))
  {
    foreach($DataPembayaran as $ReadDS)
    {
  ?>

  <tr>
    <td><?php echo $ReadDS->nama_petugas; ?></td>
    <td><?php echo $ReadDS->nama; ?></td>
    <td><?php echo $ReadDS->nisn; ?></td>
    <td><?php echo $ReadDS->tgl_bayar; ?></td>
    <td><?php echo $ReadDS->bulan_bayar; ?></td>
    <td><?php echo $ReadDS->tahun_bayar; ?></td>
    <td><?php echo $ReadDS->tahun; ?></td>
    <td><?php echo rupiah($ReadDS->jumlah_bayar); ?></td>
  </tr>
            
         <?php
     }
 }
 ?>
</tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <script type="text/javascript">$('#data_grid').DataTable()</script>
