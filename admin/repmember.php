<?php
require("cekses.php");
?>



<table width="100%" border="1" cellspacing="2" cellpadding="2">
  <tr>
    <td bgcolor="#003399">User Name</td>
    <td bgcolor="#003399">Password</td>
    <td bgcolor="#003399">Nama</td>
    <td bgcolor="#003399">Email</td>
    <td bgcolor="#003399">No Telp</td>
    
    
  </tr>
  <?php
  $sql="Select * from `users`";
  $result2 = mysql_query($sql) or die ('Error: '.mysql_error ());
	 while ($row2 = mysql_fetch_array($result2)) {
	?>
  <tr>
    <td><?php echo $row2['username'];?></td>
    <td><?php echo md5($row2['password']);?></td>
    <td><?php echo $row2['nama_lengkap'];?></td>
    <td><?php echo $row2['email'];?></td>
    <td><?php echo $row2['no_telp'];?></td>
    
    
	 
  </tr>
  <?php
  }
  ?>
</table>