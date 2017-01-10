<?php require"../connection/connection.php"; ?>



<?php
session_start();

if(isset($_POST['Enter']))
{
	
$pid=$_POST['pid'];
$sqlm = "SELECT pname from patient  where pid='$pid'";
$result5=mysqli_query($conn,$sqlm);
if(!$result5)
{
	echo"error in query";
}
else
{
while($row5=$result5->fetch_assoc())
{
	$_SESSION['pname']=$row5['pname'];
}
}
$dov=date('y-m-d');

$_SESSION['pid']=$pid;
$sql = "SELECT doa,roomno FROM patientadmission  where pid='$pid'";
$result=mysqli_query($conn,$sql);
if(!$result)
{
	echo"error in query";
}
else
{
while($row=$result->fetch_assoc())
{
$doa=$row['doa'];
$roomno=$row['roomno'];

$diff = abs(strtotime($doa) - strtotime($dov));
$period = floor($diff/(60*60*24));
}
}


$sqlw = "SELECT rent from room natural join roomspecial where roomno='$roomno'";
$result1=mysqli_query($conn,$sqlw);
if(!$result)
{
	echo"error in query";
}
else
{
while($row1=$result1->fetch_assoc())
{
	$mon= $row1['rent'];
}
}
$amt=$period*$mon;

$sqla="UPDATE patientadmission SET dov='{$dov}',period='{$period}',amt='{$amt}' WHERE pid='{$pid}'";

if ($conn->query($sqla) === TRUE) {
	

header("Location:bill.php");
} else {
    echo "Error updating record: " . $conn->error;
	
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
<header class="header-class"><h1>BILL SYSTEM</h1></header>
<div class="update-doc1">
<form action="" method="post">
<input type="text" name="pid" placeholder="Patient Id">

<input type="submit" name="Enter" value="Enter">

</form>
</div>
<div class="image-updatedoc"><img src="doctor-id-card.jpg" height="620" width="780"></div>
</body>
</html>