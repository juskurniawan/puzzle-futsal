<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
<?php
require("cekses.php");
?>
<?php
echo '<!--<a href="index.php?page=entry&cat=1&act=add"> <b>Tambah Fasilitas </b></a><br>-->';
if(!isset($_GET['act']))
{
	echo '
<table width="100%" border="1" cellspacing="2" cellpadding="2">
  <tr>
    <td bgcolor="#006699">Gambar</td>
    <td bgcolor="#006699">Nama Fasilitas</td>
    <td bgcolor="#006699">Biaya</td>
    
  </tr>';

  $sql = "SELECT * FROM `sport`"; 
   
  
      $result2 = mysql_query($sql) or die ('Error: '.mysql_error ());
	 while ($row2 = mysql_fetch_array($result2)) {       
	 if ($row2['gambar']!="")
	 {
		 $gmb=$imgd."fasilitas/".$row2['gambar'];
	  }else{		  
		$gmb=$imgd."fasilitas/"."no-photo.jpg";
	 }
	 echo ' 
    <tr>
    <td width="181" bgcolor="#000000"><img src="'.$gmb.'" width="181" height="100"></td>
    <td bgcolor="#000000">'.$row2['judul'].'</td>
    <td bgcolor="#000000">'.$row2['biaya'].'</td>

  </tr>
	
  </tr>';
  
	}
    
  echo '
</table>';
}else if($_GET['act']=="add"){
	?>
    <?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}


?>

<?php
define ("MAX_SIZE","2000");

 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }
 
 $errors=0;
?>
<?php

 if(isset($_GET['sc']))  
 {
 	
 	$image=$_FILES['image']['name'];
 	
 	if ($image) 
 	{
 	
 		$filename = stripslashes($_FILES['image']['name']);
 	
  		$extension = getExtension($filename);
 		$extension = strtolower($extension);
 	
 if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
 		{
		
 			echo '<h1>Unknown extension!</h1>';
 			$errors=1;
 		}
 		else
 		{

 $size=filesize($_FILES['image']['tmp_name']);


if ($size > MAX_SIZE*1024)
{
	echo '<h1>You have exceeded the size limit!</h1>';
	$errors=1;
}


$image_name=time().'.'.$extension;

$newname=$image_name;

$copied = copy($_FILES['image']['tmp_name'], "../images/fasilitas/".$newname);
if (!$copied) 
{
	echo '<h1>Copy unsuccessfull!</h1>';
	$errors=1;
}}}}


  if(isset($_GET['sc']) && !$errors) 
 {
	 $sql="Insert into sport (judul,biaya,keterangan,gambar) values ('".$_POST['TxtJudul']."','".$_POST['TxtBiaya']."','".$_POST['TxtKeterangan']."','".$newname."')";	
	 mysql_query($sql) or die(mysql_error());
	 echo "<script>window.location='index.php?page=entry&cat=1'</script>";
 }
 ?>
<form id="form1" name="form1" method="POST"  enctype="multipart/form-data" action="index.php?page=entry&cat=1&act=add&sc=1">
  <table width="100%" border="0" cellspacing="3" cellpadding="3">
    <tr>
      <td width="20%" align="left" valign="top">Nama Fasilitas </td>
      <td width="80%" align="left" valign="top"><label for="TxtJudul"></label>
      <input name="TxtJudul" type="text" id="TxtJudul" size="60" /></td>
    </tr>
    
    <tr>
      <td align="left" valign="top">Biaya</td>
      <td align="left" valign="top"><label for="TxtPengarang"></label>
      <input type="text" name="TxtBiaya" id="TxtBiaya" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Keterangan</td>
      <td align="left" valign="top"><label for="TxtPenerbit"></label>
        <label for="TxtKeterangan"></label>
      <textarea name="TxtKeterangan" id="TxtKeterangan" cols="45" rows="5"></textarea><label for="TxtTahunTerbit"></label></td>
    </tr>
    <tr>
      <td align="left" valign="top">Gambar</td>
      <td align="left" valign="top"><input name="image" type="file" id="image" size="40"></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><input type="submit" name="SubmitAdd" id="Submit" value="Tambah" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1" />
