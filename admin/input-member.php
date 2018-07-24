<?php
session_start();
?>
<?php
require("cekses.php");
?>
<?php
require("../config.php");
if(isset($_POST['username'])){

                                $username=addslashes($_POST['username']);
								$password=addslashes($_POST['password']);
								$nama_lengkap=addslashes($_POST['nama_lengkap']);
								$email=addslashes($_POST['email']);
								$no_telp=addslashes($_POST['no_telp']);
								
                                
                                mysql_query("insert into users values('','$username','$password','$nama_lengkap','$email','$no_telp')");
                                header("location:./index.php?page=entry&cat=2");

                  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
      <li><a href="#" class="MenuBarItemSubmenu">Entry</a>
        <ul>
          <li><a href="index.php?page=entry&amp;cat=1">Fasilitas</a></li>
          <li><a href="index.php?page=entry&amp;cat=2">Data Member</a></li>
		</ul>
      </li>
      <li><a class="MenuBarItemSubmenu" href="#">Laporan</a>
        <ul>
          <li><a href="index.php?page=report&amp;cat=1">Laporan Member</a></li>
          <li><a href="index.php?page=report&amp;cat=2">Laporan Sewa Booking</a></li>
          <li><a href="index.php?page=report&amp;cat=3">Laporan Sewa (Pelunasan)</a></li>
          <li><a href="index.php?page=report&amp;cat=4">Laporan Booking</a></li>
          <li><a href="index.php?page=report&amp;cat=5">Laporan Fasilitas</a></li>
		  <li><a href="index.php?page=report&amp;cat=6">Laporan Sewa Hari</a></li>
        </ul>
      </li>
	 
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
				include("fasilitas.php");
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
  <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i></h3>
			
	
              <!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                        <h3 class="panel-title">Input Member</h3> 
                        </div>
                        <div class="panel-body">
                        <div class="table-responsive">
                  <form method="post">
                  <table class="table table-responsive table-bordered table-hover table-striped tablesorter">
                  
				
				  <tr>
						<th width="25%" align="left">Username</th>
						<td width="1%"> : </td>
						<td>
						<input id="username" name="username" placeholder="Username" class="form-control" type="text" required style="color:magenta">
						</td>
				  </tr>
				  <tr>
						<th width="25%" align="left">Password</th>
						<td width="1%"> : </td>
						<td>
						<input id="password" name="password" placeholder="Password" class="form-control" type="text" required style="color:magenta">
						</td>
				  </tr>
				  <tr>
						<th width="25%" align="left">Nama Lengkap</th>
						<td width="1%"> : </td>
						<td>
						<input id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" class="form-control" type="text" required style="color:magenta">
						</td>
				  </tr>
				  <tr>
						<th width="25%" align="left">Email</th>
						<td width="1%"> : </td>
						<td>
						<input id="email" name="email" placeholder="Email" class="form-control" type="text" required style="color:magenta">
						</td>
				  </tr>
				  <tr>
						<th width="25%" align="left">No. Telepon</th>
						<td width="1%"> : </td>
						<td>
						<input id="no_telp" name="no_telp" placeholder="Nomor Telepon" class="form-control" type="text" required style="color:magenta">
						</td>
				  </tr>
				  
				  
				 
				 
				 
				 
                   
                   </tbody>
                   </table>
                   </div>
                <div>
        <button type="submit" class="btn btn-primary" id="simpan">Simpan</button>
						</div>
						</form>
              </div> 
              
            </div><!-- col-lg-12-->	
          	</div><!-- /row -->
          	</div>
          	
		</section><! --/wrapper -->
      </section>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>