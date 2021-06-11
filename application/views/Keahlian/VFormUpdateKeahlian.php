<!-- Main content -->
<form action="<?php echo site_url('Keahlian/UpdateDataKeahlian'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Update Kompetensi Keahlian</h3>
              
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
               
                    <input type="hidden" name="id_kk" value="<?php echo $detail['id_kk']; ?>">
                    
                   <br>
                  <div>
                    <label>Nama Kompetensi</label>
                    <br>
                    <input type="text" name="nama_kk" class="form-control" value="<?php echo $detail['nama_kk']; ?>">
                  </div>
                 
                </div>
                 <!-- /.box-body -->
                
                 <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->