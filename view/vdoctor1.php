<?php require "../connection/connection.php" ?>
<?php 
if(isset($_POST['submit']))
{
$did=$_POST['did'];

$s="SELECT * FROM doctor WHERE did='$did'";
$result=$conn->query($s);
if(!($result->num_rows >0))
{}

else
{
while($row=$result->fetch_assoc())
{
session_start();
$_SESSION['did']=$row['did'];
$_SESSION['dname']=$row['dname'];
$_SESSION['dsex']=$row['dsex'];
$_SESSION['dtype']=$row['dtype'];
$_SESSION['dsalary']=$row['dsalary'];
$_SESSION['dphno']=$row['dphno'];
$_SESSION['dhsname']=$row['dhsname'];
$_SESSION['dcity']=$row['dcity'];


}
header("Location:vdoctor.php");
}
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" rel="stylesheet" href="stylesheeth.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>


<body>
<header class="header-class"><h1>VIEW DOCTOR INFO</h1></header>
<div class="update-doc">
<form action="" method="post">
<input type="text" name="did" placeholder="doctor id">
<input type="submit" name="submit" value="submit">


</form>
</div>
<div class="image-updatedoc"><img src="doctor-id-card.jpg" height="620" width="780"></div>
</body>
</html>