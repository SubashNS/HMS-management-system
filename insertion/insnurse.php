<?php require "../connection/connection.php" ?>
<?php 
if(isset($_POST['Register']))
{
$sqli="select nid from nurse";
$result1=mysqli_query($conn,$sqli);
if(!$result1)
{
	echo "error in query";
}
while($row=$result1->fetch_assoc())
{
if(empty($row))
	{
	$nid='NID_01';
	}
	else
	{
	$predid=$row['nid'];
	$numpredid=substr($predid,4);
	$nid=(int)$numpredid+01;
	$nid='NID_'.$nid;
	
	}
}

$nname=$_POST['nname'];
$nsex=$_POST['nsex'];
$nsalary=$_POST['nsalary'];
$nphno=$_POST['nphno'];
$nhsname=$_POST['nhsname'];
$ncity=$_POST['ncity'];

$sql="INSERT INTO nurse(nid,nname,nsex,nsalary,nphno,nhsname,ncity) values('$nid','$nname','$nsex','$nsalary','$nphno','$nhsname','$ncity')";

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
<link type="text/css" rel="stylesheet" href="stylesheeth.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<header class="header-class"><h1>NURSE RECORDS ENTRY</h1></header>
<div class="insdoc-block">
<form action="" method="post">
  <input type="text" name="nname" placeholder="Name" required="required" /><br>
Gender<br>
<input type="radio" name="nsex"  value="male">male<br>
<input type="radio" name="nsex"  value="female">female<br>
<input type="text" name="nsalary" placeholder="Salary" required="required"><br>
<input type="text" name="nphno" placeholder="Contact No" required="required"><br>
<input type="text" name="nhsname" placeholder="House Name" required="required" /><br>
<input type="text" name="ncity" placeholder="Living City" required="required" /><br>
<input type="submit" name="Register" formtarget="_blank" value="Register">
</form>
</div>
<div class="image-nurse"><img src="nurse1.jpg" height="620" width="780"></div>

</body>
</html>