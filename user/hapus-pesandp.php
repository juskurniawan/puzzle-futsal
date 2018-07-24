<?php
include "../conn.php";
$np = $_GET['id_pemesanan'];

$query = mysql_query("DELETE FROM pesandp WHERE id_pemesanan='$np'");
$querys = mysql_query("select * FROM pesandp WHERE id_pemesanan='$np'");

$data=mysql_fetch_array($querys);

if ($query){
	echo "<script>alert('Data Berhasil dihapus!')</script>" ;
	?>
	<a href="index.php">Kembali</a>
	<?php
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'datasewalapang.php'</script>";	
}
?>