<?php
require("cekses.php");
?>
<form name="form1" method="post" action="index.php?page=report&cat=4&sc=1">
  
    
  </p>
  <table width="100%" border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td width="11%" align="center">Fasilitas</td>
      <td width="89%">
      <select name="sport" size="1" id="sport">
      <?php
	  
						$sql="Select * from sport";
						$result2 = mysql_query($sql) or die ('Error: '.mysql_error ());
	 					while ($row2 = mysql_fetch_array($result2)) { 
        echo '<option value="'.$row2['id_sport'].'">'.$row2['judul'].'</option>';
						}

		?>
      </select>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="PRINT"></td>
    </tr>
  </table>
  <p>
  
  <?php
if(isset($_GET['sc']))
{
echo '<table width="100%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td bgcolor="#00CCFF"><strong>ID Pemesanan</strong></td>
    <td bgcolor="#00CCFF"><strong>Nama</strong></td>
    <td bgcolor="#00CCFF"><strong>Tanggal</strong></td>
    <td bgcolor="#00CCFF"><strong>Jam</strong></td>
    <td bgcolor="#00CCFF"><strong>Fasilitas</strong></td>
  </tr>';
$sql="SELECT
     pemesanan.`id_pemesanan` AS pemesanan_id_pemesanan,
     pemesanan.`username` AS pemesanan_username,
     pemesanan.`tgl` AS pemesanan_tgl,
     pemesanan.`jam` AS pemesanan_jam,
     sport.`judul` AS sport_judul,
     users.`nama_lengkap` AS users_nama_lengkap
FROM
     `sport` sport RIGHT OUTER JOIN `pemesanan` pemesanan ON sport.`id_sport` = pemesanan.`id_sport`
     LEFT OUTER JOIN `users` users ON pemesanan.`username` = users.`username`
	 Where pemesanan.`id_sport`='".$_POST['sport']."'";
	 $result2 = mysql_query($sql) or die ('Error: '.mysql_error ());
	 while ($row2 = mysql_fetch_array($result2)) { 
	 	echo'	<tr>
    
    <td>'.$row2['pemesanan_id_pemesanan'].'</td>
    <td>'.$row2['users_nama_lengkap'].'</td>
    <td>'.$row2['pemesanan_tgl'].'</td>
    <td>'.$row2['pemesanan_jam'].'</td>
	<td>'.$row2['sport_judul'].'</td>
  </tr>';

	 }
	 echo ' </table>';
}
?>