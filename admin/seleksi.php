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

    <title>SEKOLAH DASAR NEGERI CIBIRU 09</title>

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
            <a href="index.php" class="logo"><b>SEKOLAH DASAR NEGERI CIBIRU 09</b></a>
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
	 <script type="text/javascript">
    $(document).ready(function(){
        
    $("body").on("click", "#tambah",function(e){
        $('#area-loading').html(''); 
        $("#np").removeAttr('readonly')
        $('#np').val('');
        $('#namalengkap').val('');
		$('#namapanggilan').val('');
        $('#jk').val('');
        $('#tempatlahir').val('');
        $('#tanggalahir').val('');
		$('#agama').val('');
		$('#kwn').val('');
		$('#anake').val('');
		$('#skandung').val('');
        $('#stiri').val('');
		$('#sangkat').val('');
		$('#bhssehari').val('');
        $('#berat').val('');
        $('#tinggi').val('');
        $('#goldarah').val('');
        $('#penyakit').val('');
		$('#alamatsekarang').val('');
        $('#notelp').val('');
        $('#tinggalpada').val('');
		$('#nayah').val('');
        $('#nibu').val('');
		$('#penayah').val('');
		$('#penibu').val('');
		$('#pekayah').val('');
		$('#pekibu').val('');
		$('#nwali').val('');
		$('#penwali').val('');
		$('#hubanak').val('');
		$('#pekwali').val('');
		$('#masuksbg').val('');
		$('#ntk').val('');
		$('#lamabelajar').val('');
		$('#statusdaftar').val('');
		
		
		
        $(".edit-dialog").modal('toggle');
    })
  $("body").on("click", ".hapus", function(e) {
                var clickedID = this.id.split('-'); //Split string (Split works as PHP explode)
                var DbNumberID = ".data-0-"+clickedID[1];
                $(".np").html($(DbNumberID).html());
                $('.dialog-hapus').modal('toggle');
                $("#konf").attr("href","hapusdaftar.php?np="+$(DbNumberID).html());
            });

    $("body").on("click", ".edit", function(e) {
                var clickedID = this.id.split('-'); //Split string (Split works as PHP explode)
                var DbNumberID = clickedID[1];
                var kelas1 = ".data-0-"+DbNumberID;
                var kelas2 = ".data-1-"+DbNumberID;
                var kelas3 = ".data-2-"+DbNumberID;
                var kelas4 = ".data-3-"+DbNumberID;
                var kelas5 = ".data-4-"+DbNumberID;
                var kelas6 = ".data-5-"+DbNumberID;
                var kelas7 = ".data-6-"+DbNumberID;
                var kelas8 = ".data-7-"+DbNumberID;
                var kelas9 = ".data-8-"+DbNumberID;
                var kelas10 = ".data-9-"+DbNumberID;
                var kelas11 = ".data-10-"+DbNumberID;
                var kelas12 = ".data-11-"+DbNumberID;
                var kelas13 = ".data-12-"+DbNumberID;
                var kelas14 = ".data-13-"+DbNumberID;
                var kelas15 = ".data-14-"+DbNumberID;
                var kelas16 = ".data-15-"+DbNumberID;
                var kelas17 = ".data-16-"+DbNumberID;
                var kelas18 = ".data-17-"+DbNumberID;
				var kelas19 = ".data-18-"+DbNumberID;
				var kelas20 = ".data-19-"+DbNumberID;
				var kelas21 = ".data-20-"+DbNumberID;
				var kelas22 = ".data-21-"+DbNumberID;
				var kelas23 = ".data-22-"+DbNumberID;
				var kelas24 = ".data-23-"+DbNumberID;
				var kelas25 = ".data-24-"+DbNumberID;
				var kelas26 = ".data-25-"+DbNumberID;
				var kelas27 = ".data-26-"+DbNumberID;
				var kelas28 = ".data-27-"+DbNumberID;
				var kelas29 = ".data-28-"+DbNumberID;
				var kelas30 = ".data-29-"+DbNumberID;
				var kelas31 = ".data-30-"+DbNumberID;
				var kelas32 = ".data-31-"+DbNumberID;
				var kelas33 = ".data-32-"+DbNumberID;
				var kelas34 = ".data-33-"+DbNumberID;

                var np = $(kelas1).html();
                var namalengkap = $(kelas2).html();
				var namapanggilan = $(kelas3).html();
                var jk = $(kelas4).html();
                var tempatlahir = $(kelas5).html();
                var tanggalahir = $(kelas6).html();
				var agama = $(kelas7).html();
                var kwn = $(kelas8).html();
                var anake = $(kelas9).html();
                var skandung = $(kelas10).html();
                var stiri = $(kelas11).html();
                var sangkat = $(kelas12).html();
                var bhssehari = $(kelas13).html();
                var berat = $(kelas14).html();
                var tinggi = $(kelas15).html();
                var goldarah = $(kelas16).html();
                var penyakit = $(kelas17).html();
                var alamatsekarang = $(kelas18).html();
                var notelp = $(kelas19).html();
				var tinggalpada = $(kelas20).html();
				var nayah = $(kelas21).html();
				var nibu = $(kelas22).html();
				var penayah = $(kelas23).html();
				var penibu = $(kelas24).html();
				var pekayah = $(kelas25).html();
				var pekibu = $(kelas26).html();
				var nwali = $(kelas27).html();
				var penwali = $(kelas28).html();
				var hubanak = $(kelas29).html();
				var pekwali = $(kelas30).html();
				var masuksbg = $(kelas31).html();
				var ntk = $(kelas32).html();
				var lamabelajar = $(kelas33).html();
				var statusdaftar = $(kelas34).html();
				
                $("#np").val(np);
                $("#namalengkap").val(namalengkap);
                $("#np").attr("readonly","true");
                $('.edit-dialog').modal('toggle');
            });

    })
