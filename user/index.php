<?php
session_start();
if (empty($_SESSION['username'])){
	header('location:../login-user.php');	
} else {
	include "../conn.php";
	$username=$_SESSION['username'];
	$password=$_SESSION['password'];
	$id_member=$_SESSION['id_member'];
	$nama_lengkap=$_SESSION['nama_lengkap'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Puzzle Futsal</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-home"></i> <span>Puzzle Futsal</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="bola.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2>
				<?php
              echo $_SESSION['nama_lengkap'];
}
               ?>
				</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3></h3>
                <ul class="nav side-menu">
				<li>
                  <a href="index.php"><i class="fa fa-home"></i> Home</a>
				  
                    </li>
                  
                  <li><a><i class="fa fa-edit"></i>Booking<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="booking.php">Booking Lapangan</a></li>
                      <li><a href="databooking.php?hal=databooking&id_member=<?php echo $id_member=$_SESSION['id_member']; ?>">Data Booking</a></li>
                    
                    </ul>
                  </li>
                  <!--<li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_elements.html">General Elements</a></li>
                      <li><a href="media_gallery.html">Media Gallery</a></li>
                      <li><a href="typography.html">Typography</a></li>
                      <li><a href="icons.html">Icons</a></li>
                      <li><a href="glyphicons.html">Glyphicons</a></li>
                      <li><a href="widgets.html">Widgets</a></li>
                      <li><a href="invoice.html">Invoice</a></li>
                      <li><a href="inbox.html">Inbox</a></li>
                      <li><a href="calendar.html">Calendar</a></li>
                    </ul>
                  </li>-->
				  
                  <!--<li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Tables</a></li>
                      <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                    </ul>
                  </li>-->
				  
                  <!--<li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Chart JS</a></li>
                      <li><a href="chartjs2.html">Chart JS2</a></li>
                      <li><a href="morisjs.html">Moris JS</a></li>
                      <li><a href="echarts.html">ECharts</a></li>
                      <li><a href="other_charts.html">Other Charts</a></li>
                    </ul>
                  </li>-->
				  
                  <!--<li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                      <li><a href="fixed_footer.html">Fixed Footer</a></li>
                    </ul>
                  </li>-->
                </ul>
              </div>
              <!--<div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>-->

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!--<div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>-->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="gambar/bola.png" alt="">
					<?php
					 echo $_SESSION['nama_lengkap'];
					 ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="logout-user.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <!--<li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>-->
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <?php


$query = mysql_query("SELECT * FROM jadwalhari");
$query1 = mysql_query("SELECT * FROM jadwaljam");
?>



        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Jadwal Penggunaan Lapangan</h3>
              </div>

             
              </div>
            </div>
           
            <div class="row">
               
                  
                  <div class="x_content">

                   <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <div class="clearfix"></div>
                  </div>

                    <table class="table table-bordered">
                      <thead>
                       <tr>
						<td>Jam</td>
        <?php while ($kolom = mysql_fetch_array($query)) { ?>
            <td><?php echo $kolom['hari']; ?></td>
        <?php } ?>
    </tr>
    <?php
    mysql_data_seek($query1, 0);
    while ($baris = mysql_fetch_array($query1))
        ?>
        <tr>
	<td>07-08</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='senin' && jadwaljam='7'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
 
 
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='selasa' && jadwaljam='7'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='rabu' && jadwaljam='7'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='kamis' && jadwaljam='7'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='jumat' && jadwaljam='7'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='sabtu' && jadwaljam='7'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='minggu' && jadwaljam='7'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		
		</td>
		</tr>
		
		<tr>
	<td>08-09</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='senin' && jadwaljam='8'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
 
?>
		
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='selasa' && jadwaljam='8'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='rabu' && jadwaljam='8'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
</td>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='kamis' && jadwaljam='8'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
</td>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='jumat' && jadwaljam='8'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='sabtu' && jadwaljam='8'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='minggu' && jadwaljam='8'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		</tr>
		
		<tr>
	<td>09-10</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='senin' && jadwaljam='9'");
$barisj = mysql_fetch_array($queryj);
        echo $barisj['team'];  
 

?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='selasa' && jadwaljam='9'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='rabu' && jadwaljam='9'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='kamis' && jadwaljam='9'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='jumat' && jadwaljam='9'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='sabtu' && jadwaljam='9'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='minggu' && jadwaljam='9'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		</tr>
		
				<tr>
	<td>10-11</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='senin' && jadwaljam='10'");
$barisj = mysql_fetch_array($queryj);
 echo $barisj['team'];
 
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='selasa' && jadwaljam='10'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='rabu' && jadwaljam='10'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='kamis' && jadwaljam='10'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='jumat' && jadwaljam='10'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='sabtu' && jadwaljam='10'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='minggu' && jadwaljam='10'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		</tr>
		
				<tr>
	<td>11-12</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='senin' && jadwaljam='11' or jamakr='11'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='selasa' && jadwaljam='11'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='rabu' && jadwaljam='11'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='kamis' && jadwaljam='11'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='jumat' && jadwaljam='11'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='sabtu' && jadwaljam='11'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='minggu' && jadwaljam='11'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		</tr>
		
				<tr>
	<td>12-13</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='senin' && jadwaljam='12'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='selasa' && jadwaljam='12'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='rabu' && jadwaljam='12'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='kamis' && jadwaljam='12'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='jumat' && jadwaljam='12'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='sabtu' && jadwaljam='12'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='minggu' && jadwaljam='12'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		</tr>
		
				<tr>
	<td>13-14</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='senin' && jadwaljam='13'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='selasa' && jadwaljam='13'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='rabu' && jadwaljam='13'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='kamis' && jadwaljam='13'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='jumat' && jadwaljam='13'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='sabtu' && jadwaljam='13'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='minggu' && jadwaljam='13'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		</tr>
		
				<tr>
	<td>14-15</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='senin' && jadwaljam='14'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='selasa' && jadwaljam='14'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='rabu' && jadwaljam='14'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='kamis' && jadwaljam='14'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='jumat' && jadwaljam='14'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='sabtu' && jadwaljam='14'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='minggu' && jadwaljam='14'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		</tr>
		
				<tr>
	<td>15-16</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='senin' && jadwaljam='15'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='selasa' && jadwaljam='15'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='rabu' && jadwaljam='15'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='kamis' && jadwaljam='15'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='jumat' && jadwaljam='15'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='sabtu' && jadwaljam='15'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='minggu' && jadwaljam='15'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		</tr>
		
				<tr>
	<td>16-17</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='senin' && jadwaljam='16'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='selasa' && jadwaljam='16'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='rabu' && jadwaljam='16'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='kamis' && jadwaljam='16'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='jumat' && jadwaljam='16'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='sabtu' && jadwaljam='16'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='minggu' && jadwaljam='16'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		</tr>
		
		
				<tr>
	<td>17-18</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='senin' && jadwaljam='17'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='selasa' && jadwaljam='17'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='rabu' && jadwaljam='17'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='kamis' && jadwaljam='17'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='jumat' && jadwaljam='17'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='sabtu' && jadwaljam='17'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='minggu' && jadwaljam='17'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		</tr>
		
				<tr>
	<td>18-19</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='senin' && jadwaljam='18'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='selasa' && jadwaljam='18'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='rabu' && jadwaljam='18'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='kamis' && jadwaljam='18'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='jumat' && jadwaljam='18'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='sabtu' && jadwaljam='18'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='minggu' && jadwaljam='18'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		</tr>
		
				<tr>
	<td>19-20</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='senin' && jadwaljam='19'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='selasa' && jadwaljam='19'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='rabu' && jadwaljam='19'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='kamis' && jadwaljam='19'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='jumat' && jadwaljam='19'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='sabtu' && jadwaljam='19'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='minggu' && jadwaljam='19'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		</tr>
		
				<tr>
	<td>20-21</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='senin' && jadwaljam='20'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='selasa' && jadwaljam='20'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='rabu' && jadwaljam='20'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='kamis' && jadwaljam='20'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='jumat' && jadwaljam='20'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='sabtu' && jadwaljam='20'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='minggu' && jadwaljam='20'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		</tr>
		
				<tr>
	<td>21-22</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='senin' && jadwaljam='21'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='selasa' && jadwaljam='21'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='rabu' && jadwaljam='21'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='kamis' && jadwaljam='21'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='jumat' && jadwaljam='21'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='sabtu' && jadwaljam='21'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		<td>
		<?php


$queryj = mysql_query("SELECT * FROM jadwal where jadwalhari='minggu' && jadwaljam='21'");
$barisj = mysql_fetch_array($queryj);
echo $barisj['team'];
?>
		</td>
		</tr>
	
    
                      </thead>
                      <tbody>
					  
					  
                      
		
		
		
		
		
	
		
		</tr>
    
	
                      
                      </tbody>
                    </table>

                </div>
              </div>
					
		

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  
                </div>
              </div>
            </div>
					


				
                
           
                    

    
                
              </div>
            </div>
			
			
			

         
        <!-- /page content -->

        <!-- footer content -->
        
        <!-- /footer content -->
      </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