</form>

<?php
}elseif($_GET['act']=="edit")
{
	?>
    <?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}


?>

<?php
define ("MAX_SIZE","2000");

 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }
 
 $errors=0;
?>
<?php

 if(isset($_GET['df']))  
 {
 	
 	$image=$_FILES['image']['name'];
 	
 	if ($image) 
 	{
 	
 		$filename = stripslashes($_FILES['image']['name']);
 	
  		$extension = getExtension($filename);
 		$extension = strtolower($extension);
 	
 if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
 		{
		
 			echo '<h1>Unknown extension!</h1>';
 			$errors=1;
 		}
 		else
 		{

 $size=filesize($_FILES['image']['tmp_name']);


if ($size > MAX_SIZE*1024)
{
	echo '<h1>You have exceeded the size limit!</h1>';
	$errors=1;
}


$image_name=time().'.'.$extension;

$newname=$image_name;

$copied = copy($_FILES['image']['tmp_name'], "../images/fasilitas/".$newname);
if (!$copied) 
{
	echo '<h1>Copy unsuccessfull!</h1>';
	$errors=1;
}}}}


  if(isset($_GET['df']) && !$errors) 
 {
	 $sql="Update sport Set judul='".$_POST['TxtJudul']."',biaya='".$_POST['TxtBiaya']."',keterangan='".$_POST['TxtKeterangan']."',gambar='".$newname."' Where id_sport='".$_GET['id']."'";	
	 mysql_query($sql) or die(mysql_error());
	 echo "<script>window.location='index.php?page=entry&cat=1'</script>";
 }
 ?>
 
 <?php
 $id2=$_GET['id'];
$sql = "SELECT * FROM `sport` WHERE `id_sport`='".$id2."'"; 
$result = mysql_query($sql);
$row2=mysql_fetch_array($result);
$gmb=$imgd."fasilitas/".$row2['gambar'];
 echo'
<form id="form1" name="form1" method="POST"  enctype="multipart/form-data" action="index.php?page=entry&cat=1&act=edit&id='.$id2.'&df=1">
  <table width="100%" border="0" cellspacing="3" cellpadding="3">
    <tr>
      <td width="20%">Kode Sport </td>
      <td width="80%"><label for="TxtKodeBuku"></label>
      <input name="TxtKode" type="text" disabled id="TxtID" value="'.$id2.'" /></td>
    </tr>
    <tr>
      <td>Nama Fasilitas </td>
      <td><label for="TxtJudul"></label>
      <input name="TxtJudul" type="text" id="TxtJudul" value="'.$row2['judul'].'" size="60" /></td>
    </tr>
    
    <tr>
      <td>Keterangan</td>
      <td><label for="TxtPengarang"></label>
      <label for="TxtKeterangan"></label>
      <textarea name="TxtKeterangan" id="TxtKeterangan" cols="45" rows="5">'.$row2['keterangan'].'</textarea></td>
    </tr>
    <tr>
      <td>Biaya</td>
      <td><label for="TxtPenerbit"></label>
      <input name="TxtBiaya" type="text" id="TxtBiaya" value="'.$row2['biaya'].'" />        
      <label for="TxtTahunTerbit"></label></td>
    </tr>    
    <tr>
      <td>Gambar</td>
      <td><input name="image" type="file" id="image" size="40"></td>
    </tr>
    <tr>
      <td></td>
      <td><img src="'.$gmb.'" width="181" height="100"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" id="Submit" value="Update" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1" />
</form>';
?>


<?php
}elseif($_GET['act']=="hapus")
{
?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

if ((isset($_GET['id'])) && ($_GET['id'] != "")) {
  $deleteSQL = sprintf("DELETE FROM sport WHERE id_sport=%s",
                       GetSQLValueString($_GET['id'], "text"));

  mysql_select_db($db, $con);
  $Result1 = mysql_query($deleteSQL, $con) or die(mysql_error());

  $deleteGoTo = "index.php?page=entry&cat=1";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
 
  echo "<script>window.location='index.php?page=entry&cat=1'</script>";
}
?>

<?php
}
?>
