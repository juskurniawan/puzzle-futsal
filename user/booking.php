<?php
session_start();
if (empty($_SESSION['id_member'])){
	header('location:../login-user.php');	
} else {
	include "../conn.php";
$username=$_SESSION['username'];
$password=$_SESSION['password'];
$id_member=$_SESSION['id_member'];
$nama_lengkap=$_SESSION['nama_lengkap'];}
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
                <img src="gambar/bola.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2>
				<?php
              echo $_SESSION['nama_lengkap'];

               ?>
				</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
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
<?php


$query1 = mysql_query("SELECT * FROM pesandp WHERE id_member='$id_member'");
$data1  = mysql_fetch_array($query1);

?>
<?php
$query = mysql_query("SELECT * FROM users WHERE id_member='$id_member'");
$data  = mysql_fetch_array($query);
?>
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/bola.png" alt=""><?php
              echo $_SESSION['nama_lengkap'];

               ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    
                    
                    <li><a href="index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
<script type="text/javascript">
  function hitung_kontrak() {
var durasi = document.getElementById('durasi').value;
var total = document.getElementById('total').value;
var result = (parseInt(durasi)*120000);
if (!isNaN(result)){
  document.getElementById('total').value=result;
}
}
</script>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Input Data Booking</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Silahkan Booking....</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      
                      
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="transfer" name="transfer" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="insert-booking.php">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Team <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						  <input id="id_member" name="id_member" value="<?php echo $data['id_member'];?>" readonly required class="form-control" type="hidden" required style="color:magenta">
                          <input type="text" id="team" name="team" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						 
            <input type="date" id="tgldp" name="tgldp" required="required" class="form-control col-md-7 col-xs-12">
                          
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Durasi <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
             
            <input type="number" id="durasi" name="durasi" required="required" onkeyup="hitung_kontrak()" onkeydown="hitung_kontrak()" onchange="hitung_kontrak()" placeholder="silahkan masukan jumlah durasi booking" class="form-control col-md-7 col-xs-12">
                          
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Jam</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="darijamdp" name="darijamdp" class="control-label">
						<option value="7">7 Pagi</option>
						<option value="8">8 Pagi</option>
						<option value="9">9 Pagi</option>
						<option value="10">10 Pagi</option>
						<option value="11">11 Siang</option>
						<option value="12">12 Siang</option>
						<option value="13">1 Siang</option>
						<option value="14">2 Siang</option>
						<option value="15">3 Sore</option>
						<option value="16">4 Sore</option>
						<option value="17">5 Sore</option>
						<option value="18">6 Sore</option>
						<option value="19">7 Malam</option>
						<option value="20">8 Malam</option>
						<option value="21">9 Malam</option>
						</select>
                       
                        <strong>Sampai</strong>
                         
                        <select id="sampaijamdp" name="sampaijamdp" class="control-label" >
            <option value="7">7 Pagi</option>
            <option value="8">8 Pagi</option>
            <option value="9">9 Pagi</option>
            <option value="10">10 Pagi</option>
            <option value="11">11 Siang</option>
            <option value="12">12 Siang</option>
            <option value="13">1 Siang</option>
            <option value="14">2 Siang</option>
            <option value="15">3 Sore</option>
            <option value="16">4 Sore</option>
            <option value="17">5 Sore</option>
            <option value="18">6 Sore</option>
            <option value="19">7 Malam</option>
            <option value="20">8 Malam</option>
            <option value="21">9 Malam</option>
            </select>
                        </div>
                      </div>
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Total Pembayaran <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
             
            <input type="text" id="total" name="total" onkeyup="hitung_kontrak()" onkeydown="hitung_kontrak()" onchange="hitung_kontrak()" class="form-control col-md-7 col-xs-12">
                          
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Dp Pembayaran <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
             
            <input type="text" id="total" name="total" value="25.000" readonly class="form-control col-md-7 col-xs-12">
                          
                        </div>
                      </div>
					 <!--<div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Sampai Jam</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="sampaijamdp" name="sampaijamdp"  class="form-control" required style="color:black" >
						<option value="8">8 Pagi</option>
						<option value="9">9 Pagi</option>
						<option value="10">10 Pagi</option>
						<option value="11">11 Siang</option>
						<option value="12">12 Siang</option>
						<option value="13">1 Siang</option>
						<option value="14">2 Siang</option>
						<option value="15">3 Sore</option>
						<option value="16">4 Sore</option>
						<option value="17">5 Sore</option>
						<option value="18">6 Sore</option>
						<option value="19">7 Malam</option>
						<option value="20">8 Malam</option>
						<option value="21">9 Malam</option>
						<option value="22">10 Malam</option>
						</select>
                        </div>
                      </div>-->
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

         
        <!-- /page content -->

        <!-- footer content -->
        
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
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
