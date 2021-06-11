<!-- Main content -->
<form action="<?php echo site_url('Spp/UpdateDataSpp'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Update Spp</h3>
              
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  
                    <input type="hidden" name="id_spp" value="<?php echo $detail['id_spp']; ?>">
                    <br>
                  <div>
                    <label>Tahun Ajaran</label>
                    <br>
                    <input type="text" name="tahun" class="form-control" value="<?php echo $detail['tahun']; ?>">
                  </div>
                  

                  <div>
                    <label>Nominal</label>
                    <br>
                    <input type="text" name="nominal" class="form-control" value="<?php echo $detail['nominal']; ?>">
                  </div>
                  
                </div>
                 <!-- /.box-body -->
                
                 <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->