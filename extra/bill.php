<?php require "../connection/connection.php" ?>
<?php session_start(); 
if(isset($_SESSION['pid']))
{}
else
{header("Location:bill1.php");}
?> 







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
body {
  background: rgb(204,204,204); 
}

.p {
    border-top-style: dotted;
    border-right-style: dotted;
    border-bottom-style: dotted;
    border-left-style: dotted;
	border-width:thick;
	width:60%;
	margin-left:20%;
	margin-top:5%;
	background-color:#CCC;
	
}

#mainDiv {
  height: 100px;
  width: 80px;
  position: relative;
  border-bottom: 2px solid #f51c40;
  background: #3beadc;
}

#borderLeft {
  border-left: 2px solid #f51c40;
  position: absolute;
  top: 50%;
  bottom: 0;
}
.button {
    background-color:#999;
    border: none;
    color:#000;
	margin-left:85%;
    padding:1%;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

.button1 {
    background-color:#999;
    border: none;
    color:#000;
	
    padding:1%;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

Try it Yourself »

#ds{
	alignment-adjust:middle;
}
page[size="A4"] {
  background: white;
  width: 21cm;
  height: 29.7cm;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
@media print {
  body, page[size="A4"] {
    margin: 0;
    box-shadow: 0;
  }
}
</style>
</head>

<body >
<page size="A4">
<?php
$tot1=0;
$pid=$_SESSION['pid'];
$pname=$_SESSION['pname'];
$sqlw = "select bid,code,name,quantity,amt,date from bill natural join medicine where pid='$pid'";
$result1=mysqli_query($conn,$sqlw);


?>
<h1 align="center"><strong>HMS MEDICAL BILL</strong></h1>
<h3 align="left"><strong>Patient id:<?php echo $pid; ?></strong></h3>
<h3 align="left"><strong>Patient Name:<?php echo $pname; ?></strong></h3>


<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<table align="center" border="2">
  <thead>
    <tr>
      <th>billid</th>
      <th>Medicine Name</th>
      <th>Quantity</th>
      <th>Amount</th>
    </tr>
  </thead>
  <tbody>
    <?php
	  
	  $tot=0;
      while($row1=$result1->fetch_assoc())
     {	  $bid=$row1['bid'];
	 	  $code=$row1['code'];
		  $quantity=$row1['quantity'];
		  $amt=$row1['amt'];
		  $date=$row1['date'];
          echo "<tr><td>{$row1['bid']}</td><td>{$row1['name']}</td><td>{$row1['quantity']}</td><td>{$row1['amt']}</td></tr>\n";
		  $tot=$tot+$row1['amt'];
        	
      }
	  
    ?>
  </tbody>
</table>
<pre >                                                                                      <strong >TOTAL:<?php echo"$tot"; ?></strong></pre>

<?php 
$sqla = "select pname,doa,dov,roomno,period,amt from patientadmission natural join patient where pid='$pid'";
$result2=mysqli_query($conn,$sqla);


?>
<table align="center" border="2">
  <thead>
    <tr>
      <th>Patient Name</th>
      <th>Date of Admission</th>
      <th>Date of Vaccating</th>
      <th>Room No</th>
      <th>Period</th>
      <th>Amount</th>
    </tr>
  </thead>
  <tbody>
    <?php
	 
	  
      while($row2=$result2->fetch_assoc())
     {
		 $doa=$row2['doa'];
		 $dov=$row2['dov'];
		 $roomno=$row2['roomno'];
		 $period=$row2['period'];
		 $amt=$row2['amt'];
          echo "<tr><td>{$row2['pname']}</td><td>{$row2['doa']}</td><td>{$row2['dov']}</td><td>{$row2['roomno']}</td><td>{$row2['period']}</td><td>{$row2['amt']}</td></tr>\n";
		  $tot1=$row2['amt'];
     }
	  
    ?>
  </tbody>
</table>


<h3 class="p" align="center"><strong>TOTAL AMOUNT:<?php echo $tot+$tot1; ?></strong></h3>
<br />
<br />
<br />
<br />
<form action="" method="post">
<input type="submit" class="button" name="paid" value="paid">
<input type="submit" class="button1" name="cancel" value="cancel">


</form>
</page>
</body>
</html>



<?php 
if(isset($_POST['cancel']))
{
header("Location:../login/menu.php");
}

if(isset($_POST['paid']))
{
$sql="INSERT INTO bill1(bid,pid,code,quantity,amt,date) values('$bid','$pid','$code','$quantity','$amt','$date')";
if(!mysqli_query($conn,$sql))
	{
		echo "no record created";
	}
	else
	{   
		echo"success";
	}
	
$sql1="delete from bill where pid='$pid'";
if(!mysqli_query($conn,$sql1))
	{
		echo "no record created";
	}
	else
	{   
		echo"success";
	}
	
$sqla="INSERT INTO patientadmission1(pid,doa,dov,roomno,period,amt) values('$pid','$doa','$dov','$roomno','$period','$amt')";
if(!mysqli_query($conn,$sqla))
	{
		echo "no record created";
	}
	else
	{   
		echo"success";
	}
	
$sql2="delete from patientadmission where pid='$pid'";
if(!mysqli_query($conn,$sql2))
	{
		echo "no record created";
	}
	else
	{   
		echo"success";
	}
header("Location:../login/menu.php");
}






?>
