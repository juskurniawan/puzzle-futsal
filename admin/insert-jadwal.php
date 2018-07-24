<?php
include "../conn.php";

$team   = $_POST['team'];
$tgldp   = $_POST['tgldp'];
$darijamdp   = $_POST['darijamdp'];
$jamakr   = $_POST['jamakr'];



//$query1=("select*from item where kode_item='$itembeli'"); 
//$result1 = mysql_query ($query1);
//$count1 = mysql_num_rows($result1);
//while($data1=mysql_fetch_array($result1))
	//		{$x=$data1['harga_item'];}
//$tgl=date('d-m-Y');
?>
<?php    
$query = mysql_query("INSERT INTO jadwal (id_jadwal,jadwalhari,jadwaljam,team,jamakr) VALUES 
                      ('','$tgldp','$darijamdp','$team','$jamakr')");
if ($query){
	echo "<script>alert('Data Berhasil dimasukan!'); window.location = 'index.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dimasukan!'); window.location = 'index.php'</script>";	

}
?>