<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Data Masyarakat</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">


    <div class="card shadow" >
    <div class="card-header py-3 " style="background-color:black">
            <h6 class="m-0 font-weight-bold text-white">Edit Data Masyarakat</h6>
          </div>
        <div class="card-body">

            <?php
            require 'koneksi.php';
            $sql = mysql_query("select * from masyarakat where nik");
            if ($data = mysql_fetch_array($sql)) {
            ?>
                <form action="update_masyarakat.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group cols-sm-6">
                        <label>Nik</label>
                        <input type="text" name="nik" value="<?php echo $_SESSION['nik']; ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group cols-sm-6">
                        <label>Nama</label>
                        <input type="text" name="nama" value="<?php echo $_SESSION['username']; ?>" class="form-control">
                    </div>
                    <div class="form-group cols-sm-6">
                        <label>Username</label>
                        <input type="text" name="username" value="<?php echo $_SESSION['nama']; ?>" class="form-control">
                    </div>
                    
                    <div class="form-group cols-sm-6">
                        <label>Password</label>
                        <input type="text" name="password" value="<?php echo $_SESSION['password']; ?>" class="form-control" >
                    </div>
                    <div class="form-group cols-sm-6">
                        <label>Telp</label>
                        <input type="text" name="telp" value="<?php echo $_SESSION['telp']; ?>" class="form-control" >
                    </div>
                    




                    <div class="form-group cols-sm-6">
                        <input type="submit" value="Edit Data" class="btn btn-primary">
                        <input type="reset" value="Kosongkan" class="btn btn-warning">
                    </div>
                </form>
            <?php } ?>


            <!-- Bootstrap core JavaScript-->
            <script src="../vendor/jquery/jquery.min.js"></script>
            <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>