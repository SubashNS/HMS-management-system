<?php require "../connection/connection.php" ?>


<?php session_start(); 
if(isset($_SESSION['did']))
{}
else

{header("Location:updoctor1.php");}
?> 


<?php
if(isset($_POST['Update']))
{
$dname=$_POST['dname'];
$dsex=$_POST['dsex'];
$dtype=$_POST['dtype'];
$dsalary=$_POST['dsalary'];
$dphno=$_POST['dphno'];
$dhsname=$_POST['dhsname'];
$dcity=$_POST['dcity'];
$sql="UPDATE doctor SET dname='{$dname}',dsex='{$dsex}',dtype='{$dtype}',dsalary='{$dsalary}',dphno='{$dphno}',dhsname='{$dhsname}',dcity='{$dcity}' WHERE did='{$_SESSION['did']}'";

if ($conn->query($sql) === TRUE) {
	

session_start(); 
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
<header class="header-class"><h1>DOCTOR RECORDS ENTRY</h1></header>

<div class="insdoc-block">
<form action="" method="post">
<input type="text" name="dname"  value="<?php echo $_SESSION['dname']; ?>" /><br>

<input type="text" name="dsex"  value="<?php echo $_SESSION['dsex']; ?>"><br>

<select name="dtype" >
  <option value="Cardiologist">Cardiologist</option>
  <option value="Dermatologist">Dermatologist</option>
  <option value="Neurologist">Neurologist</option>
  <option value="Gynecologist">Gynecologist</option>
  <option value="Ophthalmologist">Ophthalmologist</option>
  <option value="Orthopaedic Surgeon">Orthopaedic Surgeon</option>
  <option value="Otolaryngologist">Otolaryngologist</option>
  <option value="Pathologis">Pathologis</option>
  <option value="Pediatrician">Pediatrician</option>
  <option value="Plastic Surgeon">Plastic Surgeon</option>
  <option value="Psychiatrist">Psychiatrist</option>
  <option value="Pulmonary Medicine Physician">Pulmonary Medicine Physician</option>
  <option value="Radiation Onconlogist">Radiation Onconlogist</option>
  <option value="Urologist">Urologist</option>
</select>
<br>
<input type="text" name="dsalary"  value="<?php echo $_SESSION['dsalary']; ?>" ><br>
<input type="text" name="dphno"  value="<?php echo $_SESSION['dphno']; ?>"><br>
<input type="text" name="dhsname"  value="<?php echo $_SESSION['dhsname']; ?>"/><br>
<input type="text" name="dcity"  value="<?php echo $_SESSION['dcity']; ?>" /><br>
<input type="submit" name="Update" formtarget="_blank" value="Update">
</form>
</div>
<div class="image-doc"><img src="doctorpaitnttalking.jpg" height="620" width="780"></div>
</body>
</html>

