<!-- Main content -->
<form action="<?php echo site_url('Kelas/UpdateDataKelas'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Update Kelas</h3>
              
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
      
                    <input type="hidden" name="id_kelas" value="<?php echo $detail['id_kelas']; ?>">
                    <input type="hidden" name="id_kk" class="form-control" value="<?php echo $detail['id_kk']; ?>">
                  <br>
                  <div>
                    <label>Nama Kelas</label>
                    <br>
                    <input type="text" name="nama_kelas" class="form-control" value="<?php echo $detail['nama_kelas']; ?>">
                  </div>
                  
                </div>
                
                  <!-- /.box-body -->
                
                 <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->