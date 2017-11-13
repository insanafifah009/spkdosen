<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SPK DOSEN UIN MALANG</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datepicker/datepicker3.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.css') ?>">
  <!-- jQuery 2.2.3 -->
<script type="text/javascript" src="<?php echo base_url('assets/plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.js') ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<!-- SlimScroll -->
<script type="text/javascript" src="<?php echo base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script type="text/javascript" src="<?php echo base_url('assets/plugins/fastclick/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script type="text/javascript" src="<?php echo base_url('assets/dist/js/app.min.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script type="text/javascript" src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/datepicker/bootstrap-datepicker.js') ?>"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>UIN</b>Malang</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SPK</b>Angka Kredit</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('img/work.png'); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('nama_user');?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('img/work.png'); ?>" class="img-circle" alt="User Image">

                <p>
                  <small>SPK Angka Kredit</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('c_login/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('img/logo.jpg'); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">DOSEN</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Profil Dosen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('dosen/InputDosen') ?>"><i class="fa fa-circle-o"></i> Profil </a></li>
            <li><a href="<?php echo base_url('dosen/InputDosen/edit') ?>"><i class="fa fa-circle-o"></i> Edit Profil </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Reviewer</span>
          </a>
        </li>
       

     <!-- PUNYA DOSEN -->


        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Menu Dupak</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="<?php echo base_url('dosen/Pendidikan') ?>"><i class="fa fa-circle-o"></i>  Data Pendidikan</a></li>
            <li><a href="<?php echo base_url('dosen/Pengajaran') ?>"><i class="fa fa-circle-o"></i> Data Pengajaran</a></li>
            <li><a href="<?php echo base_url('dosen/Penelitian') ?>"><i class="fa fa-circle-o"></i> Data Penelitian</a></li>
            <li><a href="<?php echo base_url('dosen/Pengabdian') ?>"><i class="fa fa-circle-o"></i> Data Pengabdian</a></li>
            <li><a href="<?php echo base_url('dosen/Penunjang') ?>"><i class="fa fa-circle-o"></i> Data Penunjang</a></li>
          </ul>
        </li>


     <!-- PUNYA DOSEN -->

        <!-- <ul class="sidebar-menu">
        <li class="header">ADMIN</li>
        <li class="treeview"></li>
        </ul>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Daftar Dosen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('dosen/InputDosen') ?>"><i class="fa fa-circle-o"></i> Profil </a></li>
            <li><a href="<?php echo base_url('dosen/InputDosen/edit') ?>"><i class="fa fa-circle-o"></i> Edit Profil </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Menu Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
               <li><a href="<?php echo base_url('admin/Menumaster') ?>"><i class="fa fa-circle-o"></i> Unsur Kegiatan</a></li>
            <li><a href="<?php echo base_url('admin/Menumaster/indexa') ?>"><i class="fa fa-circle-o"></i> Sub Kegiatan</a></li>
            <li><a href="<?php echo base_url('admin/Menumaster/indexb') ?>"><i class="fa fa-circle-o"></i> Uraian Kegiatan</a></li>
          </ul>
        </li>

          <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Lampiran</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="<?php echo base_url('Lampiran') ?>"><i class="fa fa-circle-o"></i>Lampiran 1</a></li>
            <li><a href="<?php echo base_url('Lampiran/index1') ?>"><i class="fa fa-circle-o"></i>Lampiran 2</a></li>
            <li><a href="<?php echo base_url('Lampiran/index2') ?>"><i class="fa fa-circle-o"></i>Lampiran 3</a></li>
            <li><a href="<?php echo base_url('Lampiran/index3') ?>"><i class="fa fa-circle-o"></i>Lampiran 4</a></li>
            <li><a href="<?php echo base_url('Lampiran/index4') ?>"><i class="fa fa-circle-o"></i>Lampiran 5</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Lihat Angka Kredit</span>
          </a>
          <ul class="treeview-menu">
          <li><a href="<?php echo base_url('LihatAK') ?>"><i class="fa fa-circle-o"></i>Lihat Angka Kredit</a></li>
          </ul>
        </li>

          

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Data Pengajuan Tervalidasi</span>
          </a>
        </li> -->
        
                <li class="treeview">
             <a href="#">
            <i class="fa fa-folder"></i> <span>Logout</span>
          </a>
        </li>

     
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>