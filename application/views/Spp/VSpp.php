<section class="content-header">
          <h1>
            
          </h1>
</section>

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Informasi SPP     <small>Data SPP</small></h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
    
    
      <a href="<?php echo site_url('Spp/VFormAddSpp'); ?>" class="btn btn-primary btn-sm fa fa-plus"> Tambah Data</a><br><br>
      
  
              <table class="table table-striped" id="data_grid">
                <thead>
                <tr>
                  <th>Tahun Ajaran</th>
                  <th>Nominal</th>
                  <th>Aksi</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
  if(!empty($DataSpp))
  {
    foreach($DataSpp as $ReadDS)
    {
  ?>

  <tr>
    <td><?php echo $ReadDS->tahun; ?></td>
    <td><?php echo rupiah($ReadDS->nominal); ?></td>
    

    <td width="5%">
      <a href="<?php echo site_url('Spp/DataSpp/'.$ReadDS->id_spp.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('Spp/DeleteDataSpp/'.$ReadDS->id_spp) ?>">Delete</a>
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




