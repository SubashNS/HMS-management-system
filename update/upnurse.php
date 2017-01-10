<?php require "../connection/connection.php" ?>


<?php session_start(); 
if(isset($_SESSION['nid']))
{}
else
{header("Location:upnurse1.php");}
?> 


<?php
if(isset($_POST['Update']))
{
$nname=$_POST['nname'];
$nsex=$_POST['nsex'];
$nsalary=$_POST['nsalary'];
$nphno=$_POST['nphno'];
$nhsname=$_POST['nhsname'];
$ncity=$_POST['ncity'];
$sql="UPDATE nurse SET nname='{$nname}',nsex='{$nsex}',nsalary='{$nsalary}',nphno='{$nphno}',nhsname='{$nhsname}',ncity='{$ncity}' WHERE nid='{$_SESSION['nid']}'";

if ($conn->query($sql) === TRUE) {
	unset($_SESSION['did']);
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
<body>
<header class="header-class"><h1>NURSE RECORDS ENTRY</h1></header>
<div class="insdoc-block">
<form action="" method="post">
<input type="text" name="nname"  value="<?php echo $_SESSION['nname']; ?>" /><br>

<input type="text" name="nsex"  value="<?php echo $_SESSION['nsex']; ?>"><br>
<input type="text" name="nsalary"  value="<?php echo $_SESSION['nsalary']; ?>" ><br>
<input type="text" name="nphno"  value="<?php echo $_SESSION['nphno']; ?>"><br>
<input type="text" name="nhsname"  value="<?php echo $_SESSION['nhsname']; ?>"/><br>
<input type="text" name="ncity"  value="<?php echo $_SESSION['ncity']; ?>" /><br>
<input type="submit" name="Update" formtarget="_blank" value="Update">
</form>
</div>
<div class="image-nurse"><img src="nurse1.jpg" height="620" width="780"></div>



</body>
</html>