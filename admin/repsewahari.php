<?php
require("cekses.php");
?>
<form name="form1" method="post" action="index.php?page=report&cat=2&sc=1">
<td width="11%" align="center">Tanggal</td>
  <td width="89%"><select name="tgl" id="tgl">
      
      <option value="01">01</option>
      <option value="02">02</option>
      <option value="03">03</option>
      <option value="04">04</option>
      <option value="05">05</option>
      <option value="06">06</option>
      <option value="07">07</option>
      <option value="08">08</option>
      <option value="09">09</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>
                      <select name="bl" id="bl">
                        
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
$tgls=$_POST['th']."-".$_POST['bl']."-".$_POST['tgl'];
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
	 Where pemesanan.`tgl`='".$tgls."'";
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
