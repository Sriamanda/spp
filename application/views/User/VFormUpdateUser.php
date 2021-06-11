<!-- Main content -->
<form action="<?php echo site_url('User/UpdateDataUser'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Update User</h3>
              
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <input type="hidden" name="id_login" value="<?php echo $detail['id_login']; ?>">
                  <div>
                    <br>
                    <label>Username</label>
                    <br>
                    <input type="text" name="username" class="form-control" value="<?php echo $detail['username']; ?>">
                  </div>
                
                  <div>
                    <label>Password</label>
                    <br>
                    <input type="text" name="password" class="form-control" value="<?php echo $detail['password']; ?>">
                  </div>
            
                  <div>
                    <label>Level</label>
                    <br>
                    <select type="text" name="level" class="form-control" id="level">
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