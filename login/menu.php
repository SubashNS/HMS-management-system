<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="stylesheeth.css"/>
<title>menu</title>
<style>
.insert-b{
	background-color:#F2F0EF;
	height:150px;
	width: 150px;
	position: absolute;
	top: 100px;
	left: 200px;
	border-radius:100%;
	text-color:#006CE0;
	border: 2px solid #006CE0 ;	
}
.view-b{
	background-color:#F2F0EF;
	height:150px;
	width: 150px;
	position: absolute;
	top: 300px;
	left: 200px;
	border-radius:100%;
	text-color:#006CE0;
	border: 2px solid #006CE0 ;	
}
.update-b{
	background-color:#F2F0EF;
	height:150px;
	width: 150px;
	position: absolute;
	top: 500px;
	left: 200px;
	border-radius:100%;
	text-color:#006CE0;
	border: 2px solid #006CE0 ;	
}

.center-textbutton1{
	text-align:center;
	padding-top:40px;
	font-family:Hanzel;
	color: #F2F0EF;

}
.app-b{
	background-color:#006CE0;
	height:150px;
	width: 150px;
	position: absolute;
	top: 100px;
	left: 600px;
	border-radius:100%;
	text-color:#006CE0;
	border: 2px solid #006CE0 ;	
}


.room-b{
	background-color:#006CE0;
	height:150px;
	width: 150px;
	position: absolute;
	top: 300px;
	left: 600px;
	border-radius:100%;
	text-color:#006CE0;
	border: 2px solid #006CE0 ;	
}
.med-b{
	background-color:#32CD32;
	height:150px;
	width: 150px;
	position: absolute;
	top: 500px;
	left: 600px;
	border-radius:100%;
	text-color:#006CE0;
	border: 2px solid #006CE0 ;	
}
.center-textbutton2{
	text-align:center;
	padding-top:40px;
	font-family:Hanzel;
	color:#32CD32;

}

.bill-b{
	background-color:#000000;
	height:150px;
	width: 150px;
	position: absolute;
	top: 300px;
	left: 1000px;
	border-radius:100%;
	text-color:#32CD32;
	border: 2px solid #32CD32 ;	
}
.header-class1{
    padding:0.1%;
	margin-bottom:auto;
    color: white;
    background-color:#006CE0;
    clear: left;
    text-align: center;
	font-family:Engravers MT;
}
.menu-login{
	background-color:#87cefa;
}
</style>

</head>

<body class="menu-login">
<header class="header-class1"><h1>HMS HOSPITAL</h1></header>

<!--button insert-->
<div class="insert-b"><h3 class="center-textbutton"><a href="menu_ins.php">INSERT</a></h3></div>
<!--button view-->
<div class="view-b"><h3 class="center-textbutton"><a href="menu_view.php">VIEW</a></h3></div>
<!--button update-->
<div class="update-b"><h3 class="center-textbutton"><a href="menu_update.php">UPDATE</a></h3></div>
<!--button appointment-->
<div class="app-b"><h4 class="center-textbutton1"><a href="../insertion/insrecord.php"><span style="color:#FFF">APPOINTMENT</span></a></h4></div>
<!--button room book-->
<div class="room-b"><h4 class="center-textbutton1"><a href="../insertion/inspatientadmission.php"><span style="color:#FFF;"> ROOM BOOK</span></a></h4></div>
<!--button medicines-->
<div class="med-b"><h4 class="center-textbutton1"> <a href="../insertion/insbill.php"><span style="color:#FFF">PHARMACY</span></a></h4></div>
<!--button bill-->
<div class="bill-b"><h4 class="center-textbutton2"><a href="../extra/bill1.php"><span style="color:#0C0"> BILL</span></a></h4></div>



</body>
</html>