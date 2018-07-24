
<?php
require("../config.php");
if(isset($_POST['id_member'])){

                                $username=addslashes($_POST['username']);
								$tgldp=addslashes($_POST['tgldp']);
								$jamdp=addslashes($_POST['jamdp']);
								$id_member=addslashes($_POST['id_member']);
								
								
                                
                                mysql_query("insert into pesandp values('','$username','$tgldp','$jamdp','','','$id_member','')");
                                header("location:./berhasil.php");

                  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Puzzle Futsal</title>
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #000;
}
a:link {
	color: #FFF;
	text-decoration: none;
}
a:visited {
	color: #FFF;
	text-decoration: none;
}
a:hover {
	color: #F00;
	text-decoration: none;
}
a:active {
	color: #FFF;
	text-decoration: none;
}
body,td,th {
	color: #FFF;
	font-family: Verdana, Geneva, sans-serif;
}
</style>
</head>

<body>
<?php


$sql="Select * from pesandp where id_member='$_GET[id_member]'";
$result2 = mysql_query($sql) or die ('Error: '.mysql_error ());
	 while ($row2 = mysql_fetch_array($result2)) {
?>
<table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td colspan="2" align="left" valign="top"><img src="../images/logo1.png" width="176" height="98" /></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top">
	<ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a href="index.php">Home</a>        </li>
      <li><a href="#" class="MenuBarItemSubmenu">Booking</a>
        <ul>
          <li>
		  <a class="btn btn-sm btn-primary tooltips" data-placement="bottom" data-original-title="Booking" href="booking.php?hal=booking&id_member=<?php echo $row2['id_member']; ?>">Booking Lapangan</a></li>
          <li>
		  <a class="btn btn-sm btn-primary tooltips" data-placement="bottom" data-original-title="Riwayat" href="datasewalapang.php?hal=datasewalapang&id_member=<?php echo $row2['id_member']; ?>">Riwayat Penyewaan</a></li>
		</ul>
      </li>
      <!--<li><a class="MenuBarItemSubmenu" href="#">Laporan</a>
        <ul>
          <li><a href="index.php?page=report&amp;cat=1">Laporan Member</a></li>
          <li><a href="index.php?page=report&amp;cat=2">Laporan Sewa Booking</a></li>
          <li><a href="index.php?page=report&amp;cat=3">Laporan Sewa (Pelunasan)</a></li>
          <li><a href="index.php?page=report&amp;cat=4">Laporan Booking</a></li>
          <li><a href="index.php?page=report&amp;cat=5">Laporan Fasilitas</a></li>
		  <li><a href="index.php?page=report&amp;cat=6">Laporan Sewa Hari</a></li>
        </ul>
      </li>-->
	 
      <li><a href="#" class="MenuBarItemSubmenu">Keluar</a>
        <ul>
          <li><a href="logout.php">Exit</a></li>
        </ul>
      </li>
    </ul>
	</td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top">
	<table width="100%" border="0" cellspacing="4" cellpadding="4">
      <tr>
        <td>
        <?php
		
		if(isset($_GET['page']) && isset($_GET['cat']))
		{
			if($_GET['page']=="entry" && $_GET['cat']=="1")
			{
				include("booking.php");
			}
			if($_GET['page']=="entry" && $_GET['cat']=="2")
			{
				include("member.php");
			}
			if($_GET['page']=="report" && $_GET['cat']=="1")
			{
				include("repmember.php");
			}
			if($_GET['page']=="report" && $_GET['cat']=="2")
			{
				include("repsewabooking.php");
			}
			if($_GET['page']=="report" && $_GET['cat']=="3")
			{
				include("repsewabulan.php");
			}
			if($_GET['page']=="report" && $_GET['cat']=="4")
			{
				include("repbooking.php");
			}
			if($_GET['page']=="report" && $_GET['cat']=="5")
			{
				include("repfasilitas.php");
			}
			if($_GET['page']=="report" && $_GET['cat']=="6")
			{
				include("repsewahari.php");
			}
		}
		?>
        </td>
      </tr>
    </table>
	</td>
  </tr>
  <tr>
    <td width="23%" align="left" valign="top">&nbsp;</td>
    <td width="77%" align="left" valign="top">&nbsp;</td>
  </tr>
</table>

<div class="panel-heading">
                        <h3 class="panel-title">Data Penyewaan Lapangan Saya</h3> 
                        </div>
<?php


$sql="Select * from pesandp where id_member='$_GET[id_member]'";
?>
<table width="100%" border="1" cellspacing="2" cellpadding="2">
  <tr>
	<td bgcolor="#003399">Team</td>
    <td bgcolor="#003399">Tanggal</td>
    <td bgcolor="#003399">Dari Jam</td>
	<td bgcolor="#003399">Sampai Jam</td>
	<td bgcolor="#003399">Tools</td>
   
    
    
  </tr>
  <?php
  $result2 = mysql_query($sql) or die ('Error: '.mysql_error ());
	 while ($row2 = mysql_fetch_array($result2)) {
		 ?>
		
		 
  <tr>
    <td><?php echo $row2['username'];?></td>
    <td><?php echo $row2['tgldp'];?></td>
	<td><?php echo $row2['darijamdp'];?></td>
	<td><?php echo $row2['sampaijamdp'];?></td>
	 
	<td>
	<a href="bon.php?id_pemesanan=<?php echo $row2[0];  ?>">Cetak Bon</button></a>
	- 
	<a class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-original-title="Cancel" href="hapus-pesandp.php?hal=hapus&id_pemesanan=<?php echo $row2['id_pemesanan']; ?>">Cancel</a>
	-
	<a class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-original-title="Upload Struk Pembayaran" href="uploadstruk.php?hal=uploadstruk&id_pemesanan=<?php echo $row2['id_pemesanan']; ?>">Upload Struk</a>
	-
	<a class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-original-title="Upload Struk Pembayaran" href="lihatgambar.php?hal=lihatgambar&id_pemesanan=<?php echo $row2['id_pemesanan']; ?>">Lihat Struk</a>
	
	</td>
    
 <?php
	 }}
?>	   
	 
  </tr>
  
  </table>


 
	  
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>