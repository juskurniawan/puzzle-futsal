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
    <meta name="description" content="Sistem Informasi Penilaian Siswa">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>SEKOLAH DASAR NEGERI 09 CIBIRU</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

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
              
              	  <p class="centered"><a href="profile.html"><img src="gambar_siswa/7.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">
              <?php
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
          	<h3><i class="fa fa-angle-right"></i> Pembayaran</h3>
          	<!--<div class="row mt">
              <div class="col-lg-4">
              <form action='guru.php' method="POST">
          
	       <input type='text' class="form-control" style="margin-bottom: 4px;" name='qcari' placeholder='Cari berdasarkan User ID dan Username' required /> 
           <input type='submit' value='Cari Data' class="btn btn-sm btn-primary" /> <a href='guru.php' class="btn btn-sm btn-success" >Refresh</i></a>
          	</div>
              </div>-->
              <br>
              <!-- BASIC FORM ELELEMNTS -->
			  <div class="row mt">
              <div class="col-lg-4">
              <form action='bagikelasdata.php' method="POST">
          
	       <input type='text' class="form-control" style="margin-bottom: 4px;" name='qcari' placeholder='Cari berdasarkan Nama' required /> 
           <input type='submit' value='Cari Data' class="btn btn-sm btn-primary" /> <a href='bagikelasdata.php' class="btn btn-sm btn-success" >Refresh</i></a>
		   </form>
          	</div>
              </div>
          	<div class="row mt">
          		<div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                        <h3 class="panel-title">Data Pembagian Kelas</h3> 
                        </div>
                        <div class="panel-body">
                        <div class="table-responsive">
						
                    <?php
                    $query1="select * from databagikelas";
                    
                    if(isset($_POST['qcari'])){
	               $qcari=$_POST['qcari'];
	               $query1="SELECT * FROM  databagikelas
	               where no like '%$qcari%'
	               or np like '%$qcari%' ";
                    }
                    $tampil=mysql_query($query1) or die(mysql_error());
                    ?>
                  <table class="table table-bordered table-hover table-striped tablesorter">
                  
                      <tr>
						<th>No. </th>
						<th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Rombongan Belajar</th>
                       
						
                       
                      </tr>
                     <?php while($data=mysql_fetch_array($tampil))
                    { ?>
                    
                    <td><?php echo $data['no']; ?></td>
					<td><?php 
					$queryo = "SELECT*FROM csiswa1 WHERE csiswa1.np='$data[np]'";
			$resulto= mysql_query ($queryo);
			$counto = mysql_num_rows($resulto);
			while($dato=mysql_fetch_array($resulto))
			{
			echo $dato['nis'];} ?></td>
                   <td><?php 
					$queryi = "SELECT*FROM csiswa1 WHERE csiswa1.np='$data[np]'";
			$resulti = mysql_query ($queryi);
			$counti = mysql_num_rows($resulti);
			while($dati=mysql_fetch_array($resulti))
			{
			echo $dati['namalengkap'];} ?></td>
					<td><?php 
					$queryu = "SELECT*FROM csiswa1 WHERE csiswa1.np='$data[np]'";
			$resultu = mysql_query ($queryu);
			$countu = mysql_num_rows($resultu);
			while($datu=mysql_fetch_array($resultu))
			{
			echo $data['rombel'];} ?></td>
					
					
							  
					
                   
                    </tr>
                 <?php   
              } 
              ?>
                   </tbody>
                   </table>
                   </div>
				   
                <div class="text-right">
				
              
                </div>
              </div> 
              </div>
            </div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="assets/js/jquery.tagsinput.js"></script>
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	
	<script src="assets/js/form-component.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
<!--<div class="col-sm-10">
                                  <select name="kode_item" id="kode_item"  class="form-control" required />
                                    <option>Pilih Item</option>
                                    ?php
                                    $eskiel = mysql_query("SELECT * FROM item ORDER BY kode_item ASC");
                                    if(mysql_num_rows($eskiel) != 0){
                                    while($dataku = mysql_fetch_assoc($eskiel)){
                                    echo '<option value='.$dataku['kode_item'].'>'.$dataku['nama_item'].'</option>'; 
                                    }}
                                    ?>
                                  </select>
                              </div>