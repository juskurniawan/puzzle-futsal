
		
		
		<body onload="window.print()">
<?php
/*$np=addslashes($_GET['np']);*/
include "../conn.php";     
        /*$exec=mysql_query("select * from csiswa1 where np='".$np."' ");
     $r=mysql_fetch_array($exec)
        
       ;*/

    ?>


<style>
	table,th,td
	{
	div:not{
    color:red;}
		border:2px solid black;
	}
	table
	{
		border-collapse:collapse;
		
	}
	
	
</style>




<br>

<br>

<br>
<br>
<table width="60%" align="center">
<tr>
<th>
<font size="3">LAPORAN PENYEWAAN LAPANGAN<br><br><br>
</th>
 <center> <h2></h2>
  <h3>
Berdasarkan: <?php echo $_POST['berdasar'] ?></h3>
</tr>
</table>
<table width="100%" border="">
<tr>
	<td width="5%"><font size="1">No. Urut</td>
	<td width="20%"><font size="1">Team</td>
	<td><font size="1">Hari Main</td>
	<td><font size="1">Tanggal Main</td>
	<td><font size="1">Status Pembayaran</td>
</tr>
<?php  



 
    if($_POST['berdasar'] == "Semua Data"){
                    $query1="SELECT * FROM pesandp";
                    }
     else if ($_POST['berdasar'] == "status"){
  //modus tanggal
  $status = $_POST['status'];

    $query1 = "SELECT * FROM pesandp
        where ketdp='$status'";
  }
                   
                    $tampil=mysqli_query($koneksi, $query1) or die(mysqli_error());
                  

 
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    { $no++;  
  echo "<tr>
   <td>$no</td>
   <td><font size='1'>".$data['team']."</td>
   <td><font size='1'>".$data['tgldp']."</td>
   <td><font size='1'>".$data['darijamdp']."</td>
   <td><font size='1'>".$data['ketdp']."</td>
  </tr>";
 }
?>


</table>




		  

<br>


<br>

<br>
<table width="100%">
<tr>
	<th width="50%" align="center"><th>
	<td width="50%" align="center"><font size="2">Bandung, <?php
$hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu");
$bulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
echo date("j")." ".$bulan[date("n")]." ".date("Y");
?></td>
</tr>
<tr>
	<th width="50%" align="center"><th>
	<td width="50%" align="center"><font size="2">Operator<br><br><br><br></td>
</tr>

<tr>
	<th width="50%" align="center"><th>
	<td width="50%" align="center"><font size="2">Dedah</td>
</tr>

</table>





        </body>