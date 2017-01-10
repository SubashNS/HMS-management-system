<?php require"../connection/connection.php"; ?>

<?php 


if(isset($_POST['Enter']))
{
$date=date('y-m-d');
$pd=$_POST['pid'];
$des=mysql_real_escape_string($_POST['des']);
$dd=$_POST['did'];
$rd=$_POST['rid'];	
$sql="INSERT INTO record(date,pid,description,did,rid) values('$date','$pd','$des','$dd','$rd')";

if(!mysqli_query($conn,$sql))
	{
		echo "error";
	}
	else
	{   
		header("Location:insu.php");
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" rel="stylesheet" href="stylesheeth.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
.record-block{
	background-color:#DC143C;
	margin: auto;
	height: 500px;
	width: 600px;
	position: relative;
	top:40px;
	border-radius: 30px;
	padding-top: 2em;}
	
.header-class{
    padding: 1em;
    color: white;
    background-color:#006CE0;
    clear: left;
    text-align: center;
	font-family:Engravers MT;
}

</style>
</head>

<body>
<header class="header-class"><h1>APPOINTMENT</h1></header>
<div class="record-block">
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

<textarea style="padding:2%; margin-left:3%;" rows="3" cols="25" name="des" placeholder="Description"></textarea>
<br />
<?php
 
$sql = "SELECT did FROM doctor";
$result = $conn->query($sql);

echo "<select name='did'>";
while($row=$result->fetch_assoc()) {
    echo "<option value='" . $row['did'] ."'>" . $row['did'] ."</option>";
}

echo "</select>";

?>
<br />
<?php
 
$sql = "SELECT rid FROM receptionist";
$result = $conn->query($sql);

echo "<select name='rid'>";
while($row=$result->fetch_assoc()) {
    echo "<option value='" . $row['rid'] ."'>" . $row['rid'] ."</option>";
}

echo "</select>";


?>
<br />
<input type="submit" name="Enter" value="Enter" />


</form>
</div>
</body>
</html>