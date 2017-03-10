
<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/styler.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>SAS</title>
</head>
<body>
   <?php
      require 'connect.inc.php';
	  include 'logout.php';
	  echo "<br/><br/><br/>";
	 //echo "<strong><a href='newloginpage.php' style='margin-left:1150px ; font-size:20px'>Logout</a></strong>";
	  
	  
	  if(empty($_GET['adv']) && empty($_GET['registerno']))  //validation
      {
       print "<script type='text/javascript'>
	         window.alert('please enter all fields');
			 window.location='advisor2.php';
			 </script>";

      }
	  
	   elseif(empty($_GET['adv']))
      {
       print "<script type='text/javascript'>
	         window.alert('please enter advisor name');
			 window.location='advisor2.php';
			 </script>";

      }
	  
	  //to view full list-----------------------------------------------------------------------------------------------------------------------------
	  elseif(isset($_GET['adv']) && empty($_GET['registerno']))
   {   
       //if($_SESSION['advisor']==$_GET['adv']){ 
       GLOBAL $conn;
	   $a=$_GET['adv'];
	   
	   $qry1="SELECT * FROM stud WHERE advisor='$a'";
	   $qry3="SELECT * FROM otmark WHERE rollno='$reg'"; 
	   $result1=mysqli_query($conn,$qry1);
	   $result2=mysqli_query($conn,$qry3);
	   
	   echo "<br/><br/><br/>";
	   
       if(($result1=mysqli_query($conn,$qry1)) && ($result2=mysqli_query($conn,$qry3)))
      {
		 print "<table class='table table-condensed table-hover'>"; 
		 while(($row=mysqli_fetch_assoc($result1)) && ($row2=mysqli_fetch_assoc($result2)))
         { 
	       print "<tr>";
		   print "<th>Name</th><td>".$row["name"]."</td>";
		   print "<th>Regno</th><td>" .$row["rollno"]."</td>";
		   print "<th>Year</th><td>".$row["year"]."</td>";
		   print "<th>Department</th><td>".$row["dept"]."</td>";
		   print "<th>Mark 1</th><td>".$row["mark1"]."</td>";
		   print "<th>Mark 2</th><td>".$row["mark2"]."</td>";
		   print "<th>Mark 3</th><td>".$row["mark3"]."</td>";
		   print "<th>Mark 4</th><td>".$row["mark4"]."</td>";
		   print "<th>Mark 5</th><td>".$row["mark5"]."</td>";
		   print "<th>Mark 6</th><td>".$row["mark6"]."</td>";
		   print "<th>Total</th><td>".$row["total"]."</td>";
		   print "<th>Percentage</th><td>".$row["percentage"]."</td>";
		   print "<th>Rank</th><td>".$row["Rank"]."</td>";
		   print "<th colspan=\"2\"><center>ONLINE TEST DETAILS</center></th>";
		   print "<th>DBMS</th><td>".$row2["DBMS"]."</td>";
		   print "<th>TOC</th><td>".$row2["TOC"]."</td>";
		   print "<th>CA</th><td>".$row2["CA"]."</td>";
		   print "<th>PDS</th><td>".$row2["PDS"]."</td>";
		   print "<th>Total</th><td>".$row2["Total"]."</td>";
		   print "<th>Rank</th><td>".$row2["Rank"]."</td>";
		   print "</tr>";
		  }
		  print "</table>";
		  
	  }
	 // } 
	  
	  
	  /*else{
		  echo"<script>
		       window.alert('you are not authorised to use this account');
			   window.location='advisor2.php';
	  </script>";}*/
	  
			   
}

      	   
	 
  
          	  
  
	


	  //to view a single student-------------------------------------------------------------------------------------------
	  if(!empty($_GET['registerno']) && !empty($_GET['adv']))
      {   
	 // if($_SESSION['advisor']==$_GET['adv']){       //remove
	   $a=$_GET['adv'];
       $reg=$_GET['registerno'];
	   
	   $qry="SELECT * FROM stud WHERE advisor='$a' AND rollno='$reg'";
	   $qry2="SELECT * FROM otmark WHERE rollno='$reg'";
	   $result=mysqli_query($conn,$qry);
	   $result1=mysqli_query($conn,$qry2);
	   echo"<br/><br/><br/>";
	   
      if((mysqli_num_rows($result)==1) && (mysqli_num_rows($result)==1))
      {
		  $row=mysqli_fetch_assoc($result);
		  $row1=mysqli_fetch_assoc($result1);
		  print "<center>";
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
          print "</center>";
	  }
	  
	  elseif(mysqli_affected_rows($conn)==0)
	  {  
	        echo "<center>";
	        echo "<h2><b>SORRY!!!</b></h2>";
	        echo "<em><a href='advisor2.php'> we cannot find this student in your class details .Check the entered strings again.(click this to go to previous page )</a></em>"; 
			echo "</center>";
			}
			
	  }	
		 
	  else{
		  echo"<script>
		       window.alert('you are not authorised to use this account');
			   window.location='advisor2.php';
	  </script>";
	  }
	 
			
       
	
	
	
	  
	  
	  
	  
	   
	  echo"<br/>";
	 include 'barbottom.php'; 
	mysqli_close($conn);    
  ?>
</body>

</html>	 
	  