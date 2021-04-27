<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Form Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body  style="background:url(img/j.jpg);  s background-repeat: no-repeat;
    background-size: cover;">

  <div class="container">

    <div class="card" style="margin-top:10px"><h2 align="center" style="color:black;">Aplikasi Pelaporan Pengaduan Masyarakat</h2><h5 align="center" style="color:black;">Laporkan Pengaduan Anda</h5></div>
    <!-- Outer Row -->
    <div class="row justify-content-center">
    

        <div class="card o-hidden border-0 shadow-lg my-5" style="background: rgba(0, 0, 0, 0.5)">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-15 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h2 mb-4" style="font-family:monospace; color:white">Silahkan Login</h1>
                  </div>
                  <form class="user" method="post" action="cek_login.php">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" placeholder="Masukkan Username...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" minlength="8" class="form-control form-password form-control-user" id="exampleInputPassword" placeholder="Password">
                      <input type="password" name="password" minlength="8" class="form-control form-password form-control-user" id="exampleInputPassword" placeholder="Password" style="margin-top:5px;">
                      <input type="checkbox" class="form-checkbox" style="margin-top:8px; margin-left:5px;"> <span style="font-family:monospace; color:white">Show password</span>
                    </div>
                    	<div class="kotak">		

	<form action="hasilcaptcha.php" method="post">
<table border="0" cellpadding="0" cellspacing="0" align="center">

<tr>
<td >Captcha</td>
<td ><img src="captcha.php" alt="gambar" /> </td>
</tr>
<td>Isikan captcha </td>
<td ><input name="kodecaptcha" class="form-control form-control-user" style="margin-top:5px;" value="" maxlength="5"/></td>

</table>
</form>
                    <input type="submit" class="btn btn-warning btn-user btn-block" value="login" style="background: rgba(0, 0, 0, 0.5); font-family: monospace; font-size:12px; margin-top:10px;">
                    </a>
                    <hr>
                    <div class="text-center" style="font-family:monospace; font-size:13px;"> 
                  Belum Punya Akun?
                    <a class="small"style="font-family:monospace; font-size:12px; color:yellow;" href="registrasi.php">Registrasi</a>
                  </div>
                 <!-- <div class="text-center"> 
                    <a class="btn btn-warning btn-user btn-block-sm" style="background: rgba(0, 0, 0, 0.5); padding:3px 6px; font-family: monospace; font-size:12px; margin-top:5px" href="index3.php">Admin</a>
                    ||
                    <a class="btn btn-warning btn-user btn-block-sm" style="background: rgba(0, 0, 0, 0.5); padding:3px 6px; font-family: monospace; font-size:12px; margin-top:5px" href="index2.php"> Petugas</a>
                  </div> -->
               
                  </form>
                  <hr>
                </div>
              </div>
            </div>
        </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>
<script type="text/javascript">
	$(document).ready(function(){		
		$('.form-checkbox').click(function(){
			if($(this).is(':checked')){
				$('.form-password').attr('type','text');
			}else{
				$('.form-password').attr('type','password');
			}
		});
	});
</script>

</html>
