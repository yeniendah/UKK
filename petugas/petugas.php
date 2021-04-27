<?php
session_start();
if(!isset($_SESSION['nama']))
{
  die("Anda Belum Login");
}
if($_SESSION['level']!="petugas")
{
  die("Anda Bukan Petugas");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Form Petugas</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top" style="background:url(../img/c.png);">

  <!-- Page Wrapper -->
  <div id="wrapper" style="background:url(../img/c.png);">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion"  style="background:url(../img/x.jpg); background-repeat: no-repeat;
    background-size: cover;" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="" style="background-color:black;">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-keyboard"></i>
          </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0" >

      <!-- Dashboard -->
      <div class="nav-item">
      <a class="nav-link" href="petugas.php" >
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span style="font-family:monospace; font-size:17px;">Dashboard</span></a>
      </div>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="?url=verifikasi_pengaduan">
          <i class="fas fa-edit"></i>
          <span style="font-family:monospace; font-size:17px;">Verifikasi Pengaduan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="?url=verifikasi_tanggapan">
          <i class="fas fa-edit"></i>
          <span style="font-family:monospace; font-size:17px;">Tanggapi Pengaduan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link" href="../logout.php" >
          <i class="fas fa-sign-out-alt"></i><span style="font-family:monospace; font-size:17px;">Keluar</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content" style="background-color:white">

        <!-- Topbar -->
        <nav class="navbar navbar-expand  topbar mb-4 static-top shadow"  style="background-color:black;">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn d-md-none rounded-circle mr-3" style="btn-color: white;">
            <i class="fa fa-bars"></i>
          </button>

          <h1 style="color:white; font-family:monospace;">Aplikasi Pelaporan Pengaduan Masyarakat</h1>
        </nav>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
      <?php include 'halaman_petugas.php';?>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
    
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>