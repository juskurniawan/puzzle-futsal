<?php
/*require("config.php");
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysql_query($query,$con) or die(mysqli_error());
$num_row = mysql_num_rows($result);
		$row=mysql_fetch_array($result);
		if( $num_row >=1 ) {
			
			$_SESSION['username']=$row['username'];
			$_SESSION['password']=$row['password'];
			header("location:user/index.php");

			
		}
		else{
			header("location:index.php?page=member&cat=1&ref=failed");
		}
*/?>
<?php
include ("conn.php");
date_default_timezone_set('Asia/Jakarta');

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

if (empty($username) && empty($password)) {
	header('location:login-user.php?error1');
	break;
} else if (empty($username)) {
	header('location:login-user.php?error=2');
	break;
} else if (empty($password)) {
	header('location:login-user.php?error=3');
	break;
}

$q = mysql_query("select * from users where username='$username' and password='$password'");
$row = mysql_fetch_array ($q);
echo $row['id_member'];

if (mysql_num_rows($q) == 1) {
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $row['password'];
    $_SESSION['id_member'] = $row['id_member'];
	$_SESSION['nama_lengkap'] = $row['nama_lengkap'];

	header('location:user/index.php');
} else {
	header('location:login-user.php?error=4');
}
?>