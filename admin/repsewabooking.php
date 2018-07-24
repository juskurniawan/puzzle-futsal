<?php
require("cekses.php");
?>
</html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Puzzle Futsal</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<br><br>Data Booking<br><br>



<?php
                    $tampil=mysql_query("select * from pesandp order by id_pemesanan asc");
                    ?>
<table width="100%" border="1" cellspacing="1" cellpadding="1">
  <tr>
	<td bgcolor="#00CCFF"><strong>No</strong></td>
    <td bgcolor="#00CCFF"><strong>ID Pemesanan</strong></td>
    <td bgcolor="#00CCFF"><strong>Team</strong></td>
    <td bgcolor="#00CCFF"><strong>Tanggal</strong></td>
    <td bgcolor="#00CCFF"><strong>Dari Jam</strong></td>
    <td bgcolor="#00CCFF"><strong>Sampai</strong></td>
	<td bgcolor="#00CCFF"><strong>Keterangan</strong></td>
	<td bgcolor="#00CCFF"><strong>Tools</strong></td>
	
  </tr>

 <?php 
					
            
        $no=0;
        while($data=mysql_fetch_array($tampil))
        
        {
            $no++;
					  ?>
                    <tr>
					<td><?php echo $no; ?></td>
                    <td><?php echo $data['id_pemesanan']; ?></td>
                    <td><?php echo $data['username'];?></td>
                    <td><?php echo $data['tgldp']; ?></td>
                    <td><?php echo $data['darijamdp'];?></td>
					<td><?php echo $data['sampaijamdp'];?></td>
					<td><?php echo $data['ketdp'];?></td>
					
					<td>
					<a href="bon.php?id_pemesanan=<?php echo $data[0];  ?>"> Cetak Struk</button></a>
					- 
					<a href="laporan/struk.php?idtransaksi=<?php echo $data[0];  ?>"> Masukan Ke Jadwal</button></a>
					-
					<a class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-original-title="Lihat Struk" href="lihatgambar1.php?hal=lihatgambar&id_pemesanan=<?php echo $data['id_pemesanan']; ?>">Lihat Struk</a>
					-
					<a class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-original-title="Hapus Siswa" href="hapus-pesandp.php?hal=hapus&id_pemesanan=<?php echo $data[0]; ?>">Hapus</a>
					</td>
					
                    <?php   
              }
              ?>


  </table>

  
  
  
  <br><br>Jadwal Penggunaan Lapangan<br><br>
  <?php
                    $tampil=mysql_query("select * from pesanjadi order by id_pemesanan asc");
                    ?>
<table width="100%" border="1" cellspacing="1" cellpadding="1">
  <tr>
	<td bgcolor="#00CCFF"><strong>No</strong></td>
    <td bgcolor="#00CCFF"><strong>ID Pemesanan</strong></td>
    <td bgcolor="#00CCFF"><strong>Team</strong></td>
    <td bgcolor="#00CCFF"><strong>Tanggal</strong></td>
    <td bgcolor="#00CCFF"><strong>Dari Jam</strong></td>
    <td bgcolor="#00CCFF"><strong>Sampai Jam</strong></td>
	<td bgcolor="#00CCFF"><strong>Tools</strong></td>
	
  </tr>

 <?php 
					
            
        $no=0;
        while($data=mysql_fetch_array($tampil))
        
        {
            $no++;
					  ?>
                    <tr>
					<td><?php echo $no; ?></td>
                    <td><?php echo $data['id_pemesanan']; ?></td>
                    <td><?php echo $data['username'];?></td>
                    <td><?php echo $data['tgldp']; ?></td>
                    <td><?php echo $data['darijamdp'];?></td>
					<td><?php echo $data['sampaijamdp'];?></td>
					<td>
					<a href="laporan/struk.php?idtransaksi=<?php echo $data[0];  ?>"> Cetak Struk</button></a>
					-
					<a class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-original-title="Hapus Siswa" href="hapus-pesandp.php?hal=hapus&id_pemesanan=<?php echo $data[0]; ?>">Hapus</a>
					</td>
					
                    <?php   
              }
              ?>


  </table>
  </html>
