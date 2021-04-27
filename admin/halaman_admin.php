<?php
if (isset($_GET['url']))
{
    $url=$_GET['url'];

    switch($url)
    {
      case 'verifikasi_tanggapan';
      include 'verifikasi_tanggapan.php';
      break;
      
      case 'detail_pengaduan';
      include 'detail_pengaduan.php';
      break;

      case 'tanggapan';
      include 'tanggapan.php';
      break;

      case 'lihat_petugas':
      include 'lihat_petugas.php';
      break;
     
      case 'tambah_petugas':
      include 'tambah_petugas.php';
      break;
     
      case 'edit_petugas':
      include 'edit_petugas.php';
      break;
     
      case 'lihat_masyarakat':
      include 'lihat_masyarakat.php';
      break;
     
      case 'preview_petugas':
      include 'preview_petugas.php';
      break;
     
      case 'preview_masyarakat':
      include 'preview_masyarakat.php';
      break;
     
      case 'lihat_pengaduan':
      include 'lihat_pengaduan.php';
      break;
     
      case 'detailpengaduan':
      include 'detailpengaduan.php';
      break;
     
      case 'cetak_pengaduan':
      include 'cetak_pengaduan.php';
      break;

      case 'verifikasi_pengaduan';
      include 'verifikasi_pengaduan.php';
      break;

      case 'proses';
      include 'proses.php';
      break;

      case '_lihattanggapan2';
      include '_lihattanggapan2.php';
      break;

      case '_lihattanggapan';
      include '_lihattanggapan.php';
      break;

      case '_lihattanggapan3';
      include '_lihattanggapan3.php';
      break;

      case 'preview_tanggapan_';
      include 'preview_tanggapan_.php';
      break;

      case 'cetak_tanggapan_';
      include 'cetak_tanggapan_.php';
      break;

      case 'preview_tanggapan_2';
      include 'preview_tanggapan_2.php';
      break;

      case 'preview_tanggapan_3';
      include 'preview_tanggapan_3.php';
      break;

      case '-lihattanggapan';
      include '-lihattanggapan.php';
      break;

      case 'detailpengaduan2';
      include 'detailpengaduan2.php';
      break;
      
      case '_detailpengaduan_2';
      include '_detailpengaduan_2.php';
      break;

      case '-lihattanggapan1';
      include '-lihattanggapan1.php';
      break;

      case '-lihattanggapan2';
      include '-lihattanggapan2.php';
      break;

      case '-lihattanggapan3';
      include '-lihattanggapan3.php';
      break;

      case 'preview_tanggapan_c';
      include 'preview_tanggapan_c.php';
      break;

      case '-lihat_pengaduan';
      include '-lihat_pengaduan.php';
      break;

      case 'simpan_masyarakat';
      include 'simpan_masyarakat.php';
      break;

      case '_detailpengaduan';
      include '_detailpengaduan.php';
      break;

      case 'lihat_pengaduan';
      include 'lihat_pengaduan.php';
      break;

      case 'lihat_tanggapan-';
      include 'lihat_tanggapan-.php';
      break;

      case '_detailpengaduanselesai';
      include '_detailpengaduanselesai.php';
      break;



    }
}
else
{
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
                  <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek; ?> Laporan Yang Harus Diverifikasi</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-comments fa-4x text-success-300"></i>
                  <a href="?url=verifikasi_pengaduan"><span class="badge badge-danger badge-counter"><?php echo $cek; ?></span></a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

 <div class="col-xl-6 col-md-6 mb-4">
          <div class="card border-left-dark shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laporan Pengaduan : </div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek1; ?> Laporan Yang Harus Ditanggapi</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-comments fa-4x text-success-300"></i>
                  <a href="?url=verifikasi_tanggapan"><span class="badge badge-danger badge-counter"><?php echo $cek1; ?></span></a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

<?php
} }
?>
</b></h2>