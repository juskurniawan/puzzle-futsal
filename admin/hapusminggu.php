<?php
include "../conn.php";

$query = mysql_query("DELETE FROM jadwal WHERE jadwalhari='minggu'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'index.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'index.php'</script>";	
}
?>