<?php
require("cekses.php");
?>
<form name="form1" method="post" action="index.php?page=report&cat=3&sc=1">
<td width="11%" align="center">Bulan</td>
  <td width="89%"><select name="bl" id="bl">
                        
<option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                      </select>
    <select name="th" id="th">
                        
                        <?php $q=2012; $qq=date("Y");
		while ($q!=$qq) { echo"<option value=";echo $q;echo" >";echo $q;echo"</option>"; $q=$q+1; } echo"<option value=";echo $q;echo" >";echo $q;echo"</option>"; ?>
    </select> <input type="submit" name="button" id="button" value="Lihat"></td>
</form>
<table width="100%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td bgcolor="#00CCFF"><strong>ID Pemesanan</strong></td>
    <td bgcolor="#00CCFF"><strong>Nama</strong></td>
    <td bgcolor="#00CCFF"><strong>Tanggal</strong></td>
    <td bgcolor="#00CCFF"><strong>Jam</strong></td>
    <td bgcolor="#00CCFF"><strong>Fasilitas</strong></td>
  </tr>
<?php
if(isset($_GET['sc']))
{
$tgls=$_POST['th']."-".$_POST['bl'];
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
	 Where month(pemesanan.`tgl`)='".$_POST['bl']."' and year(pemesanan.`tgl`)='".$_POST['th']."'";
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
}
?>

  </table>
