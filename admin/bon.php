<body onload="window.print()">
<?php
$idtransaksi=addslashes($_GET['id_pemesanan']);
include "../conn.php";     
        $exec=mysql_query("select * from pesandp where id_pemesanan='".$idtransaksi."' ");
     $r=mysql_fetch_array($exec)
        
       ;

    ?>

<br>


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

<br><br>
<table width="700" border="">

<br>


<tr>
<th><font size="4"><div align="center">Puzzle Futsal</div></font>
<table width="70%" border="" align="center">
<tr>
<?php  
 $no_urut = 0;
 $query = "SELECT * FROM pesandp where id_pemesanan='".$idtransaksi."' ";
 $result = mysql_query($query);
 
 
 while($data=mysql_fetch_array($result)) {
	 
  $no_urut++;
 ?>
	
	<td><font size="3">DP</td>
	<td><font size="3"><?php
			$queryo = "SELECT*FROM pesandp WHERE pesandp.id_pemesanan='$data[0]'";
			$resulto= mysql_query ($queryo);
			$counto = mysql_num_rows($resulto);
			while($dato=mysql_fetch_array($resulto))
			{
			echo $dato['jumlahdp'];
			}
			?></td>
	
	
</tr>

 <tr>
 
 <td>Tanggal Main</td>
			<td>
			<?php
			$queryo = "SELECT*FROM pesandp WHERE pesandp.id_pemesanan='$data[0]'";
			$resulto= mysql_query ($queryo);
			$counto = mysql_num_rows($resulto);
			while($dato=mysql_fetch_array($resulto))
			{
			echo $dato['tgldp'];}?></td>
			
			

			
			<?php
			
  
  
  
 
?>
<tr>
	
	<td><font size="3">Jam Main</td>
	<td><font size="3"><?php
			$queryo = "SELECT*FROM pesandp WHERE pesandp.id_pemesanan='$data[0]'";
			$resulto= mysql_query ($queryo);
			$counto = mysql_num_rows($resulto);
			while($dato=mysql_fetch_array($resulto))
			{
			echo $dato['darijamdp'];}?></td>
	
	
</tr>
<tr>
	
	<td><font size="3">Team</td>
	<td><font size="3"><?php
			$queryo = "SELECT*FROM pesandp WHERE pesandp.id_pemesanan='$data[0]'";
			$resulto= mysql_query ($queryo);
			$counto = mysql_num_rows($resulto);
			while($dato=mysql_fetch_array($resulto))
			{
			echo $dato['team'];}?></td>
	
	
</tr>
 
 <?php
 }
 ?>
</table>
<br><br></th>
</tr>
</table>



		  

<br>




        </body>