</script>
<form id="cetak" action="fpdf/examples/print.php" method="post">
    <input type="hidden" name="isi" id="isi" value=""><input type="hidden" name="namafile" value="hakakses">
</form>
<div class="modal fade bs-example-modal-lg dialog-hapus" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4>Hapus Data</h4>
        </div>
        <div class="modal-body">
            Apakah anda ingn menghapus data dengan kode pendaftar =  <span class='np'></span>?
        </div>
        <div class="modal-footer">
        <a id="konf" href=""><button type="button" class="btn btn-danger" id="simpan">Ya</button></a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
      </div>
    </div>
  </div>
</div>
<a href="tambahdaftar.php">
<button type="button" onClick=""class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Tambah</button></a><br>
<div class="modal fade bs-example-modal-lg edit-dialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data pendaftar</h4>
        <div class="area-loading"></div>
      </div>
      <div class="modal-body">
        <form method="post" id="form" action="insertpendaftar.php">
        <table class="table table-striped" width="100%">
            <tr>
                <th width="25%">kode pendaftar</th>
                <td width="1%"> : </td>
                <td> <input id="kdpendaftar" name="kdpendaftar" placeholder="Kode" class="form-control" type="text" required></td>
            </tr><tr>
                <th width="25%">Nama pendaftar</th>
                <td width="1%"> : </td>
                <td> <input id="nama" name="nama" placeholder="Nama" class="form-control" type="text" required ></td>
            </tr>
            <tr>
                <th width="25%">Jenis Kelamin</th>
                <td width="1%"> : </td>
                <td> <select id="jenkel" name="jenkel"  class="form-control" required >
                <option value="Laki-laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
                </td>
            </tr>
            <tr>
            <th width="25%">No. Pelanggan Terdekat</th>
            <td width="1%"> : </td>
            <td><select id="no_pelanggan_terdekat" name="no_pelanggan_terdekat"   class="form-control">
              <option>--Pilih Pelanggan--</option>
              <?php
                $exec=mysql_query("select * from pelanggan");
                while($hasil=mysql_fetch_array($exec))
                  echo "<option value='$hasil[0]'>$hasil[0] | $hasil[2]</option>";
              ?>
            </select></td>
          </tr>
        </table>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="simpan">Simpan</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </form>
      </div>
    </div>
  </div>
