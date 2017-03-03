<html lang="en">
 <head>
  <link rel="stylesheet" href="styler.css" />
  <meta name="viewport" content="width=device-width ; initial-scale=1.0">
</head>
<body>
<?php
 include 'connect.inc.php';
 include 'topbar.php';
 GLOBAL $conn;
 //---------------------------------------------------Add faculty-------------------------------------------------------------------------------------------------
         
	     if(!empty($_GET['advname']) && !empty($_GET['usname']) && !empty($_GET['passw']))
	     {
			$advn=$_GET['advname'];
			$u=$_GET['usname'];
			$p=$_GET['passw'];
			$role="Faculty";
			$qry1="INSERT INTO advisor (Role,Advname,Username,Password) VALUES ('$role','$advn','$u','$p')";
			echo "<br/><br/><br/><br/><br/><br/>";
		  if(mysqli_query($conn,$qry1))
	      { 
	        echo"<br/><br/>
		         <center>";
		    echo "<b><span style='font-size:20px'>New record created successfully.</span></b><br/>";
		    echo "<em><a href='adminpage.php'>enter marks using update section of this page(click to go to admin page)</a></em>";
		    echo"</center>";
          } 
	      else
          {  
       	    echo "<br/><br/>
		          <center>";
            echo "<b>This data already exists.<br/>Please check the registration number.</b>";
		    echo "</center>";
          }
	     }
		 else if(empty($_GET['advname']) || empty($_GET['usname']) || empty($_GET['passw']))
		 {
			  echo "<script type='text/javascript'>
	         window.alert('please enter all fields');
			 window.location='adminpage.php';
			 </script>";
		 }	 
		 		 
?>
</body>
</html>