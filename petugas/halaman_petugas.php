<?php
if (isset($_GET['url']))
{
    $url=$_GET['url'];

    switch($url)
    {
        case 'verifikasi_pengaduan':
        include 'verifikasi_pengaduan.php';
        break;
        
        case 'detail_pengaduan':
        include 'detail_pengaduan.php';
        break;
        
        case 'detail_tanggapan':
        include 'detail_tanggapan.php';
        break;
        
        case 'verifikasi_tanggapan':
        include 'verifikasi_tanggapan.php';
        break;
        
        case 'tanggapan':
        include 'tanggapan.php';
        break;
        
        case 'simpan_tanggapan':
        include 'simpan_tanggapan.php';
        break;


    }
}
else{
    ?>
    <h6 style="color:black; font-family:monospace;">Selamat Datang di Aplikasi Pelaporan Pengaduan Masyarakat.Silahkan Laporkan Permasalahan anda <br><br>
    Anda Login Sebagai :</h6> <h2 style="color:black; font-family:monospace;"><b> <?php echo $_SESSION['nama']; 
    
    require '../koneksi.php';
    $sql=mysql_query("select * from pengaduan where status='belum diproses'");
    if($cek=mysql_num_rows($sql))

    require '../koneksi.php';
    $sql1=mysql_query("select * from pengaduan where status='proses'");
    if($cek1=mysql_num_rows($sql1))
    {
    ?>
<br><br>
 <div class="col-xl-6 col-md-6 mb-4">
          <div class="card border-left-dark shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laporan Pengaduan : </div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek; ?> Laporan yang harus diverifikasi</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-comments fa-4x text-success-300"></i>
                  <a href="?url=verifikasi_pengaduan" class="badge badge-danger badge-counter"><?php echo $cek; ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>

 <div class="col-xl-6 col-md-6 mb-4">
          <div class="card border-left-dark shadow h-100 py-2" required>
            <div class="card-body" required>
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laporan Pengaduan : </div>
                  <div  class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek1; ?> Laporan yang harus ditanggapi</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-comments fa-4x text-success-300"></i>
                  <a href="?url=verifikasi_tanggapan" class="badge badge-danger badge-counter"><?php echo $cek1; ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>

<?php
} }
?></b></h2>
