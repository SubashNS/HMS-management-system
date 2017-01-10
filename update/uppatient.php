<?php require "../connection/connection.php" ?>


<?php session_start(); 
if(isset($_SESSION['pid']))
{}
else
{header("Location:uppatient1.php");}
?> 


<?php
if(isset($_POST['Update']))
{
$pname=$_POST['pname'];
$psex=$_POST['psex'];
$pphno=$_POST['pphno'];
$phsname=$_POST['phsname'];
$pcity=$_POST['pcity'];
$sql="UPDATE patient SET pname='{$pname}',psex='{$psex}',pphno='{$pphno}',phsname='{$phsname}',pcity='{$pcity}' WHERE pid='{$_SESSION['pid']}'";

if ($conn->query($sql) === TRUE) {
	unset($_SESSION['pid']);
    session_destroy();
	header("Location:up1.php");
} else {
    echo "Error updating record: " . $conn->error;
}
}




?>	




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="stylesheeth.css"/>
<title>Untitled Document</title>
</head>

<body>
<header class="header-class"><h1>PATIENT RECORDS ENTRY</h1></header>

<div class="inspat-block">

<form action="" method="post">
<input type="text" name="pname"  value="<?php echo $_SESSION['pname']; ?>" /><br>
<input type="text" name="psex"  value="<?php echo $_SESSION['psex']; ?>"><br>
<input type="text" name="pphno"  value="<?php echo $_SESSION['pphno']; ?>"><br>
<input type="text" name="phsname"  value="<?php echo $_SESSION['phsname']; ?>"/><br>
<input type="text" name="pcity"  value="<?php echo $_SESSION['pcity']; ?>" /><br>
<input type="submit" name="Update" formtarget="_blank" value="Update">
</form>
</div>
<div class="image-pat"><img src="doctor-with-a-patient.jpg" height="620" width="780"></div>




</body>
</html>