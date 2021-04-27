<?php
require 'koneksi.php';
$nama=$_POST['nama_petugas'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];
$lvl=$_POST['level'];

$sql=mysql_query("insert into petugas values($nama','$user','$pass','$telp','$lvl')");
if($sql)
{
    ?>
    <script type="text/javascript">
    alert('Data Berhasil di Simpan, Silahkan Gunakan Untuk Login');
    window.location="index2.php";
    </script>
<?php   
}
?>
