<?php require"../connection/connection.php"; ?>

<?php 

if(isset($_POST['Register']))
{
$sqli="select did from doctor";
$result1=mysqli_query($conn,$sqli);
if(!$result1)
{
	echo "error in query";
}
while($row=$result1->fetch_assoc())
{
if(empty($row))
	{
	$nid='DID_1';
	}
	else
	{
	$predid=$row['did'];
	$numpredid=substr($predid,4);
	$did=(int)$numpredid+1;
	$did='DID_'.$did;
	
	}
}
$dname=$_POST['dname'];
$dsex=$_POST['dsex'];
$dtype=$_POST['dtype'];
$dsalary=$_POST['dsalary'];
$dphno=$_POST['dphno'];
$dhsname=$_POST['dhsname'];
$dcity=$_POST['dcity'];

$sql="INSERT INTO doctor(did,dname,dtype,dsex,dsalary,dphno,dhsname,dcity) values('$did','$dname','$dtype','$dsex','$dsalary','$dphno','$dhsname','$dcity')";

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
<header class="header-class"><h1>DOCTOR RECORDS ENTRY</h1></header>

<div class="insdoc-block">
<form action="" method="post">
<input type="text" name="dname" placeholder="Name" required="required" /><br>
 Gender<br>
<input type="radio" name="dsex"  value="male">male<br>
<input type="radio" name="dsex"  value="female">female<br>
<select name="dtype">
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
<input type="text" name="dsalary" placeholder="Salary" required="required"><br>
<input type="text" name="dphno" placeholder="Contact No" required="required"><br>
<input type="text" name="dhsname" placeholder="House Name" required="required" /><br>
<input type="text" name="dcity" placeholder="Living City" required="required" /><br>
<input type="submit" name="Register" value="Register">
</form>
</div>
<div class="image-doc"><img src="doctorpaitnttalking.jpg" height="620" width="780"></div>
</body>
</html>