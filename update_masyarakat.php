<?php
require 'koneksi.php';
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];

$sql=mysql_query("update masyarakat set nama='$nama', username='$user', password='$pass', telp='$telp' where nik='$nik' ");

if ($sql)
{
 ?>
 <script type="text/javascript">
    alert ('Data Berhasil Diubah');
    window.location='masyarakat.php';
 </script>
 <?php
}
?>