<!-- Main content -->
<form action="<?php echo site_url('Siswa/UpdateDataSiswa'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Update Siswa</h3>
              
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
            
                  <div class="box-body">
                    <input type="hidden" name="nisn" value="<?php echo $detail['nisn']; ?>">
                    <input type="hidden" name="id_kelas" value="<?php echo $detail['id_kelas']; ?>">   
                    <input type="hidden" name="id_spp" value="<?php echo $detail['id_spp']; ?>"> 
                    <input type="hidden" name="id_login" value="<?php echo $detail['id_login']; ?>">
                  <br>
                  <div>
                    <label>NIS</label>
                    <br>
                    <input type="text" name="nis" value="<?php echo $detail['nis']; ?>" class="form-control">
                  </div>  

                  <div>
                    <label>Nama Lengkap</label>
                    <br>
                    <input type="text" name="nama" value="<?php echo $detail['nama']; ?>" class="form-control">
                  </div>
                
                  <div>
                    <label>Alamat</label>
                    <br>
                    <input type="text" name="alamat" value="<?php echo $detail['alamat']; ?>" class="form-control">
                  </div>
                
                  <div>
                    <label>No Telp</label>
                    <br>
                    <input type="text" name="no_telp" value="<?php echo $detail['no_telp']; ?>" class="form-control">
                  </div>
                
                </div>
                <!-- /.box-body -->
                
                 <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->