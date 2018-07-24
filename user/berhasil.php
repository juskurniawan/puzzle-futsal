
<?php
require("../config.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>Puzzle Futsal</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'> 
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
          <li><a href="index.php?page=entry&amp;cat=1">Booking Lapangan</a></li>
          <li><a href="index.php?page=entry&amp;cat=2">Data Booking</a></li>
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
                        <h3 class="panel-title">Data Penyewaan Lapangan </h3> 
                        </div>




<table align="center" width="70%" border="1" cellspacing="2" cellpadding="2">
  <tr>
    <td align="center" bgcolor="#003399">Selamat Anda telah booking lapangan!<br>
	Silahkan Upload Struk Pembayaran<br>
	<a href="index.php">Kembali</a></td>
   
   
    
    
  </tr>
  
  
 
</table>



	  
	  
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>