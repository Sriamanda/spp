<form action="<?php echo site_url('AdminPembayaran/AddDataPembayaran'); ?>" method="post">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
               <h3 class="box-title">Tambah Data Pembayaran</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">

              <div>
                <label>Petugas</label>
                <select name="id_petugas" class="form-control select2" style="width: 100%;">

                  <?php
                        foreach($list_petugas as $lp){
                          echo '<option value="'.$lp->id_petugas.'">'.$lp->nama_petugas.'</option>';
                        }
                  ?>
                </select>
              </div>

                   <div>
                    <label>Nama Siswa</label>
                    <select name="nisn" class="form-control select2" style="width: 100%;">
                      <?php
                        foreach($list_siswa as $ls){
                          echo '<option value="'.$ls->nisn.'">'.$ls->nama.'</option>';
                        }
                      ?>
                    </select>
                  </div>
                  
                  <div>
                    <label>Tanggal Bayar</label>
                    <input type="date" class="form-control" placeholder="Masukan Tanggal Bayar" name="tgl_bayar">
                  </div>
            
                  <div>
                    <input type="hidden" class="form-control" placeholder="Masukan Bulan Bayar" name="bulan_bayar">
                  </div>
                
                  <div>
                    <input type="hidden" class="form-control" placeholder="Masukan Tahun Bayar" name="tahun_bayar">
                  </div>
                 
                 <div>
                    <label>Nominal</label>
                    <select name="id_spp" class="form-control select2" style="width: 100%;">
                      <?php
                        foreach($list_spp as $la){
                          echo '<option value="'.$la->id_spp.'">'.$la->nominal.'</option>';
                        }
                      ?>
                    </select>
                  </div>

                  <div>
                    <input type="hidden" class="form-control" placeholder="Masukan Jumlah Bayar Sesuai Tahun SPP" name="jumlah_bayar">
                  </div>


                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->