
<!DOCTYPE HTML>
<html>
 <head>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/styler.css" rel="stylesheet" />
    <title>SAS</title>     
</head>
    
<body>
    <?php
    
        require 'connect.inc.php';
        include 'logout.php';
        echo "<br/><br/><br/>";

       if(isset($_GET['hodfac'])&& isset($_GET['hoddept']))
        
      {
            $faculty=$_GET['hodfac'];
            $dept=$_GET['hoddept'];
            //$qry1="SELECT * from hod WHERE Username='$hod_name'";
            //$department=mysqli_query($conn,$qry1);
            //$Dept=mysqli_fetch_assoc($department);
          
            $qry="SELECT * from stud WHERE advisor='$faculty'AND dept='$dept'";
            $result=mysqli_query($conn,$qry);
    
            echo "<br/><br/><br/><br/>";
            echo"<center>";
            print "<table class='table table-hover table-condensed'>";
        if($result)
        {

       if(mysqli_num_rows($result)>=1)
      {
		  while($row=mysqli_fetch_array($result))
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
		   print "</tr>";
		  }
		  
		   print "</table>";
	  }
        }
         /*else
             
         {   
             
             echo "<script>
                   window.alert('Please enter valid details');
                   window.location='hod-facresults.php';
                   </script>";
         }*/
         
     }
    echo "</center>";
    
    echo "<br/><br/><br/><br/><br/>";
      
    include 'barbottom.php';
    
    
  ?>
    </body>
</html>
    