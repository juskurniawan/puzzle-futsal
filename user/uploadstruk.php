
<?php
require("../config.php");

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


$sql="Select * from pesandp where id_pemesanan='$_GET[id_pemesanan]'";
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


<?php

	 }
$sql="Select * from pesandp where id_pemesanan='$_GET[id_pemesanan]'";
?>
     <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i></h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
            <?php
            $query = mysql_query("SELECT * FROM pesandp WHERE id_pemesanan='$_GET[id_pemesanan]'");
            $data  = mysql_fetch_array($query);
			
            ?>
			 
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>Upload Struk</h4>
                      <form class="form-horizontal style-form" action="update-struk.php" enctype="multipart/form-data" method="post" name="form1" id="form1">
					 <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <input name="id_pemesanan" type="hidden" id="id_pemesanan" class="form-control" value="<?php echo $data['id_pemesanan'];?>"readonly="readonly" required />
                              </div>
                          </div>
                         
                         
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Gambar</label>
                              <div class="col-sm-10">
                                  <input name="filegbr" id="filegbr" type="file" />
                              </div>
                          </div>
                          
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <input type="submit" value="Simpan Data"  name="submit" class="btn btn-sm btn-primary"/>&nbsp;
	                              <a href="index.php" class="btn btn-sm btn-danger">Batal </a>
                              </div>
                          </div>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	
          	
		</section><! --/wrapper -->
      </section>




 
	  
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>