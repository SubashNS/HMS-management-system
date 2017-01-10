<?php require "../connection/connection.php" ?>


<?php session_start(); 
if(isset($_SESSION['nid']))
{}
else
{header("Location:vnurse1.php");}
?> 



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="stylesheeth.css"/>
<title>Untitled Document</title>
</head>

<body class="main-view">
<header class="header-classview"><h1>NURSE DETAILS</h1></header>
<div class="view-text">

<h3>Nurse Id:<span style="color:#000"><?php echo $_SESSION['nid'];?></span><h3><br/>
<h3>Name:<span style="color:#000;"><?php echo $_SESSION['nname']; ?></span></h3><br>
<h3>Gender:<span style="color:#000;"><?php echo $_SESSION['nsex']; ?></span></h3><br>
<h3>Salary:<span style="color:#000;"><?php echo $_SESSION['nsalary']; ?></span></h3><br>
<h3>Mobile No:<span style="color:#000;"><?php echo $_SESSION['nphno']; ?></span></h3><br>
<h3>House Name:<span style="color:#000;"><?php echo $_SESSION['nhsname']; ?></span></h3><br>
<h3>Living City:<span style="color:#000;"><?php echo $_SESSION['ncity']; ?></span></h3><br>

</div>
<div class="image-view"><img src="default.png" height="250" width="250"></div>




</body>
</html>