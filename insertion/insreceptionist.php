<?php require "../connection/connection.php" ?>
<?php 
if(isset($_POST['Register']))
{
$sqli="select rid from receptionist";
$result1=mysqli_query($conn,$sqli);
if(!$result1)
{
	echo "error in query";
}
while($row=$result1->fetch_assoc())
{
if(empty($row))
	{
	$rid='RID_1';
	}
	else
	{
	$predid=$row['rid'];
	$numpredid=substr($predid,4);
	$rid=(int)$numpredid+1;
	$rid='RID_'.$rid;
	
	}
}
$rname=$_POST['rname'];
$rpassword=$_POST['rpassword'];
$rsex=$_POST['rsex'];
$rsalary=$_POST['rsalary'];
$rphno=$_POST['rphno'];
$rhsname=$_POST['rhsname'];
$rcity=$_POST['rcity'];

$sql="INSERT INTO receptionist(rid,rname,rpassword,rsex,rsalary,rphno,rhsname,rcity) values('$rid','$rname','$rpassword','$rsex','$rsalary','$rphno','$rhsname','$rcity')";

if(!mysqli_query($conn,$sql))
	{
		echo "no record created";
	}
	else
	{   
		echo "record created successfully";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">
  <input type="text" name="rname" placeholder="Name" required="required" /><br>
  <input type="password" name="rpassword" placeholder="Password" required="required"><br>
Gender<br>br
<input type="radio" name="rsex"  value="male">male<br>
<input type="radio" name="rsex"  value="female">female<br>
<input type="text" name="rsalary" placeholder="Salary" required="required"><br>
<input type="text" name="rphno" placeholder="Contact No" required="required"><br>
<input type="text" name="rhsname" placeholder="House Name" required="required" /><br>
<input type="text" name="rcity" placeholder="Living City" required="required" /><br>
<input type="submit" name="Register" formtarget="_blank" value="Register">
</form>

</body>
</html>