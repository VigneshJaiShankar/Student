<?php
session_start();
?>
<html>
<head>
      <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta charset="UTF-8" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/styler.css" rel="stylesheet" />
    <title>SAS</title>
</head>
 <body>
   <?php
   require 'connect.inc.php';
   include 'logout.php';
   
   //insertion-------------------------------------------------------------------------------------------------------------------------------------------------
   
   if(isset($_GET['admissionno1']) && isset($_GET['studentregno1']) && isset($_GET['name']) && isset($_GET['advisor1']) && isset($_GET['year']) && isset($_GET['dept']))
     {
	 
	   $a    =  $_GET['admissionno1'];
       $reg  =  $_GET['studentregno1'];
	   $name =  $_GET['name'];
	   $adv  =  $_GET['advisor1'];
	   $year =  $_GET['year'];
	   $dept =  $_GET['dept'];

	   
	   $qry0="INSERT INTO stud (admission,rollno,name,advisor,year,dept) VALUES ('$a','$reg','$name','$adv','$year','$dept')";
	   
	   $qry5="INSERT INTO otmark (rollno,name,dept,year) VALUES ('$reg','$name','$dept','$year')";
        mysqli_query($conn,$qry5);
         
	   echo "<br/><br/><br/><br/><br/><br/>";
	   
	   if( empty($_GET['admissionno1']) || empty($_GET['studentregno1']) || empty($_GET['name']) || empty($_GET['advisor1']) || empty($_GET['year']) || empty($_GET['dept']))
		{
             print "<script type='text/javascript'>
	         window.alert('please enter all fields');
			 window.location='adminpage.php';
			 </script>";

        }
		
	   else if(mysqli_query($conn,$qry0))
	   { 
	       echo"<center>";
		   echo "<b><span style='font-size:20px'>New record created successfully.</span></b><br/>";
		   echo "<em><a href='adminpage.php'>enter marks using update section of this page(click to go to admin page)</a></em>";
		   echo"</center>";
       } 
	   
	   
	   
	   else
	   {   echo "<center>";
           echo "<b>This data already exists.<br/>Please check the registration number.</b>";
		   echo "</center>";

	   }
	   }
	    
	  
	//deletion-------------------------------------------------------------------------------------------------------------------------------------------------
       
     if(isset($_GET['studentregno3']))
      {
         $studreg=$_GET['studentregno3'];
	   $qry1="DELETE FROM stud WHERE rollno='$studreg'";
	   mysqli_query($conn,$qry1);
	   $qry2="DELETE FROM otmark WHERE rollno='$studreg'";
	   mysqli_query($conn,$qry2);
	   echo "<br/><br/><br/><br/><br/>";
	   if(empty($_GET['studentregno3']))
	   {
		
		  $advname=$_GET['advname1'];
		 $qry1="DELETE FROM advisor WHERE Advname='$advname'";
	     mysqli_query($conn,$qry1);
	     echo "<br/><br/><br/><br/><br/>";
		 if(empty($_GET['advname1']))
		 {
			echo"<script>window.alert('please enter the required field');
		      window.location='adminpage.php';
			  </script>"; 
		 }
	    else if(mysqli_affected_rows($conn)==1)
	    {
		   echo "<br/><br/><center><b><a href='adminpage.php' style='color:black'>Record deleted successfully <em>(links to admin page.)</em></a></b></center>";
	    }
	    else if(mysqli_affected_rows($conn)==0)
	    {
		   echo "<br/><br/><center><b><a href='adminpage.php' style='color:black'>Record not found.<em>(links to adminpage.)</em></a></b></center>";
        }
	   }
	   else if(mysqli_affected_rows($conn)==1)
	   {
		   echo "<br/><br/><center><b><a href='adminpage.php' style='color:black'>Record deleted successfully <em>(links to admin page.)</em></a></b></center>";
	   }
	   else if(mysqli_affected_rows($conn)==0)
	    {
		   echo "<br/><br/><center><b><a href='adminpage.php' style='color:black'>Record not found.<em>(links to adminpage.)</em></a></b></center>";
        }
	   
	   else
	   {
	     echo"<script>
               window.alert('please enter the required field');
		      window.location='adminpage.php';
			  </script>";
	    }
	  }
      
	  mysqli_close($conn);
	 ?> 
</body>
</html> 
	  
   