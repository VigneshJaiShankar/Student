

<!DOCTYPE HTML>
<html>
    <head>
       <link href="css/bootstrap.min.css" rel="stylesheet" />
       <link href="css/styler.css" rel="stylesheet" />
       <meta name="viewport" content="width=device-width,initial-scale=1.0" />
       <meta charset="UTF-8" />
       <title>SAS</title>
    </head>

    <body>

        <?php

            require 'connect.inc.php';
            include 'logout.php';
            echo "<br/><br/>";
        
        $faculty=$_GET['allot-view'];
        $qry0="SELECT dept FROM stud WHERE advisor='$faculty'";
        $department=mysqli_query($conn,$qry0);
        $row1=mysqli_fetch_assoc($department);
        $dep=$row1['dept'];
        
        $qry="SELECT * FROM advisor WHERE Advname='$faculty' AND Dept='$dep'";
        $result=mysqli_query($conn,$qry) or die(mysqli_error());
        
        
           echo "<br/><br/><br/><br/>";
            echo"<center>";
            print "<table class='table table-condensed table-hover'>";
       if(mysqli_num_rows($result))
      {
		  $row=mysqli_fetch_assoc($result);

		  
		   print "<tr><th>Name</th><td>".$row["Advname"]."</td></tr>"; 
		   print "<tr><th>Department</th><td>" .$row["Dept"]."</td></tr>";
		   print "<tr><th>Year</th><td>".$row["Year"]."</td></tr>";
		   print "<tr><th>Section</th><td>".$row["Section"]."</td></tr>";
		  

		  
		   print "</table>";
	  }

       /* else
             
         {   
             
             echo "<script>
                   window.alert('Please enter valid details');
                   window.location='hod-allotment.php';
                   </script>";
         }
         */
     
    echo "</center>";
    
    echo "<br/><br/><br/><br/><br/>";
      
    include 'barbottom.php';
    
    
  ?>
    </body>
</html>
    
        
