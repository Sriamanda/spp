<form action="<?php echo site_url('Siswa/AddDataSiswa'); ?>" method="post" enctype="multipart/form-data">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Tambah Siswa</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <div>
                    <label>NISN</label>
                    <input type="text" class="form-control" placeholder="Masukan NISN" name="nisn">
                  </div>
                  
                  <div>
                    <label>NIS</label>
                    <input type="text" class="form-control" placeholder="Masukan NIS" name="nis">
                  </div>
                  
                  <div>
                    <label>Nama lengkap</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Siswa" name="nama">
                  </div>

                  <div>
                    <label>Nama Kelas</label>
                    <select name="id_kelas" class="form-control select2" style="width: 100%;">
                      <?php
                        foreach($list_kelas as $lk){
                          echo '<option value="'.$lk->id_kelas.'">'.$lk->nama_kelas.'</option>';
                        }
                      ?>
                    </select>
                  </div>

                 <div>
                    <label>Alamat</label>
                    <input type="text" class="form-control" placeholder="Masukan Alamat" name="alamat">
                  </div>

                  <div>
                    <label>No Telp</label>
                    <input type="text" class="form-control" placeholder="Masukan No Telp" name="no_telp">
                  </div>

                 <div>
                    <label>Tahun SPP</label>
                    <select name="id_spp" class="form-control select2" style="width: 100%;">
                      <?php
                        foreach($list_spp as $ls){
                          echo '<option value="'.$ls->id_spp.'">'.$ls->tahun.'</option>';
                        }
                      ?>
                    </select>
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