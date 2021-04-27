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

</head>

<body id="page-top">
<a href="admin.php?url=lihat_petugas" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      </i>
                    </span>
                    <span class="text">Kembali</span>
                  </a>
                  <br>

<div class="card shadow" style="background-color:white;">
   
    <div class="card-header" style="background-color:black;">
        Tambah Petugas
    </div>
    <div class="card-body"style="background-color:white;">
        <form action="simpan_petugas.php" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group cols-sm-6" >
                <label >Nama Petugas</label>
                <input type="text" name="nama_petugas" value="" class="form-control" style="background-color:white;">
            </div>
            <div class="form-group cols-sm-6" style="background-color:white;">
                <label >Username</label>
                <input type="text" name="username" value="" class="form-control" style="background-color:white;">
            </div>
            <div class="form-group cols-sm-6" style="background-color:white;">
                <label >Password</label>
                <input type="text" name="password" value="" class="form-control" style="background-color:white;">
            </div>
            <div class="form-group cols-sm-6" style="background-color:white;">
                <label >Telepon</label>
                <input type="text" name="telp" value="" class="form-control" style="background-color:white;">
            </div>
            <div class="form-group cols-sm-6" style="background-color:white;">
                <label style="background-color:white;">Nama Petugas</label>
                <select class="form-control" name="level" style="background-color:white;">
                    <option value="" style="background-color:white">==Pilih</option>
                    <option value="admin" style="background-color:white">Admin</option>
                    <option value="petugas" style="background-color:white">Petugas</option>
                    </select>
            </div>
        

            <div class="form-group col-sm-6">
                <input type="submit" value="Simpan" class="btn btn-dark">
                <input type="reset" value="Kosongkan" class="btn btn-light">
             
            </div>
        </form>

               <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

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
