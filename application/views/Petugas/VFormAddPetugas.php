<form action="<?php echo site_url('Petugas/AddDataPetugas'); ?>" method="post" enctype="multipart/form-data">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Tambah Petugas</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
          
                  <div>
                    <label>Nama Petugas</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Petugas" name="nama_petugas">
                  </div>

                 
                  <div>
                    <label>User Login</label>
                    <select name="id_login" class="form-control select2" style="width: 100%;">
                      <?php
                        foreach($list_login as $ll){
                          echo '<option value="'.$ll->id_login.'">'.$ll->username.'</option>';

                        }
                      ?>
                      
                    </select>
                  </div>

                 <div>
                    <label>Photo</label>
                    <input type="file"  name="gambar" required="required">
                  </div>
                 
                </div>
                 <!-- /.box-body -->
                
                 <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->