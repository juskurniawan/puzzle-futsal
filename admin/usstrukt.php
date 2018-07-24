<?php
include "../conn.php";
$id_pemesanan = $_GET['id_pemesanan'];

$query = mysql_query("update pesandp set ststruk='Struk Tidak Valid' WHERE id_pemesanan='$id_pemesanan'");
if ($query){
	echo "<script>alert('Data Berhasil disimpan!'); window.location = 'booking.php'</script>";	
} else {
	echo "<script>alert('Data Gagal disimpan!'); window.location = 'booking.php'</script>";	
}
?>