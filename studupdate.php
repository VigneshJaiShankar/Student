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
 include 'navigation.php';
 require 'connect.inc.php';
 include 'ranking.php';
 GLOBAL $conn;
//update operation-----------------------------------------------------------------------------------------------------------------------------------------

     if(isset($_GET['studentregno2']) && isset($_GET['mark1']) && isset($_GET['mark2']) && isset($_GET['mark3']) &&isset($_GET['mark4']) && isset($_GET['mark5']) && isset($_GET['mark6']))
	 {
        $studentreg=$_GET['studentregno2'];
	   $mark1 = $_GET['mark1'];
	   $mark2 = $_GET['mark2'];
	   $mark3 = $_GET['mark3'];
	   $mark4 = $_GET['mark4'];
	   $mark5 = $_GET['mark5'];
	   $mark6 = $_GET['mark6'];
	   $total = $mark1+$mark2+$mark3+$mark4+$mark5+$mark6;
	   $percentage = ($total/600)*100; 
	     //--------------------------------------------------------------only positive marks accepted---------------------------------------------------------
	   
	   if($mark1 >0 && $mark1<=100 && $mark2 >0 && $mark2<=100 && $mark3 >0 && $mark3<=100&& $mark4>0 && $mark4<=100 && $mark5>0 && $mark5<=100 && $mark6 >0 &&$mark6<=100)
	  {
	   
	   
	  $qry="UPDATE stud SET mark1='$mark1',mark2='$mark2',mark3='$mark3',mark4='$mark4',mark5='$mark5',mark6='$mark6',total='$total',percentage='$percentage' WHERE rollno='$studentreg'";
	  
	  $result= mysqli_query($conn,$qry);
	  
	  echo "<br/><br/><br/><br/><br/><br/>";
	  if(mysqli_affected_rows($conn)==1)
	      {   
	           rank();
	           echo "<br/><br/><center><b><span style='font-size:20px'><a href='advisor2.php'>Updated Successfully. <em>(links to advisor page)</em></a></span></b></center>";
	      }
	   
	      else
	     {
		   echo "<br/><br/><center><b><a href='advisor2.php'>This record does not exists.<br/>Please insert the record first(links to advisor page)</a></b></center>";
         }
	
	  }
	  else
	     {
	  
	      echo "<script>window.alert('Update failed.Only valid marks are accepted');
		         window.location='advisor2.php';
                 </script>";
		  }
	 }
	 else if(empty($_GET['studentregno2']) && empty($_GET['mark1']) && empty($_GET['mark2']) && empty($_GET['mark3']) && empty($_GET['mark4']) && empty($_GET['mark5']) && empty($_GET['mark6']))
	      {   echo"<script>window.alert('Please enter the required fields');
		      window.location='advisor2.php';
			  </script>";
		  }  
?>
</body>
</html>