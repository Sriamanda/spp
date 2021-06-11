<form action="<?php echo site_url('User/AddDataUser'); ?>" method="post">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Tambah User</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <div>
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Masukan Username" name="username">
                  </div>
                  
                  <div>
                  <label>Password</label>
                    <input type="text" class="form-control" placeholder="Masukan Password" name="password">
                      </div>
                      <div>
                  <label>Level</label>
                    <select id="level" class="form-control" name="level">
                      <option value="superadmin">SuperAdmin</option>
                      <option value="admin">Admin</option>
                      <option value="siswa">Siswa</option>
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