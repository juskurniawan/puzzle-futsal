<?php 
include "conn.php";
	$email = $_GET['email']; 	$username = $_GET['username']; 
	
		$query = mysql_query("UPDATE users SET aktif = 'Y' WHERE email = '".$email."'") or die (mysql_error()); 	
		if($query) { 		
			echo "Member dengan username <strong>".$username."</strong> telah diaktifkan"; 	} 
			else {
			 		echo "Gagal diaktifkan"; 	} ?> 