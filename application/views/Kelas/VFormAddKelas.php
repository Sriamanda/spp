<form action="<?php echo site_url('Kelas/AddDataKelas'); ?>" method="post">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Tambah Kelas</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
        
                  <div>
                    <label>Nama Kelas</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Kelas" name="nama_kelas">
                  </div>
                  
                  <div>
                    <label>Nama Kompetensi Keahlian</label>
                    <select name="id_kk" class="form-control select2" style="width: 100%;">
                      <?php
                        foreach($list_kk as $lk){
                          echo '<option value="'.$lk->id_kk.'">'.$lk->nama_kk.'</option>';

                        }
                      ?>
                      
                    </select>
                   </div>
                 
                </div>
                 <!-- /.box-body -->
                
                 <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->