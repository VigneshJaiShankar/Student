<?php 
 session_start();
?>
<html>
<head>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
 <link rel="stylesheet" type="text/css" href="css/styler.css" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  
  <?php
    require 'connect.inc.php';
	include 'logout.php';
    echo "<br/>";
    GLOBAL $conn;
	$username=$_SESSION['user'];
    $password=$_SESSION['pass'];
	echo " <br/><strong><a href='studentpage.php' style='margin-left:1200px ; font-size:20px'>Back</a></strong><br/><br/><br>";
	if(isset($_GET['test']))
		header('LOCATION:studentpage1.php');
	else if(isset($_GET['view']))
    {
	   
	   $qry="SELECT * FROM stud WHERE admission='$username' AND rollno='$password'";
	   $qry1="SELECT * FROM otmark WHERE rollno='$password'";
	   $result=mysqli_query($conn,$qry);
	   $result1=mysqli_query($conn,$qry1);
      if((mysqli_num_rows($result)==1) && (mysqli_num_rows($result1)==1))
      {
	      
		  $row=mysqli_fetch_assoc($result);
		  $row1=mysqli_fetch_assoc($result1);
		  print "<center>";
		  echo '<div>';
		  print "<table class='table table-condensed table-hover'>";
		  
		  print "<tr>"; print "<th>Name</th><td><b>".$row["name"]."</b></td>";print "</tr>";
		  print "<tr>"; print "<th>Regno</th><td><b>" .$row["rollno"]."</b></td>";print "</tr>";
		  print "<tr>"; print "<th>Year</th><td>".$row["year"]."</td>";print "</tr>";
		  print "<tr>"; print "<th>Department</th><td>".$row["dept"]."</td>";print "</tr>";
		  print "<tr>"; print "<th>Mark 1</th><td>".$row["mark1"]."</td>";print "</tr>";
		  print "<tr>"; print "<th>Mark 2</th><td>".$row["mark2"]."</td>";print "</tr>";
		  print "<tr>"; print "<th>Mark 3</th><td>".$row["mark3"]."</td>";print "</tr>";
		  print "<tr>"; print "<th>Mark 4</th><td>".$row["mark4"]."</td>";print "</tr>";
		  print "<tr>"; print "<th>Mark 5</th><td>".$row["mark5"]."</td>";print "</tr>";
		  print "<tr>"; print "<th>Mark 6</th><td>".$row["mark6"]."</td>";print "</tr>";
		  print "<tr>"; print "<th>Total</th><td>".$row["total"]."</td>";print "</tr>";
		  print "<tr>"; print "<th>Percentage</th><td>".$row["percentage"]."</td>";print "</tr>";
		  print "<tr>"; print "<th>Rank</th><td>".$row["Rank"]."</td>";print "</tr>";
		  print "<tr>"; print "<th colspan=\"2\"><center>ONLINE TEST DETAILS</center></th>";print "</tr>";
		  print "<tr>"; print "<th>DBMS</th><td>".$row1["DBMS"]."</td>";print "</tr>";
		  print "<tr>"; print "<th>TOC</th><td>".$row1["TOC"]."</td>";print "</tr>";
		  print "<tr>"; print "<th>CA</th><td>".$row1["CA"]."</td>";print "</tr>";
		  print "<tr>"; print "<th>PDS</th><td>".$row1["PDS"]."</td>";print "</tr>";
		  print "<tr>"; print "<th>Total</th><td>".$row1["Total"]."</td>";print "</tr>";
		  print "<tr>"; print "<th>Rank</th><td>".$row1["Rank"]."</td>";print "</tr>";
		  
		  print "</table>";
		  echo '</div>';
          print "</center>";
	  }
	  else
	  {  
	        echo "<center>";
	        echo "<h2><b>SORRY!!!</b></h2>";
	        echo "<em><a href='newloginpage.php'> we cannot find your registration no .Check the entered strings again.(click this to go again to loginpage)</a></em>"; 
			echo "</center>";
	  }
       
    	  
    }
	mysqli_close($conn);
?>
</body>
</html>