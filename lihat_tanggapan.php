<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Lihat Tanggapan</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<div class="card shadow" style="background:rgba(0, 0, 0, 0.5);">
    <div class="card-header" style="background-color:black; color:white;">
        Lihat Tanggapan
    </div>


    <div class="card-body"style="background-color:white">
        <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">

        <?php
        require 'koneksi.php';
        $sql=mysql_query("select * from pengaduan, tanggapan where tanggapan.id_pengaduan='$_GET[id]' and tanggapan.id_pengaduan=pengaduan.id_pengaduan");
        $sql1=mysql_query("select * from pengaduan where status='proses'");
        $cek=mysql_num_rows($sql);
        $cek1=mysql_num_rows($sql1);
        
            if($cek<1) //jika tidak ditemukan
            {
                
                echo "<font color='red'>Mohon Bersabar, Pengaduan Belum Diproses</font>";
            }
            else
            {
                if($data=mysql_fetch_array($sql))
            {
            ?>
            <div class="form-group cols-sm-6" style="background-color:white">
                <label style="background-color:white">Kategori</label>
                <input type="text" name="tgl_tanggapan" value="<?php echo $data['kategori']; ?>" class="form-control" style="background-color:white"readonly>
            <div class="form-group cols-sm-6" style="background-color:white">
                <label style="background-color:white">Tanggal Tanggapan</label>
                <input type="text" name="tgl_tanggapan" value="<?php echo $data['tgl_tanggapan']; ?>" class="form-control" style="background-color:white"readonly>
            <div class="form-group cols-sm-6">
                <label>Tulis Laporan</label>
               <textarea class="form-control" rows="7" name="isi_pengaduan" style="background-color:white" readonly>
               <?php echo $data['isi_pengaduan']; ?>
               </textarea>
            </div>
            <div class="form-group cols-sm-6">
                <label>Isi Tanggapan</label>
               <textarea class="form-control" rows="7" name="tanggapan" style="background-color:white" readonly>
               <?php echo $data['tanggapan']; ?>
               </textarea>
            </div>
            <?php  }}?>

            <div class="form-group col-sm-6">
                <a href="?url=lihat_pengaduan" class="btn btn-primary btn-icon-split" style="margin-top:20px" >
                 <span class="icon text-white-50">
                 <i class="fas fa-arrow-left"></i>
                </span>
                <span class="text">Kembali</span>
        
                </a>
            </div>
        </form>
        </div>
    </div>  

               <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
 


 <!-- Bootstrap core JavaScript-->
 <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
