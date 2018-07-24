<?php
include "../conn.php";
$id_member = $_GET['id_member'];

$query = mysql_query("DELETE FROM users WHERE id_member='$id_member'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'index.php?page=entry&cat=2'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'index.php?page=entry&cat=2'</script>";	
}
?>