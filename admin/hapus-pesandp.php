<?php
include "../conn.php";
$np = $_GET['id_pemesanan'];

$query = mysql_query("DELETE FROM pesandp WHERE id_pemesanan='$np'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'index.php?page=report&cat=2'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'index.php?page=report&cat=2'</script>";	
}
?>