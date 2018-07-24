<?php
include "../conn.php";

$team   = $_POST['team'];
$tgldp   = $_POST['tgldp'];
$darijamdp   = $_POST['darijamdp'];
$id_member   = $_POST['id_member'];
$sampaijamdp   = $_POST['sampaijamdp'];
$total = $_POST['total'];
$durasi = $_POST['durasi'];


//$query1=("select*from item where kode_item='$itembeli'"); 
//$result1 = mysql_query ($query1);
//$count1 = mysql_num_rows($result1);
//while($data1=mysql_fetch_array($result1))
	//		{$x=$data1['harga_item'];}
//$tgl=date('d-m-Y');



$sub_kalimat = substr($darijamdp,0,1);


?>
<?php 
$cek = mysqli_query($koneksi, "SELECT * FROM pesandp WHERE tgldp='$tgldp' and darijamdp='$darijamdp'");  
if(mysqli_num_rows($cek) == 0){
$query = mysql_query("INSERT INTO pesandp (id_pemesanan,team,tgldp,darijamdp,sampaijamdp,jumlahdp,ketdp,struk,ketstruk,ststruk,id_member,durasi, total ) VALUES 
                      ('','$team','$tgldp','$darijamdp','$sampaijamdp','Belum Melakukan Pembayaran','Belum Membayar DP','Belum Upload Struk','Belum Upload Struk','Belum Upload Struk','$id_member','$durasi','$total')");
if ($query){
	echo "<script>alert('Data Berhasil dimasukan!'); window.location = 'index.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dimasukan!'); window.location = 'index.php'</script>";	

}
} else{
          echo "<script>alert('Jadwal Sudah Terisi, Mohon Pilih Jadwal Yang Lain'); window.location = 'index.php'</script>";	
        }
      


?>