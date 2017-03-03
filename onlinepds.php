<?php
  session_start();
  $_SESSION['tname']="PDS";
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--<link href="css/bootstrap.min.css" rel="stylesheet" />-->
<link rel="stylesheet" type="text/css" href="css/styler.css" />

<style>
p
{
	margin-left:5em;
	font-weight:bold;
	color:white;
	font-size:17px;
}
input
{
	margin-left:7em;
	font-size:17px;
}
</style>
</head>
<body>
<div class="_maincontent">

<form name="oform" action="markvalidate.php" method="GET">
<p style="margin-top:5em">1.Which of the following is not a part of DBMS architecture?</p>
           <input type="radio" name="q1" value="a" />File level
           <input type="radio" name="q1" value="b"/>Physical level
		   <input type="radio" name="q1" value="c"/>Coceptual level
		   <input type="radio" name="q1" value="d"/>External level
<p>2.The property that describes an entity is called</p>
           <input type="radio" name="q2" value="a"/>Query
		   <input type="radio" name="q2" value="b"/>Attribute
		   <input type="radio" name="q2" value="c"/>File
		   <input type="radio" name="q2" value="d"/>Relationship
<p>3.Which of the folowing is a transaction state?</p>
           <input type="radio" name="q3" value="a"/>Suspended
		   <input type="radio" name="q3" value="b"/>Running
		   <input type="radio" name="q3" value="c"/>Commited
		   <input type="radio" name="q3" value="d"/>Resume
<p>4.Which of the followimg is not a property of transaction?</p>
           <input type="radio" name="q4" value="a"/>Consistency
		   <input type="radio" name="q4" value="b"/>Durability
		   <input type="radio" name="q4" value="c"/>Atomicity
		   <input type="radio" name="q4" value="d"/>Insertion
<p>5.The time required for the disk controller to position the read or write head is</p>
           <input type="radio" name="q5" value="a"/>run time
		   <input type="radio" name="q5" value="b"/>seek time
		   <input type="radio" name="q5" value="c"/>position time
		   <input type="radio" name="q5" value="d"/>save time<br/><br/><br/>
		   <input type="submit" class="regButt button" value="Submit">
		   
</form>
</div>
</body>
</html>