<?php
require 'koneksi.php';
$user=$_POST['username'];
$pass=$_POST['password'];
$sql=mysql_query("select * from masyarakat where username='$user' and password='$pass' ");
$sql1=mysql_query("select * from petugas where username='$user' and password='$pass' ");

$cek=mysql_num_rows($sql);
$cek1=mysql_num_rows($sql1);

    if ($cek>0)
    {
        $data=mysql_fetch_array($sql);
        session_start();
         $_SESSION['nama']=$user;
        $_SESSION['username']=$data['nama'];
        $_SESSION['nik']=$data['nik'];
        $_SESSION['password']=$data['password'];
        $_SESSION['telp']=$data['telp'];

        header('location:masyarakat.php');
    }
    else if ($cek1>0)
    {
        $data=mysql_fetch_array($sql1);
        if ($data['level']=="admin")
        {
        session_start();
        $_SESSION['id_petugas']=$data['id_petugas'];
        $_SESSION['user']=$user;
        $_SESSION['nama']=$data['nama_petugas'];
        $_SESSION['level']=$data['level'];

        header('location:admin/admin.php');
        }
        if ($data['level']=="petugas")
        {
        session_start();
        $_SESSION['id_petugas']=$data['id_petugas'];
        $_SESSION['user']=$user;
        $_SESSION['nama']=$data['nama_petugas'];
        $_SESSION['level']=$data['level'];

        header('location:petugas/petugas.php');
        }
    }

    else if($cek1>0)
    {
        $data=mysql_fetch_array($sql1);
        if ($data['level']=="petugas")
        {
        session_start();
        $_SESSION['id_petugas']=$data['id_petugas'];
        $_SESSION['user']=$user;
        $_SESSION['nama']=$data['nama_petugas'];
        $_SESSION['level']=$data['level'];

        header('localhost:petugas/petugas.php');
        }
    } else{

        ?>
        <script type="text/javascript">
        alert ('Username Atau Password tidak ditemukan');
        window.location="index.php";
        </script>

    
<?php
    }

    ?>