</div>
<?php

$queryN1 = "SELECT tahunakad.id_thnaka, tahunakad.tahunakad, tahunakad.mulaidaf, tahunakad.akhirdaf, tahunakad.mulaibel, tahunakad.status FROM tahunakad WHERE tahunakad.status='Aktif'";
$resultN1 = mysql_query ($queryN1);
$countN1 = mysql_num_rows($resultN1);

?>

    <?php
        if(isset($_GET['code']))
        {
            if($_GET['code']==1)
                echo "<h3 style='color:green'>Data pendaftar berhasil disimpan</h3>";
            elseif($_GET['code']==2)
                echo "<h3 style='color:red'>Terjadi kesalahan</h3>";
            elseif($_GET['code']==3)
                echo "<h3 style='color:blue'>Data pendaftar berhasil dihapus</h3>";
        }
    ?>
	


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
                        <h3 class="panel-title">Data Pendaftar</h3> 
                        </div>
                        <div class="panel-body">
                        <div class="table-responsive">
                    <?php
                    $tampil=mysql_query("select * from csiswa1 order by np asc");
                    ?>
                  <table class="table table-striped">
    <tr>
        <th width="5%">
            No.
        </th>
        <th width="5%">
            Kode pendaftar
        </th>
        <th>
            Nama pendaftar
        </th>
     <th>
            Umur
        </th>
        <th>Status</th>
		<th><center>Tools</center></th>
    </tr>
    <?php
        if(!isset($_GET['data']))
        $exec=mysql_query("select * from csiswa1 ");
        else{
            $data=trim(addslashes($_GET['data']));
            $exec=mysql_query("select * from csiswa1 where np like '%".$data."%' or namalengkap like '%".$data."%'");
        }
            
        $no=0;
        while($r=mysql_fetch_array($exec))
        
        {
            $no++;

    ?>
    <tr>
        <td width="5%">
            <?php echo $no; ?>
        </td>
        <td width="5%">
            <span class="data-0-<?php echo $no; ?>"><?php echo $r[0]; ?></span>
        </td>
        <td>
            <span class="data-1-<?php echo $no; ?>"><?php echo $r[1]; ?></span>
        </td>
         <td>
           <?php
			
			
			$lahir=new DateTime($r['tanggalahir']);
			if($countN1 > 0){
				while($dataN1=mysql_fetch_array($resultN1))
			
			$today=new DateTime($dataN1['mulaidaf']);
			}
			$umur=$today->diff($lahir);
			echo $umur->y;echo"Tahun,"; echo $umur->m; echo "Bulan, dan "; echo $umur->d; echo "Hari";
			
			
			?>
        </td>
		<td>
            <span class="data-0-<?php echo $no; ?>"><?php if($r['statusdaftar']=='Diterima'){echo 'Lulus Tahap 1';} else{echo $r['statusdaftar'];} ?></span>
        </td>
		
    
        <td>
           <center><a href="terima.php?np=<?php echo $r[0]  ?>"><button type="button" class="btn btn-warning">Tambahkan</button></a>
		   &nbsp;<a href="tolak.php?np=<?php echo $r[0]  ?>" ><button type="button" class="btn btn-danger">Tolak</button></a>
           &nbsp;<button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg<?php echo $r[0]; ?>">Detail</button></center>

 <div class="modal fade bs-example-modal-lg<?php echo $r[0]; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Data Pendaftar</h4>
      </div>
      <div class="modal-body">
        <table class="table table-striped" width="100%">
          <tr>
            <th width="25%">Nama Lengkap</th>
            <td width="1%"> : </td>
            <td> <span class="data-0-<?php echo $r[0]; ?>"><?php echo $r[1]; ?></span></td>
          </tr>
		  <tr>
            <th width="25%">Nama Panggilan</th>
            <td width="1%"> : </td>
            <td> <span class="data-1-<?php echo $r[0]; ?>"><?php echo $r[2]; ?></span></td>
          </tr>
		  <tr>
            <th width="25%">Jenis Kelamin</th>
            <td width="1%"> : </td>
            <td> <span class="data-2-<?php echo $r[0]; ?>"><?php echo $r[3]; ?></span></td>
          </tr>
		  <tr>
            <th width="25%">Tempat Lahir</th>
            <td width="1%"> : </td>
            <td> <span class="data-3-<?php echo $r[0]; ?>"><?php echo $r[4]; ?></span></td>
          </tr>
		  <tr>
            <th width="25%">Tanggal Lahir</th>
            <td width="1%"> : </td>
            <td> <span class="data-4-<?php echo $r[0]; ?>"><?php echo $r[5]; ?></span></td>
          </tr>  
		  <tr>
            <th width="25%">Agama</th>
            <td width="1%"> : </td>
            <td> <span class="data-5-<?php echo $r[0]; ?>"><?php echo $r[6]; ?></span></td>
          </tr>
		  <tr>
            <th width="25%">Kewarganegaraan</th>
            <td width="1%"> : </td>
            <td> <span class="data-6-<?php echo $r[0]; ?>"><?php echo $r[7]; ?></span></td>
          </tr>
		  <tr>
            <th width="25%">Anak Ke</th>
            <td width="1%"> : </td>
            <td> <span class="data-7-<?php echo $r[0]; ?>"><?php echo $r[8]; ?></span></td>
          </tr>
		  <tr>
            <th width="25%">Jumlah Saudara Kandung</th>
            <td width="1%"> : </td>
            <td> <span class="data-8-<?php echo $r[0]; ?>"><?php echo $r[9]; ?></span></td>
          </tr>
		  <tr>
            <th width="25%">Jumlah Saudara Tiri</th>
            <td width="1%"> : </td>
            <td> <span class="data-9-<?php echo $r[0]; ?>"><?php echo $r[10]; ?></span></td>
          </tr>
          <tr>
            <th width="25%">Jumlah Saudara Angkat</th>
            <td width="1%"> : </td>
            <td> <span class="data-10-<?php echo $r[0]; ?>"><?php echo $r[11]; ?></span></td>
          </tr>
          <tr>
            <th width="25%">Bahasa Sehari-hari</th>
            <td width="1%"> : </td>
            <td> <span class="data-11-<?php echo $r[0]; ?>"><?php echo $r[12]; ?></span></td>
          </tr>
          <tr>
            <th width="25%">Berat Badan</th>
            <td width="1%"> : </td>
            <td> <span class="data-12-<?php echo $r[0]; ?>"><?php echo $r[13]; ?></span></td>
          </tr>
          <tr>
            <th width="25%">Tinggi Badan</th>
            <td width="1%"> : </td>
            <td> <span class="data-13-<?php echo $r[0]; ?>"><?php echo $r[14]; ?></span></td>
          </tr>
          <tr>
            <th width="25%">Golongan Darah</th>
            <td width="1%"> : </td>
            <td> <span class="data-14-<?php echo $r[0]; ?>"><?php echo $r[15]; ?></span></td>
          </tr>
          <tr>
            <th width="25%">Penyakit berat yang pernah diderita</th>
            <td width="1%"> : </td>
            <td> <span class="data-15-<?php echo $r[0]; ?>"><?php echo $r[16]; ?></span></td>
          </tr>
		  <tr>
            <th width="25%">Alamat Tempat Tinggal</th>
            <td width="1%"> : </td>
           <td> <span class="data-16-<?php echo $r[0]; ?>"><?php echo $r[17]; ?></span></td>
          </tr>
		  <tr>
            <th width="25%">Nomor Telepon</th>
            <td width="1%"> : </td>
            <td> <span class="data-17-<?php echo $r[0]; ?>"><?php echo $r[18]; ?></span></td>
          </tr>
		  <tr>
            <th width="25%">Bertempat Tinggal Pada</th>
            <td width="1%"> : </td>
            <td> <span class="data-18-<?php echo $r[0]; ?>"><?php echo $r[19]; ?></span></td>
          </tr>
		  <tr>
            <th width="25%">Nama Ayah</th>
            <td width="1%"> : </td>
            <td> <span class="data-19-<?php echo $r[0]; ?>"><?php echo $r[20]; ?></span></td>
          </tr>
		  <tr>
            <th width="25%">Nama Ibu</th>
            <td width="1%"> : </td>
            <td> <span class="data-20-<?php echo $r[0]; ?>"><?php echo $r[21]; ?></span></td>
          </tr>
		  <tr>
            <th width="25%">Pendidikan Ayah</th>
            <td width="1%"> : </td>
           <td> <span class="data-21-<?php echo $r[0]; ?>"><?php echo $r[22]; ?></span></td>
          </tr>
		  <tr>
            <th width="25%">Pendidikan Ibu</th>
            <td width="1%"> : </td>
            <td> <span class="data-22-<?php echo $r[0]; ?>"><?php echo $r[23]; ?></span></td>
          </tr>
		  <tr>
            <th width="25%">Pekerjaan Ayah</th>
            <td width="1%"> : </td>
            <td> <span class="data-23-<?php echo $r[0]; ?>"><?php echo $r[24]; ?></span></td>
          </tr>
		  <tr>
            <th width="25%">Pekerjaan Ibu</th>
            <td width="1%"> : </td>
            <td> <span class="data-24-<?php echo $r[0]; ?>"><?php echo $r[25]; ?></span></td>
          </tr>
		  <tr>
            <th width="25%">Nama Wali</th>
            <td width="1%"> : </td>
           <td> <span class="data-25-<?php echo $r[0]; ?>"><?php echo $r[26]; ?></span></td>
          </tr>
		  <tr>
            <th width="25%">Pendidikan Wali</th>
            <td width="1%"> : </td>
            <td> <span class="data-26-<?php echo $r[0]; ?>"><?php echo $r[27]; ?></span></td>
          </tr>
		  <tr>
            <th width="25%">Hubungan dengan Anak</th>
            <td width="1%"> : </td>
            <td> <span class="data-27-<?php echo $r[0]; ?>"><?php echo $r[28]; ?></span></td>
          </tr>
		  <tr>
            <th width="25%">Pekerjaan Wali</th>
            <td width="1%"> : </td>
            <td> <span class="data-28-<?php echo $r[0]; ?>"><?php echo $r[29]; ?></span></td>
          </tr>
		  <tr>
            <th width="25%">Masuk Sebagai Kelas</th>
            <td width="1%"> : </td>
            <td> <span class="data-29-<?php echo $r[0]; ?>"><?php echo $r[30]; ?></span></td>
          </tr>
		  <tr>
            <th width="25%">Nama TK</th>
            <td width="1%"> : </td>
            <td> <span class="data-30-<?php echo $r[0]; ?>"><?php echo $r[31]; ?></span></td>
          </tr>
		  <tr>
            <th width="25%">Lama Belajar</th>
            <td width="1%"> : </td>
            <td> <span class="data-31-<?php echo $r[0]; ?>"><?php echo $r[32]; ?></span></td>
          </tr>
        
      
      
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

        </td>
    </tr>
	
    <?php
        }
    ?>
	

</table>
<div class="text-right">
                  <a href="input-seleksi.php" class="btn btn-sm btn-warning">Seleksi Serentak<i class="fa fa-arrow-circle-right"></i></a>

                </div>
                <!--<div class="text-right">
                  <a href="input-produk.php" class="btn btn-sm btn-warning">Tambah Produk <i class="fa fa-arrow-circle-right"></i></a>
                </div>-->
              </div> 
              </div>
            </div><!-- col-lg-12-->
                                        		
					</div><!-- /row -->
					
					<div class="row mt">
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
