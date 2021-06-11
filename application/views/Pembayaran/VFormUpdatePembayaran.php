<!-- Main content -->
<form action="<?php echo site_url('Pembayaran/UpdateDataPembayaran'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Update Pembayaran</h3>
              
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                    <input type="hidden" name="id_pembayaran" value="<?php echo $detail['id_pembayaran']; ?>">
                    <input type="hidden" name="nisn" value="<?php echo $detail['nisn']; ?>">
                    <input type="hidden" name="id_petugas" value="<?php echo $detail['id_petugas']; ?>">
                    <input type="hidden" name="id_spp" value="<?php echo $detail['id_spp']; ?>">
                    <br>

                  <div>
                    <label>Tanggal Dibayar</label>
                    <br>
                    <input type="date" name="tgl_bayar" class="form-control" value="<?php echo $detail['tgl_bayar']; ?>">
                  </div>

               <!-- /.box-body -->
                <br>
                 <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->