<?php require"../connection/connection.php"; ?>

<?php 


if(isset($_POST['Enter']))
{
$date=date('y-m-d');
$pd=$_POST['pid'];
$qty=$_POST['qty'];
$code=$_POST['code'];
$sqlw = "SELECT price from medicine where code='$code'";

$result1=mysqli_query($conn,$sqlw);
if(!$result1)
{
	echo"error in query";
}
else
{
while($row1=$result1->fetch_assoc())
{
	$price= $row1['price'];
}
}
$amt=$price*$qty;	
$sql="INSERT INTO bill(pid,code,quantity,amt,date) values('$pd','$code','$qty','$amt','$date')";

if(!mysqli_query($conn,$sql))
	{
		echo "error";
	}
	else
	{   
		echo "Successfully entered";
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
<header class="header-class"><h1>PHARMACY</h1></header>

<div class="inspat-block">
<form action="" method="post">
<?php
 
$sql = "SELECT pid FROM patient";
$result = $conn->query($sql);

echo "<select name='pid'>";
while($row=$result->fetch_assoc()) {
    echo "<option value='" . $row['pid'] ."'>" . $row['pid'] ."</option>";
}

echo "</select>";

?>
<br />
<?php
 
$sql = "SELECT code FROM medicine";
$result = $conn->query($sql);

echo "<select name='code'>";
while($row=$result->fetch_assoc()) {
    echo "<option value='" . $row['code'] ."'>" . $row['code'] ."</option>";
}

echo "</select>";

?>

<br />
<input type="text" name="qty" placeholder="Quantity">
<br />
<input type="submit" name="Enter" value="Enter" />


</form>
</div>
<div class="image-doc"><img src="742-pharmacyjpg.jpg" height="620" width="790"></div>
</body>
</html>