<section class="content-header">
          <h1>
            
          </h1>
</section>

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Informasi SPP     <small>Data Kompetensi Keahlian</small></h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
    
    
      <a href="<?php echo site_url('Keahlian/VFormAddKeahlian'); ?>" class="btn btn-primary btn-sm fa fa-plus"> Tambah Data</a><br><br>
      
  
              <table class="table table-striped" id="data_grid">
                <thead>
                <tr>
                  <th>Nama Kompetensi Keahlian</th>
                  <th>Aksi</th>
                  <th></th>
                </tr>
                </thead><tbody>
                <?php
  if(!empty($DataKeahlian))
  {
    foreach($DataKeahlian as $ReadDS)
    {
  ?>

  <tr>
    <td><?php echo $ReadDS->nama_kk; ?></td>
    
    <td width="5%">
      <a href="<?php echo site_url('Keahlian/DataKeahlian/'.$ReadDS->id_kk.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('Keahlian/DeleteDataKeahlian/'.$ReadDS->id_kk) ?>">Delete</a>
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




