<?php require "../connection/connection.php" ?>
<?php 
if(isset($_POST['Enter']))
{
$mcode=$_POST['mcode'];
$mname=$_POST['mname'];
$mprice=$_POST['mprice'];


$sql="INSERT INTO medicine(code,name,price) values('$mcode','$mname','$mprice')";

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
<input type="text" name="mcode" placeholder="Medicine Code" required="required" /><br>
<input type="text" name="mname" placeholder="Medicine Name" required="required"><br>
<input type="text" name="mprice" placeholder="Price" required="required"><br>

<input type="submit" name="Enter" formtarget="_blank" value="Enter">
</form>

</body>
</html>