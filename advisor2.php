
<?php

  session_start();
 /* $advname=$_GET['username'];
  $advpass=$_GET['passwd'];
  //session_start();
  setcookie("advisorname",$advname,time()+86400,"/");
  setcookie("advisorpassword",$advpass,time()+86400,"/");
  //$_SESSION['advisor']=$advname;*/
 ?>
<html lang="en">
<head>
 <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta charset="UTF-8" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/styler.css" rel="stylesheet" />
    <title>SAS</title><link rel="stylesheet" type="text/css"  href="styler.css" />
	
</head>
<body>
  <?php include 'logout.php';
require 'connect.inc.php';
     
  ?>
    
  
	 <br/><br/>
   <div class="_maincontent">
    <div class="_adminpage">
	<h2><em>View details</em></h2><br/>
	<form name="advisor_form" action="advisorpage.php" method="GET">
        <input type="text" class="inputtext_reg" name="adv" placeholder="class advisor name*" /><br/>
 		<input type="text"  class="inputtext_reg" name="registerno" placeholder="registration no*" /><em>(leave empty to view entire list)</em><br/>
		<input type="Submit" class="regButt" style="color:white"  value="view list" />
	</form>	
      <h2><em>Update details</em></h2><br/>
    <form name="adminu_form" action="studupdate.php" method="GET">
	  <input type="text" class="inputtext_reg" name="studentregno2" placeholder="Student RegisterNumber*"/><br/>
	  <input type="text" class="inputtext_reg" name="mark1" placeholder="Mark1"/>
	  <input type="text" class="inputtext_reg" name="mark2" placeholder="Mark2"/><br/>
	  <input type="text" class="inputtext_reg" name="mark3" placeholder="Mark3"/>
	  <input type="text" class="inputtext_reg" name="mark4" placeholder="Mark4"/><br/>
	  <input type="text" class="inputtext_reg" name="mark5" placeholder="Mark5"/>
	  <input type="text" class="inputtext_reg" name="mark6" placeholder="Mark6"/><br/>
	  <input type="submit" class="regButt" style="color:white" value="Update">
	 </form>
    </div>	 
	</div>	
    	
 <?php include "barbottom.php"; ?>
 
</body>
</html>
	