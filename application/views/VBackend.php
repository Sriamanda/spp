<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aplikasi SPP</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('temp/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('temp/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('temp/bower_components/Ionicons/css/ionicons.min.css'); ?>">
<!-- jquery -->
  <link rel="stylesheet" href="<?php echo base_url('temp/bower_components/jquery-ui/jqeuri-ui.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('temp/bower_components/select2/dist/css/select2.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('temp/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('temp/dist/css/AdminLTE.min.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('temp/dist/css/skins/_all-skins.min.css'); ?>">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-yellow sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Aplikasi SPP</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

      

      <!-- Sidebar toggle button-->
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('/uploads/download.png'); ?>" class="user-image" alt="Super Admin">
              <span class="hidden-xs"></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('/uploads/download.png'); ?>" class="User-Image" alt="Super Admin">

                <p>
                  <?php echo $this->session->userdata('username') ?>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo site_url('Welcome/Logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
  
        </ul>
      </div>

    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

<section class="sidebar">

      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('/uploads/download.png'); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>  <?php echo $this->session->userdata('username') ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
<!-- <========================================================================================> -->    
      <ul class="sidebar-menu" data-widget="tree">
       <li class="header">Menu Utama</li>
		 <?php if ($this->session->userdata('level') == "superadmin"){?>
        
        <li><a href="<?php echo site_url('welcome/index'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

        <li><a href="<?php echo site_url('User/DataUser'); ?>"><i class="fa fa-sign-in"></i> <span>User Login</span></a></li>

        <li><a href="<?php echo site_url('Petugas/DataPetugas'); ?>"><i class="fa fa-id-card"></i> <span>Data Petugas</span></a></li>

        <li><a href="<?php echo site_url('Spp/DataSpp'); ?>"><i class="fa fa-book"></i> <span>Data SPP</span></a></li>

         <li><a href="<?php echo site_url('Keahlian/DataKeahlian'); ?>"><i class="fa fa-book"></i> <span>Data Kompetensi Keahlian</span></a></li>

        <li><a href="<?php echo site_url('Kelas/DataKelas'); ?>"><i class="fa fa-book"></i> <span>Data Kelas</span></a></li>

        <li><a href="<?php echo site_url('Siswa/DataSiswa'); ?>"><i class="fa fa-user"></i> <span>Data Siswa</span></a></li>
        
        <li><a href="<?php echo site_url('Pembayaran/DataPembayaran'); ?>"><i class="fa fa-money"></i> <span>Data Pembayaran</span></a></li>


     <?php }elseif ($this->session->userdata('level') == "admin"){?>

        <li><a href="<?php echo site_url('welcome/index'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

       <li><a href="<?php echo site_url('AdminPembayaran/DataPembayaran'); ?>"><i class="fa fa-money"></i> <span>Data Pembayaran</span></a></li>


     <?php }else{ ?>

      <li><a href="<?php echo site_url('welcome/index'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

      <li><a href="<?php echo site_url('Laporan/cetak'); ?>"><i class="fa fa-money"></i> <span>Laporan</span></a></li>


     <?php } ?>
	  
	  </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
    
    <section class="content">

<?php $this->load->view($content); ?>
     

    </section>
    
      </div>
  


<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('temp/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('temp/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('temp/bower_components/select2/dist/js/select2.full.min.js'); ?>"></script>
<script src="<?php echo base_url('temp/bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('temp/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>

<!-- SlimScroll -->
<script src="<?php echo base_url('temp/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('temp/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('temp/dist/js/adminlte.min.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('temp/dist/js/demo.js'); ?>"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree();
    $('.select2').select2();
    $('#data_grid').DataTable()
    
  })
</script>
</body>
</html>
