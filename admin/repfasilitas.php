<?php
require("cekses.php");
?>
<?php
$sql="Select * from `sport`";
echo'
<table width="100%" border="1" cellspacing="2" cellpadding="2">
  <tr>
    <td bgcolor="#003399">ID Sport</td>
    <td bgcolor="#003399">Nama Fasilitas</td>
    <td bgcolor="#003399">Biaya</td>
    <td bgcolor="#003399">Keterangan</td>
    <td bgcolor="#003399">Gambar</td>
    
  </tr>';
  $result2 = mysql_query($sql) or die ('Error: '.mysql_error ());
	 while ($row2 = mysql_fetch_array($result2)) {
		 if ($row2['gambar']!="")
	 {
		 $gmb=$imgd."fasilitas/".$row2['gambar'];
	  }else{		  
		$gmb=$imgd."fasilitas/"."no-photo.jpg";
	 }
		 echo'
  <tr>
    <td>'.$row2['id_sport'].'</td>
    <td>'.$row2['judul'].'</td>
    <td>'.$row2['biaya'].'</td>
    <td>'.$row2['keterangan'].'</td>
    <td><img src="'.$gmb.'" width="181" height="100"></td>
    
	 
  </tr>';
  }
  echo '
</table>';
?>