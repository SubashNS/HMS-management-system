<?php require "../connection/connection.php" ?>
<?php 
if(isset($_POST['submit']))
{
$nid=$_POST['nid'];

$s="SELECT * FROM nurse WHERE nid='$nid'";
$result=$conn->query($s);
if(!($result->num_rows >0))
{}

else
{
while($row=$result->fetch_assoc())
{
session_start();
$_SESSION['nid']=$row['nid'];
$_SESSION['nname']=$row['nname'];
$_SESSION['nsex']=$row['nsex'];
$_SESSION['nsalary']=$row['nsalary'];
$_SESSION['nphno']=$row['nphno'];
$_SESSION['nhsname']=$row['nhsname'];
$_SESSION['ncity']=$row['ncity'];


}
header("Location:upnurse.php");
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
<header class="header-class"><h1>NURSE RECORDS ENTRY</h1></header>
<div class="update-nurse">
<form action="" method="post">
<input type="text" name="nid" placeholder="Nurse id">
<input type="submit" name="submit" value="submit">


</form>
</div>
<div class="image-updatedoc"><img src="doctor-id-card.jpg" height="620" width="780"></div>

</body>
</html>