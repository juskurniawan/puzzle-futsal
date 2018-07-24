<?php 
session_start();
if (empty($_SESSION['username'])){
	header('location:../index.php');	
} else {
	include "../conn.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>SEKOLAH DASAR NEGERI 09 CIBIRU</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="glyphicon glyphicon-home" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.php" class="logo"><b>SEKOLAH DASAR NEGERI 09 CIBIRU</b></a>
            <!--logo end-->
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="../logout.php" onclick="return confirm('Apakah anda akan keluar?');">Keluar</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
					
              
              	  <p class="centered"><a><img src="gambar_siswa/7.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php
              echo $_SESSION['fullname'];
               ?></h5>
              	  	<?php
$timeout = 1000; // Set timeout minutes
$logout_redirect_url = "../index.php"; // Set logout URL

$timeout = $timeout * 60; // Converts minutes to seconds
if (isset($_SESSION['start_time'])) {
    $elapsed_time = time() - $_SESSION['start_time'];
    if ($elapsed_time >= $timeout) {
        session_destroy();
        echo "<script>alert('Session Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
    }
}
$_SESSION['start_time'] = time();
?>
<?php } ?>
                  <?php include 'menu.php'; ?>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
	  
	  
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                   
                  	<!-- /row mt -->	
                    				
                    <div class="row">
						<!-- PELANGGAN -->
					<div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                        <h3 class="panel-title">Data Siswa</h3> 
                        </div>
                        <div class="panel-body">
                        <div class="table-responsive">
                    <?php
                    $tampil=mysql_query("select * from csiswa1 where statusdaftar='Diterima'order by np asc");
                    ?>
					
                  <table class="table table-bordered table-hover table-striped tablesorter">
                  
                      <tr>
						<th>No. </th>
						<td>NIS</td>
                        <th>Nama Siswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Pilih Rombongan Belajar</th>
						
						
                       
                      </tr>
                     <?php 
					
            
        $no=0;
        while($data=mysql_fetch_array($tampil))
        
        {
            $no++;
					  ?>
                    <tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $data['nis']; ?></td>
					
					
                    <td><?php echo $data['namalengkap']; ?></td>
                    <td><?php echo $data['jk'];?></td>
                    
			  <td>
			 <a class="btn btn-sm btn-primary tooltips" data-placement="bottom" href="input-bagikelass.php?hal=input-bagikelass&kd=<?php echo $data['np'];?>">Pilih</a>
			  </td>
			        <?php   
              }
              ?>
                   </body>
                   
                   </table>
				    
				    
				 
                   </div>
				  
                <!--<div class="text-right">
                  <a href="input-produk.php" class="btn btn-sm btn-warning">Tambah Produk <i class="fa fa-arrow-circle-right"></i></a>
                </div>-->
              </div> 
              </div>
            </div><!-- col-lg-12-->
                                        		
					</div><!-- /row -->
					
					
					
					
					<div class="row mt">
              <div class="col-lg-4">
              <form action='bagikelas.php' method="POST">
          
	       <input type='text' class="form-control" style="margin-bottom: 4px;" name='qcari' placeholder='Cari berdasarkan Nama' required /> 
           <input type='submit' value='Cari Data' class="btn btn-sm btn-primary" /> <a href='bagikelas.php' class="btn btn-sm btn-success" >Refresh</i></a>
		   </form>
          	</div>
              </div>
          	
						
                    <?php
                    $query1="select * from databagikelas";
                    
                    if(isset($_POST['qcari'])){
	               $qcari=$_POST['qcari'];
	               $query1="SELECT * FROM  databagikelas
	               where no like '%$qcari%'
	               or np like '%$qcari%' ";
                    }
                    $tampils=mysql_query($query1) or die(mysql_error());
                    ?>
					
					
					
					
					
					
					
					
					
					<div class="row mt">
					    <div class="row">
						<!-- PELANGGAN -->
					<div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                        <h3 class="panel-title">Data Siswa</h3> 
                        </div>
                        <div class="panel-body">
                        <div class="table-responsive">
                    <?php
                    $tampil=mysql_query("select * from databagikelas order by no asc");
                    ?>
					
                  <table class="table table-bordered table-hover table-striped tablesorter">
                  
                      <tr>
						<th>No. </th>
						<th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Rombongan Belajar</th>
                        <th>Tools</th>
						
						
                       
                      </tr>
                     <?php 
					
            
        $no=0;
        while($data=mysql_fetch_array($tampil))
        
        {
            $no++;
					  ?>
                    <tr>
					<td><?php echo $no; ?></td>
					<td><?php 
			$query1 = mysql_query("SELECT * FROM csiswa1 WHERE np='$data[np]'");
            $data1  = mysql_fetch_array($query1);
			echo $data1['nis']; ?></td>
                    <td><?php echo $data1['namalengkap']; ?></td>
                    <td><?php echo $data['rombel'];?></td>
                    
			  <td>
			 
			 <a class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-original-title="Hapus Siswa" href="hapus-siswabagikelas.php?hal=hapus-siswabagikelas&no=<?php echo $data['no']; ?>">Hapus</a>
			  </td>
			        <?php   
              }
              ?>
                   </body>
                   
                   </table>
				   
				   <div class="text-right">
                  <a href="input-cetakabsen.php" class="btn btn-sm btn-warning">Cetak Absensi<i class="fa fa-arrow-circle-right"></i></a>
              
                </div>
				    
				    
				 
                   </div>
				  
                <!--<div class="text-right">
                  <a href="input-produk.php" class="btn btn-sm btn-warning">Tambah Produk <i class="fa fa-arrow-circle-right"></i></a>
                </div>-->
              </div> 
              </div>
            </div><!-- col-lg-12-->
                                        		
					</div>
                      <!--CUSTOM CHART START -->
                      <div class="border-head">
                          
                      </div>
					  
                      <!--<div class="custom-bar-chart">
                          <ul class="y-axis">
                              <li><span>10.000</span></li>
                              <li><span>8.000</span></li>
                              <li><span>6.000</span></li>
                              <li><span>4.000</span></li>
                              <li><span>2.000</span></li>
                              <li><span>0</span></li>
                          </ul>
                          <div class="bar">
                              <div class="title">JAN</div>
                              <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">FEB</div>
                              <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">MAR</div>
                              <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">APR</div>
                              <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                          </div>
                          <div class="bar">
                              <div class="title">MAY</div>
                              <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">JUN</div>
                              <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                          </div>
                          <div class="bar">
                              <div class="title">JUL</div>
                              <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                          </div>
                      </div>
                      <!--custom chart end-->
					</div><!-- /row -->	
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
    
      <!--main content end-->
      <!--footer start-->
      <!--footer end-->
  </section>
  
  

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	
	
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
