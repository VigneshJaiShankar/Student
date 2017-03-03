

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
        
        $faculty=$_GET['allotfac'];
        $sec=$_GET['allotsec'];
        
        $qry="UPDATE advisor SET Section='$sec' WHERE Advname='$faculty' ";
        
       $result1=mysqli_query($conn,$qry);
    
        
        
        
        if(mysqli_num_rows($result1))
          {
           $qry0="UPDATE stud SET advisor='$faculty' WHERE section='$sec'";
           $result2=mysqli_query($conn,$qry0);
               if(mysqli_num_rows($result2))
        {
            echo "<script>
                  window.alert('Updated Successfully');
                  window.location='hod-allotment.php';
                  </script>";
        }
        }
        
        else
        {
            echo "<script>
                  window.alert('Please check the entered details');
                  window.location='hod-allotment.php';
                  </script>";
            
        }
        
  
    include 'barbottom.php';
        
        
    ?>
        
    </body>
</html>