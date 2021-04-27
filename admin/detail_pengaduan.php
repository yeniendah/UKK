<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Blank</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/twd-base.css" />	
<link rel="stylesheet" type="text/css" href="css/style.css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />

<script type="text/javascript">
$(function() {
	$('#gallery a').lightBox();
});
</script>
  

</head>

<body id="page-top">

<div class="card shadow">
    <div class="card-header" style="background-color:black;">
        Detail Pengaduan
    </div>

    <?php
        require '../koneksi.php';
        $sql=mysql_query("select * from pengaduan where id_pengaduan='$_GET[id]'");
        $data=mysql_fetch_array($sql);
        if ($sql)
        {
            ?>
    <div class="card-body">
        <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">

       
            <div class="form-group cols-sm-6" >
                <label>Kategori</label>
                <input type="text" name="kategori" value="<?php echo $data['kategori']; ?>" class="form-control" style="background-color:white;"readonly>
            <div class="form-group cols-sm-6" >
                <label>Tanggal Pengaduan</label>
                <input type="text" name="tgl_pengaduan" value="<?php echo $data['tgl_pengaduan']; ?>" class="form-control" style="background-color:white;"readonly>
            <div class="form-group cols-sm-6">
                <label>Tulis Laporan</label>
               <textarea class="form-control" rows="7" name="isi_pengaduan" style="background-color:white;" readonly>
               <?php echo $data['isi_pengaduan']; ?>
               </textarea>
            </div>
            <div class="form-group cols-sm-6">
                <label>Bukti Foto</label>
                <ul>
			        <li>
				        <a href="../foto/<?php echo $data['foto']; ?>" title="Satu">
                            <img src="../foto/<?php echo $data['foto']; ?>"  width="500px">
				        </a>
			        </li>
                </ul>
            
            </div>

            <div class="form-group col-sm-6">
                <a href="?url=verifikasi_tanggapan" class="btn btn-primary btn-icon-split" style="margin-top:20px" >
                 <span class="icon text-white-50">
                 <i class="fas fa-arrow-left"></i>
                </span>
                <span class="text">Kembali</span>
                </a>
            </div>
  
  

            <?php } ?>
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
 <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>
  


</body>

</html>
