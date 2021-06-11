<section class="content-header">
          <h1>
            Infomasi SPP     <small>Data Siswa</small>
          </h1>
</section>

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
		
		  
	
              <table class="table table-striped">
                <tr>
                  <th>NISN</th>
                  <th>NIS</th>
                  <th>Nama Lengkap</th>
                  <th>ID Kelas</th>
                  <th>Alamat</th>
                  <th>No. Telepon</th>
                  <th>ID SPP</th>
                  <th>ID Login</th>
                  <th>Photo</th>
                  <th></th>
                </tr>
                
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
    <td><?php echo $ReadDS->id_kelas; ?></td>
    <td><?php echo $ReadDS->alamat; ?></td>
    <td><?php echo $ReadDS->no_telp; ?></td>
    <td><?php echo $ReadDS->id_spp; ?></td>
    <td><?php echo $ReadDS->id_login; ?></td>
    <td><img src=""></td>
   
		<td width="5%">
			
		</td>
	</tr>
            
         <?php
     }
 }
 ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>




