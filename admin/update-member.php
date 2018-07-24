<?php
include "../conn.php";
$id_member = $_POST['id_member'];
$username = $_POST['username'];
$password       = $_POST['password'];
$nama_lengkap       = $_POST['nama_lengkap'];
$no_telp   	   = $_POST['no_telp'];



$query = mysql_query("UPDATE users SET username='$username', password='$password', nama_lengkap='$nama_lengkap', no_telp='$no_telp' WHERE id_member='$id_member'")or die(mysql_error());
if ($query){
header('location:index.php');	
} else {
	echo "gagal";
    }
?>