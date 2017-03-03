<?php session_start(); ?>
<!Doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta charset="UTF-8" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/styler.css" rel="stylesheet" />
    <title>SAS</title></head>
<body>


<?php
   require 'connect.inc.php';
   include 'logout.php';
   echo "<br/><br/><br/><br/><br/>";
   
	 

   
   //student portal
   
   if(isset($_GET['admissionno']) && isset($_GET['regno']))
   {   
       GLOBAL $conn;
       $a=$_GET['admissionno'];
       $reg=$_GET['regno'];
	   
	   $qry="SELECT * FROM stud WHERE admission='$a' AND rollno='$reg'";
	   
	   $result=mysqli_query($conn,$qry);
      if(mysqli_num_rows($result)==1)
      {
		  $row=mysqli_fetch_assoc($result);
		  print "<center>";
		  echo '<div>';
		  print "<table border cellpadding=12>";
		  
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
		  
		  print "</table>";
		  echo '</div>';
          print "</center>";
	  }

      else if(empty($_GET['admissionno']) || empty($_GET['regno']))
      {
       print "<script type='text/javascript'>
	         window.alert('please enter all fields');
			 window.location='loginpage.php';
			 </script>";

      }	   
  
      else{  
	        echo "<center>";
	        echo "<h2><b>SORRY!!!</b></h2>";
	        echo "<em><a href='loginpage.php'> we cannot find your registration no .Check the entered strings again.(click this to go again to loginpage)</a></em>"; 
			echo "</center>";
			}
    	  
  }
  
  
	      
   
   mysqli_close($conn); 
  ?>
 </body>
 </html>