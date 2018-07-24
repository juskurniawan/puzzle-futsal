<!--
Author: WebThemez
Author URL: http://webthemez.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>WEBSITE SEKOLAH DASAR NEGERI 09 CIBIRU</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'> 
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<a class="navbar-brand"  style="color:red">
					SEKOLAH DASAR NEGERI 09 CIBIRU &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> 
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-left mainNav">
					<li class="c1"><a href="./">Home</a></li>
					<li class="c2"><a href="pengumuman.php">Pengumuman</a></li>
					<li class="c3"><a href="baru.php">Pendaftaran</a></li>
					
				
					
					<li class="c4" class="dropdown" >
                                    <a  class="dropdown-toggle" data-toggle="dropdown"href="">
                                        <div class="text-center">
                                           
                                            Login <span class="caret"></span>
                                        </div>
                                    </a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="login.html"><i  data-original-title="" title=""></i>Siswa</a><li>
										<li><a href="login1.html"><i  data-original-title="" title=""></i>Siswa Pindahan</a><li>
									</ul>			
                                </li>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

	

  <div class="container">
  <ol class='breadcrumb'>
  <?php

$queryN1 = "SELECT tahunakad.id_thnaka, tahunakad.tahunakad, tahunakad.mulaidaf, tahunakad.akhirdaf, tahunakad.mulaibel, tahunakad.status FROM tahunakad WHERE tahunakad.status='Aktif'";
$resultN1 = mysql_query ($queryN1);
$countN1 = mysql_num_rows($resultN1);

?>
                   
                </ol>
                <!-- end:breadcrumb -->   

                <div class='row' id='home-content'>
                    <div class='col-lg-12'>
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
                <th width="25%">Nomor Pendaftar</th>
                <td width="1%"> : </td>
                <td> <input id="np" name="np" placeholder="Kode" class="form-control" type="text" required></td>
            </tr><tr>
                <th width="25%">Nama Pendaftar</th>
                <td width="1%"> : </td>
                <td> <input id="namalengkap" name="namalengkap" placeholder="Nama" class="form-control" type="text" required ></td>
            </tr>
            <tr>
                <th width="25%">Jenis Kelamin</th>
                <td width="1%"> : </td>
                <td> <select id="jk" name="jk"  class="form-control" required >
                <option value="Laki-laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
                </td>
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
	<div class="container">
    <div class="row">
            
                    <div class="col-md-12">
                        <div class="grey-box-icon b4">  
                            <h4>SELAMAT DATANG DI WEBSITE PENDAFTARAN ONLINE SEKOLAH DASAR NEGERI 09 CIBIRU</h4>
                            <p>Prosedur Pendaftaran Siswa Baru :</p>
							<p align="left">1. Untuk melakukan pendaftaran, silahkan Anda Klik menu Pendaftaran yang tersedia diatas.<br>
							2. Selanjutnya Silahkan formatnya diisi sesuai data isian yang disediakan. <br>
							3. Setelah Anda selesai mengisi semua kolom yang ada, klik tombol SIMPAN.<br>
							4. Maka di layar akan menampilkan Registrasi/PENDAFTARAN BERHASIL. <br>
							5. Proses seleksi akan dilakukan berdasarkan umur siswa<br>
							6. Apabila tercantum nama anda, di persilahkan untuk datang ke sekolah untuk mendapatkan informasi lebih lanjut dari sekolah<br>
							7. Calon Siswa diharapkan login untuk mengupload persyaratan. <br>
							<br><p>
                            
                        </div><!--grey box -->
                    </div><!--/span3-->
					
					<div class="col-md-12">
                        <div class="grey-box-icon b4">  
                            <h4>PENDAFTARAN DIBUKA TANGGAL
							<?php
							$query = "SELECT*FROM tahunakad WHERE tahunakad.status='Aktif'";
							$result = mysql_query ($query);
							$count = mysql_num_rows($result);
						
							
							while($dat=mysql_fetch_array($result))
							{
								$datee=$dat['mulaidaf'];
								echo date ("d-m-Y", strtotime($datee));
							?>
							
							Sampai Tanggal
                            <?php
							$dateee=$dat['akhirdaf'];
							echo date ("d-m-Y", strtotime($dateee));}
							?>
                            </h4>
                        </div><!--grey box -->
                    </div><!--/span3-->
                </div>
    </div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	
    <center><h3 style="color: red">PENGUMUMAN HASIL SELEKSI PENDAFTARAN </h3></center>
	<center><h5 style="color: black">BAGI YANG SUDAH LULUS TAHAP PERTAMA, SILAHKAN DATANG KE SEKOLAH UNTUK INFORMASI LEBIH LANJUT </h5></center>
	
<table class="table table-striped">
    <tr>
        <th width="5%">
            No.
        </th>
      
        <th>
            Nama Pendaftar
        </th>
		<th>Umur</th>
     
         <th>
            Status
        </th>
		
        <th>
        </th>
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
     
        <td>
            <span class="data-1-<?php echo $no; ?>"><?php echo $r[1]; ?></span>
        </td>
		<td>
		<?php
			
			
			$lahir=new DateTime($r['tanggalahir']);
			if($countN1 > 0){
				while($dataN1=mysql_fetch_array($resultN1))
			
			$today=new DateTime($dataN1['mulaibel']);
			}
			$umur=$today->diff($lahir);
			echo $umur->y;echo"Tahun,"; echo $umur->m; echo "Bulan, dan "; echo $umur->d; echo "Hari";
			
			
			?>
		</td>
		<td>
			<span class="data-33-<?php echo $no; ?>"><?php if($r[33]=='Diterima'){echo "Lulus Tahap Pertama";} else{echo $r[33];}?></span>
		</td>
		
        
        
    
        <td>
           
         </a>&nbsp;<button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg<?php echo $r[0]; ?>">Detail</button>

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
                    
                    </div>
                 
                </div>
    </div>
      <section class="news-box top-margin">
     
    </section>
   
  
	
     
      
    	 
    

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modernizr-latest.js"></script> 
	<script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='assets/js/camera.min.js'></script> 
    <script src="assets/js/bootstrap.min.js"></script> 
	<script src="assets/js/custom.js"></script>
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
				height: '600',
				loader: 'false',
				pagination: true,
				thumbnails: false,
				hover: false,
                playPause: false,
                navigation: false,
				opacityOnGrid: false,
				imagePath: 'assets/images/'
			});

		});
      
	</script>
    
</body>
</html>
