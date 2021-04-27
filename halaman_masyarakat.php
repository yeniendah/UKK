
<?php
if (isset($_GET['url']))
{
    $url=$_GET['url'];

    switch($url)
    {
        case 'tulis_pengaduan';
        include 'tulis_pengaduan.php';
        break;

        case 'lihat_pengaduan';
        include 'lihat_pengaduan.php';
        break;

        case 'detail_pengaduan';
        include 'detail_pengaduan.php';
        break;

        case 'lihat_tanggapan';
        include 'lihat_tanggapan.php';
        break;

        case 'simpan';
        include 'simpan.php';
        break;

        case 'simpan_masyarakat';
        include 'simpan_masyarakat.php';
        break;

        case 'simpan_petugas2';
        include 'simpan_petugas2.php';
        break;

        case 'delete_masyarakat';
        include 'delete_masyarakat.php';
        break;
    

        case 'edit_masyarakat';
        include 'edit_masyarakat.php';
        break;

        case 'update_masyarakat';
        include 'update_masyarakat.php';
        break;
    
        


    }
}
else{
    ?>
    <h5 style="color:black; font-family:monospace; font-size:25px">Selamat Datang di Aplikasi Pelaporan Pengaduan Masyarakat.Silahkan Laporkan Permasalahan anda </h5><br><br>
    
    <div class="row justify-content-center">

        <div class="card o-hidden border-0 shadow-lg my-5" style="background: rgba(0, 0, 0, 0.5)">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-15 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                  <h4 style="color:black; margin-right:10px" align="center" style="font-family:impact;"> Anda Login Sebagai :</h4>
                  </div><br>
     <h2 style="color:black; font-family:monospace; margin-right:10px" align="center"><b> <?php echo $_SESSION['nama'];
}
?></b></h2>

