<?php require "../connection/connection.php" ?>
<?php 
if(isset($_POST['submit']))
{
$pid=$_POST['pid'];

$s="SELECT * FROM patient WHERE pid='$pid'";
$result=$conn->query($s);
if(!($result->num_rows >0))
{}

else
{
while($row=$result->fetch_assoc())
{
session_start();
$_SESSION['pid']=$row['pid'];
$_SESSION['pname']=$row['pname'];
$_SESSION['psex']=$row['psex'];
$_SESSION['pphno']=$row['pphno'];
$_SESSION['phsname']=$row['phsname'];
$_SESSION['pcity']=$row['pcity'];


}
header("Location:uppatient.php");
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
<header class="header-class"><h1>PATIENT UPDATE INFO</h1></header>
<div class="update-patient">
<form action="" method="post">
<input type="text" name="pid" placeholder="Patient id">
<input type="submit" name="submit" value="submit">


</form>
</div>
<div class="image-updatedoc"><img src="doctor-id-card.jpg" height="620" width="780"></div>



</body>
</html>