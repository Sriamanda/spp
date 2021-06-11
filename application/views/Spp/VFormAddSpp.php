<form action="<?php echo site_url('Spp/AddDataSpp'); ?>" method="post">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Tambah SPP</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  
                  <div>
                    <label>Tahun Ajaran</label>
                    <input type="text" class="form-control" placeholder="Masukan Tahun Ajaran" name="tahun">
                  </div>

                  <div>
                    <label>Nominal</label>
                    <input type="text" class="form-control" placeholder="Masukan Nominal" name="nominal">
                  </div>
                 
                </div>
                 <!-- /.box-body -->
                
                 <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->