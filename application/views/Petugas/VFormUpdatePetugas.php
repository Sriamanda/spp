<!-- Main content -->
<form action="<?php echo site_url('Petugas/UpdateDataPetugas'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Update Petugas</h3>
              
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                 <div class="box-body">
                    <input type="hidden" name="id_petugas" value="<?php echo $detail['id_petugas']; ?>">
                    <input type="hidden" name="id_login" value="<?php echo $detail['id_login']; ?>">
                  <br>
                  <div>
                    <label>Nama Petugas</label>
                    <br>
                    <input type="text" name="nama_petugas" class="form-control" value="<?php echo $detail['nama_petugas']; ?>">
                  </div>
                  
                </div>
                 <!-- /.box-body -->
                
                 <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->