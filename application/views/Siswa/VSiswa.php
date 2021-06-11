<section class="content-header">
          <h1>
            
          </h1>
</section>

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Informasi SPP     <small>Data Siswa</small></h3>

             
            </div>
            
            <!-- /.box-header -->
            <div class="box-body table-responsive">
		
			
      <a href="<?php echo site_url('Siswa/VFormAddSiswa'); ?>" class="btn btn-primary btn-sm fa fa-plus"> Tambah Data</a><br><br>
		  
	
              <table class="table table-striped" id="data_grid">
                <thead>
                <tr>
                  <th>NISN</th>
                  <th>NIS</th>
                  <th>Nama Lengkap</th>
                  <th>Kelas</th>
                  <th>Alamat</th>
                  <th>No. Telepon</th>
                  <th>Tahun SPP</th>
                  <th>Username Login</th>
                  <th>Photo</th>
                  <th>Aksi</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
	if(!empty($DataSiswa))
	{
		foreach($DataSiswa as $ReadDS)
		{
	?>

	<tr>
		
    <td><?php echo $ReadDS->nisn; ?></td>
    <td><?php echo $ReadDS->nis; ?></td>
    <td><?php echo $ReadDS->nama; ?></td>
    <td><?php echo $ReadDS->nama_kelas; ?></td>
    <td><?php echo $ReadDS->alamat; ?></td>
    <td><?php echo $ReadDS->no_telp; ?></td>
    <td><?php echo $ReadDS->tahun; ?></td>
    <td><?php echo $ReadDS->username; ?></td>
    <td><img src="<?php echo base_url('images/').$ReadDS->image; ?>" width="60"></td>
   
		<td width="5%">
			<a href="<?php echo site_url('Siswa/DataSiswa/'.$ReadDS->nisn.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('Siswa/DeleteDataSiswa/'.$ReadDS->nisn) ?>">Delete</a>
		</td>
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