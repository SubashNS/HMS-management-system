<?php require"../connection/connection.php"; ?>

<?php 
if(isset($_POST['Register']))
{
$sqli="select pid from patient";
$result1=mysqli_query($conn,$sqli);
if(!$result1)
{
	echo "error in query";
}
while($row=$result1->fetch_assoc())
{
if(empty($row))
	{
	$pid='PID_1';
	}
	else
	{
	$predid=$row['pid'];
	$numpredid=substr($predid,4);
	$pid=(int)$numpredid+1;
	$pid='PID_'.$pid;
	
	}
}
$pname=$_POST['pname'];
$psex=$_POST['psex'];
$pphno=$_POST['pphno'];
$phsname=$_POST['phsname'];
$pcity=$_POST['pcity'];

$sql="INSERT INTO patient(pid,pname,psex,pphno,phsname,pcity) values('$pid','$pname','$psex','$pphno','$phsname','$pcity')";

if(!mysqli_query($conn,$sql))
	{
		echo "no record created";
	}
	else
	{   
		header("Location:ins1.php");
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
 <input type="text" name="pname" placeholder="Name" required="required" />
 <br><br>
Gender<br>
<input type="radio" name="psex"  value="male">male
<br>
<input type="radio" name="psex"  value="female">female<br>
<input type="text" name="pphno" placeholder="Contact No" required="required"><br>
<input type="text" name="phsname" placeholder="House Name" required="required" /><br>
<input type="text" name="pcity" placeholder="Living City" required="required" /><br>
<input type="submit" name="Register" formtarget="_blank" value="Register">
</form>
</div>
<div class="image-pat"><img src="doctor-with-a-patient.jpg" height="620" width="780"></div>
</body>
</html>