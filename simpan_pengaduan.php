<?php
require 'koneksi.php';
$tgl=date('Y/m/d');

$kt=$_POST['kategori'];
$nik=$_POST['nik'];
$isi=$_POST['isi_pengaduan'];
$ft=$_FILES['foto']['name'];
$file=$_FILES['foto']['tmp_name'];
$st='belum diproses';

$sql=mysql_query("insert into pengaduan(kategori,tgl_pengaduan,nik,isi_pengaduan,foto,status) values('$kt','$tgl','$nik', '$isi', '$ft', '$st')" );
move_uploaded_file($file, "foto/".$ft);

if ($sql)
{
    ?>
    <script type="text/javascript">
     alert('Data Berhasil disimpan, Terima kasih sudah menulis laporan');
     window.location="masyarakat.php";
    </script>
<?php
}
?>
