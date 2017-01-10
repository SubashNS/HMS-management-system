<?php require"../connection/connection.php"; ?>
<?php

if(isset($_POST['Login']))
{
	
$id=$_POST['rid'];
$pw=$_POST['rpassword'];
$s="SELECT * FROM receptionist WHERE rid='$id' AND rpassword='$pw'";

$result=$conn->query($s);
if(!($result->num_rows >0))

header("Location:login.php");
else
{
while($row=$result->fetch_assoc())
{
header("Location:loader.php");
}
}
}

?>

<!DOCTYPE html>
<html>
	<head>
	<link type="text/css" rel="stylesheet" href="stylesheeth.css"/>
	
       
		
		<title>front end</title>
	
	</head>
<body class="bg-login">

<header class="header-class"><h1>LOGIN</h1></header>

<div class="login-block">
<form action="" method="post">
  <br>
  <input type="text" name="rid" placeholder="USER-ID">
  <br>
  <br>
  <input type="password" name="rpassword" placeholder="PASSWORD">
  <br><br>
  <input type="submit" name="Login" value="Login">

</form>

</div>


</body>

</html>