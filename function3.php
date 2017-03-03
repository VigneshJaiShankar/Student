<?php
session_start();
$_SESSION['user']=$_GET['username'];
$_SESSION['pass']=$_GET['passwd'];

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
   echo "<br/><br/><br/><br/><br/>";
    
    
    
  GLOBAL $conn;
    
  $role=$_GET['role'];
  $username=$_SESSION['user'];
  $password=$_SESSION['pass'];
    
    
    
	if($role=="admin")
	{
	  $qry="SELECT * FROM admin WHERE Username='$username' AND Password='$password'";
	  $result=mysqli_query($conn,$qry);
      if(mysqli_num_rows($result)==1)
      {
		header('LOCATION:adminpage.php');
	  }
	  else if(mysqli_num_rows($result)!=1)
	  {
		 echo "<script>
		      window.alert('Please check your username and password');
			  window.location='newloginpage.php';
		      document.getElementById('uname').style.border='2px solid #8b0300';
			  document.getElementById('pass').style.border='2px solid #8b0300';
			  </script>"; 
	  }
	}
    
	else if($role=="faculty")
	{
          $qry="SELECT * FROM advisor WHERE Username='$username' AND Password='$password'";
          $result=mysqli_query($conn,$qry);
          if(mysqli_num_rows($result)==1)
          {

              echo "<script>
                     window.location='advisor2.php';
                     </script>";   
          }

          else
          {
              echo "<script>
			      window.alert('Please check your username and password');
                  window.location='newloginpage.php';
                  document.getElementById('uname').style.border='2px solid #8b0300';
                  document.getElementById('pass').style.border='2px solid #8b0300';
                  </script>"; 
          }
	}
    
    else if($role=="HOD")
    {
        $qry="SELECT * from hod WHERE Username='$username' AND Password='$password'";
        $result=mysqli_query($conn,$qry);
        if(mysqli_num_rows($result)==1)
        {
            header('LOCATION:hodpage.php');
        }
        else
        {
              echo"<script type='text/javascript'>
		      document.getElementById('uname').style.border='2px solid #8b0300';
			  document.getElementById('pass').style.border='2px solid #8b0300';
              window.alert('Please check your username and password');
			  </script>"; 
        }
        
    }
	else if($role=="student")
	{
	   $qry="SELECT * from stud WHERE admission='$username' AND rollno='$password'";
       $result=mysqli_query($conn,$qry);
       if(mysqli_num_rows($result)==1)
       {
	     header('LOCATION:studentpage.php');  
	   }
	    else
        {
              echo"<script type='text/javascript'>
		      document.getElementById('uname').style.border='2px solid #8b0300';
			  document.getElementById('pass').style.border='2px solid #8b0300';
              window.alert('Please check your username and password');
			  </script>"; 
        }
    }
	else
	  {
		 echo"<script type='text/javascript'>
              window.alert('Please enter your details correctly');
			  window.location='newloginpage.php';
			  </script>"; 
	  }
	 
	  mysqli_close($conn);
 ?>
 </body>
 </html>