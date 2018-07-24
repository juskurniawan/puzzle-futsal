<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">

<?php

//koneksi ke database
include "../conn.php";
$id_pemesanan=$_POST['id_pemesanan'];
$tgl=$_POST['tgl'];
$namafile= $_FILES['filegbr']['name'];
$namafolder="../user/gambar/"; //folder tempat menyimpan file
if (!empty($_FILES["filegbr"]["tmp_name"]))
{
$jenis_gambar=$_FILES['filegbr']['type']; //memeriksa format gambar
if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
{
$lampiran = $namafolder . basename($namafile);

//mengupload gambar dan update row table database dengan path folder dan nama image
if (move_uploaded_file($_FILES['filegbr']['tmp_name'], $lampiran))
{

$query_insert = "UPDATE pesandp set struk='$namafile',ketstruk='Upload Berhasil', ststruk='Sudah Upload' , tgl='$tgl' where id_pemesanan='$id_pemesanan'";

$insert = mysql_query($query_insert);
echo 'Upload Berhasil!';
header('location:index.php');

} else {
echo "Gambar gagal dikirim";
}
} else {
echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
}
} else {
echo "Anda belum memilih gambar";
}
?>

</div>
<div class="col-md-4"></div>
</div>

</body>
</html>

<!--<form enctype="multipart/form-data" action="" method="POST">
	Pilih File : <input name="kttp" type="file" /><br />
	<input type="submit" value="Upload File" name="btn" />
	</form>


include "../conn.php";
$np = $_POST['np'];
$ktp = $_POST['ktp'];
$namafolder="gambar/"; //tempat menyimpan file
echo $np;

if (!empty($_FILES["ktp"]["tmp_name"]))
{
 $jenis_gambar=$_FILES['ktp']['type'];
 
 if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
 {   
  $gambar = $namafolder . basename($_FILES['ktp']['name']);  
  if (move_uploaded_file($_FILES['ktp']['tmp_name'], $gambar)) {
   $sql="update csiswa set ktp='$ktp' where np='$np')";
   $res=mysql_query($sql) or die (mysql_error());
   echo "Gambar berhasil dikirim ".$gambar; 
   echo "<p><img src=\"$gambar\" width=\"200\"/></p>";     
  } else {
     echo "<p>Gambar gagal dikirim</p>";
  }
   } else {
  echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
   }
} else {
 echo "Anda belum memilih gambar";
}
?>

-->

<!--
php
$namafolder="gambar/"; //tempat menyimpan file
include "../conn.php";


if (!empty($_FILES["nama_file"]["tmp_name"])){
$jenis_gambar=$_FILES['nama_file']['type'];




if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
	{echo "bingo";
		
   } else {
		echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
   }
} else {
	echo "Anda belum memilih gambar";
}




?

$namafolder="gambar_guru/"; //tempat menyimpan file
/*
$con=mysql_connect("localhost","root","") or die("Gagal");
mysql_select_db("ecommerce")  or die("Gagal");*/
include "../conn.php";

if (!empty($_FILES["nama_file"]["tmp_name"]))
{
	$jenis_gambar=$_FILES['nama_file']['type'];
        $kode_guru = $_POST['kode_guru'];
		$nip= $_POST['nip'];
		$nama_guru=$_POST['nama_guru'];
        $kelamin=$_POST['kelamin'];
        $alamat=$_POST['alamat'];
        $no_telepon=$_POST['no_telepon'];
        $status_aktif=$_POST['status_aktif'];
        $username=$_POST['username'];
        $password=$_POST['password'];
		
	if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
	{			
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);		
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
			$sql="INSERT INTO guru(kode_guru,nip,nama_guru,kelamin,alamat,no_telepon,status_aktif,username,password,gambar) VALUES
            ('$kode_guru','$nip','$nama_guru','$kelamin','$alamat','$no_telepon','$status_aktif','$username','$password','$gambar')";
			$res=mysql_query($sql) or die (mysql_error());
			echo "Gambar berhasil dikirim ke direktori".$gambar;
		/**	echo "<p>User Id  : $user_id</p>";
            echo "<p>Username : $username</p>";
            echo "<p>Password : $password</p>";
            echo "<p>Fullname : $fullname</p>";
            echo "<p>Gambar   : $gambar</p>";**/
            echo "<h3>Gambar Berhasil Di Input <a href='input-guru.php'> Input Lagi</a></h3>";	   
		} else {
		   echo "<p>Gambar gagal dikirim</p>";
		}
   } else {
		echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
   }
} else {
	echo "Anda belum memilih gambar";
}

/*include "../conn.php";
$user_id  = $_POST['user_id'];
$username = $_POST['username'];
$password = $_POST['password'];
$fullname = $_POST['fullname'];

$query = mysql_query("INSERT INTO admin (user_id, username, password, fullname) VALUES ('$user_id', '$username', '$password', '$fullname')");
if ($query){
	echo "<script>alert('Data Admin Berhasil dimasukan!'); window.location = 'admin.php'</script>";	
} else {
	echo "<script>alert('Data Admin Gagal dimasukan!'); window.location = 'admin.php'</script>";	
}*/


?>
