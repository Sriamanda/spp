<section class="content-header">
          <h1>
            
          </h1>
</section>

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Informasi SPP     <small>Data Petugas</small></h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
    
    
      <a href="<?php echo site_url('Petugas/VFormAddPetugas'); ?>" class="btn btn-primary btn-sm fa fa-plus"> Tambah Data</a><br><br>
      
  
              <table class="table table-striped" id="data_grid">
                <thead>
                <tr>
                  <th>Nama Petugas</th>
                  <th>Username Login</th>
                  <th>Photo</th>
                  <th>Aksi</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
  if(!empty($DataPetugas))
  {
    foreach($DataPetugas as $ReadDS)
    {
  ?>

  <tr>
    <td><?php echo $ReadDS->nama_petugas; ?></td>
    <td><?php echo $ReadDS->username; ?></td>
    <td><img src="<?php echo base_url('images/').$ReadDS->image; ?>" width="60"></td>
    

    <td width="5%">
      <a href="<?php echo site_url('Petugas/DataPetugas/'.$ReadDS->id_petugas.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('Petugas/DeleteDataPetugas/'.$ReadDS->id_petugas) ?>">Delete</a>
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




