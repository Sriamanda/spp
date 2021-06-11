<section class="content-header">
         <!--  <h1>
            Infomasi SPP     <small>Data User</small>
          </h1> -->
</section>

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Informasi SPP     <small>Data User</small></h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
		
		
      <a href="<?php echo site_url('User/VFormAddUser'); ?>" class="btn btn-primary btn-sm fa fa-plus"> Tambah Data</a><br><br>
		
	
              <table class="table table-striped" id="data_grid">
                <thead>
                <tr>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Level</th>
                  <th>Aksi</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
	if(!empty($DataUser))
	{
		foreach($DataUser as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->username; ?></td>
    <td><?php echo $ReadDS->password; ?></td>
    <td><?php echo $ReadDS->level; ?></td>

		<td width="5%">
			<a href="<?php echo site_url('User/DataUser/'.$ReadDS->id_login.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('User/DeleteDataUser/'.$ReadDS->id_login) ?>">Delete</a>
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
      <script type="text/javascript">$('#data_grid').DataTable()</script>



