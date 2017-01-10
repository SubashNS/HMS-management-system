<?php require "../connection/connection.php" ?>


<?php session_start(); 
if(isset($_SESSION['pid']))
{}
else
{header("Location:vpatient1.php");}
?> 



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="stylesheeth.css"/>
<title>Untitled Document</title>
</head>

<header class="header-classview"><h1>PATIENT DETAILS</h1></header>
<div class="view-text">
<br><br>
<h3>Patient Id:<span style="color:#000;"><?php echo $_SESSION['pid'];?></span><h3><br/>
<h3>Name:<span style="color:#000;"><?php echo $_SESSION['pname'];?></span><h3><br/>
<h3>Gender:<span style="color:#000;"><?php echo $_SESSION['psex']; ?></span></h3><br>
<h3>Mobile No:<span style="color:#000;"><?php echo $_SESSION['pphno']; ?></span></h3><br>
<h3>House Name:<span style="color:#000;"><?php echo $_SESSION['phsname']; ?></span></h3><br>
<h3>Living City:<span style="color:#000;"><?php echo $_SESSION['pcity']; ?></span></h3><br>

</div>
<div class="image-view"><img src="default.png" height="250" width="250"></div>

</body>
</html>