<?php require "../connection/connection.php" ?>


<?php 


if(isset($_POST['Enter']))
{
$pd=$_POST['pid'];
$rd=$_POST['roomno'];
$doa=date('y-m-d');
	$sql="INSERT INTO patientadmission(pid,roomno,doa) values('$pd','$rd','$doa')";

if(!mysqli_query($conn,$sql))
	{
		header("Location:innbk.php");
	}
	else
	{   
		header("Location:inbk.php");
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="stylesheeth.css"/>
<title>Untitled Document</title>
<style>
.header-class{
    padding: 1em;
    color: white;
    background-color:#006CE0;
    clear: left;
    text-align: center;
	font-family:Engravers MT;
}
.inspatadm-block{
	background-color:	#F08080;
	margin: left;
	height: 600px;
	width: 500px;
	position: absolute;
	top:130px;
	padding: 8px 20px;
	border-radius: 30px;
	padding-top: 2em;
	
    	
}

</style>
</head>

<body>
<header class="header-class"><h1>ROOM ALLOTMENT</h1></header>

<div class="inspatadm-block">

<form action="inspatientadmission.php" method="post">
<?php
 
$sql = "SELECT pid FROM patient";
$result = $conn->query($sql);

echo "<select name='pid'>";
while($row=$result->fetch_assoc()) {
    echo "<option value='" . $row['pid'] ."'>" . $row['pid'] ."</option>";
}

echo "</select>";

?>
<br>
<?php
 
$sql = "SELECT roomno FROM room";
$result = $conn->query($sql);

echo "<select name='roomno'>";
while($row=$result->fetch_assoc()) {
    echo "<option value='" . $row['roomno'] ."'>" . $row['roomno'] ."</option>";
}

echo "</select>";

?>

 <br>
<input type="submit" name="Enter"  value="Enter">
</form>
</div>
<div class="image-doc"><img src="kSvy4g8.jpg" height="620" width="780"></div>
</body>
</html>

