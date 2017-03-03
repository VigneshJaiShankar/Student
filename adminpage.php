<?php 
   session_start();
  /*$uname=$_GET['username'];
  $pass=$_GET['passwd'];
  session_start();
  setcookie("username",$uname,time()+86400,"/");
  setcookie("password",$pass,time()+86400,"/");
  $_SESSION['admin']=$uname;*/
 ?>
<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta charset="UTF-8" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/styler.css" rel="stylesheet" />
    <title>SAS</title></head>
<body>
<?php 
include 'logout.php';
?>
<br/>
<div class="_maincontent">
 <div class="_adminpage">
   <h2 style="padding-top:3em"> <em>Add a Student or Faculty</em></h2>
   <form name="adminp_form" action="admindata.php"  method="GET">
      <h2><em>Student</em></h2>
      <input type="text" class="inputtext_reg" name="admissionno1" placeholder="Admission Number*"/>
	  <input type="text" class="inputtext_reg" name="studentregno1" placeholder="Student RegisterNumber*"/><br/>
	  <input type="text" class="inputtext_reg" name="name" placeholder="Name*"/>
	  <input type="text" class="inputtext_reg" name="advisor1" placeholder="Advisor Name*"/><br/>
	  <input type="text" class="inputtext_reg" name="year" placeholder="Year*"/>
	  <input type="text" class="inputtext_reg" name="dept" placeholder="Department*"/>
       <input type="submit" class="regButt" style="color:white" value="ADD">
   </form>
   <form name="adminf_form" action="admindata2.php" method="GET">
      <h2><em>Faculty</em></h2>
	  <input type="text" class="inputtext_reg" name="advname" placeholder="Advisor Name*"/><br/>
	  <input type="text" class="inputtext_reg" name="usname" placeholder="Username*"/><br/>
	  <input type="text" class="inputtext_reg" name="passw" placeholder="Password*"/>
	  <input type="submit" class="regButt" style="color:white" value="ADD">
	</form>
   <form name="admind_form" action="admindata.php" method="GET">
	  <h2><em>Delete Record</em></h2>
	  <input type="text" class="inputtext_reg" name="studentregno3" placeholder="StudentRegisterNumber*"/>
	  <input type="text" class="inputtext_reg" name="advname1" placeholder="AdvisorName*"/>
	  <input type="submit" class="regButt" style="color:white" value="Delete">
   </form>
 </div>
 </div>
 <?php 
 //echo "<br><br><br><br>";
 include 'barbottom.php';
 ?>
 
</body>
</html>
