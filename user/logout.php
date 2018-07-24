<?php
session_start();
unset($_SESSION['user_name']);
unset($_SESSION['pass']);
header("location:../index.php?Logout=true");
?>