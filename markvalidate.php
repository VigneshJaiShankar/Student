<?php
  session_start();
  $studentreg=$_SESSION['pass'];
  $sname=$_SESSION['tname'];
  include 'connect.inc.php';
  include 'ranking.php';
  $q1=$_GET['q1'];
  $q2=$_GET['q2'];
  $q3=$_GET['q3'];
  $q4=$_GET['q4'];
  $q5=$_GET['q5'];
  $total=0;
  $t=0;
  $qry0="SELECT * FROM onlineanswer WHERE Qno='1' AND Answer='$q1'";
  //print_r($qry0);
  $result=mysqli_query($conn,$qry0);
  $row=mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result)==1)
  {   
      $total=$total+1;
  }
  $qry1="SELECT * FROM onlineanswer WHERE Qno='2' AND Answer='$q2'";
  $result=mysqli_query($conn,$qry1);
    if(mysqli_num_rows($result)==1)
    {
	    $total=$total+1; 
    }
  $qry2="SELECT * FROM onlineanswer WHERE Qno='3' AND Answer='$q3'";
  $result=mysqli_query($conn,$qry2);
    if(mysqli_num_rows($result)==1)
    {
	    $total=$total+1; 
    }
 $qry3="SELECT * FROM onlineanswer WHERE Qno='4' AND Answer='$q4'";
 $result=mysqli_query($conn,$qry3);
    if(mysqli_num_rows($result)==1)
    {
	    $total=$total+1; 
    }
 $qry4="SELECT * FROM onlineanswer WHERE Qno='5' AND Answer='$q5'";
 $result=mysqli_query($conn,$qry4);
    if(mysqli_num_rows($result)==1)
    {
	    $total=$total+1; 
    }
	$total=$total * 5;
  if($sname=="DBMS")
  {
    $qry5="UPDATE otmark SET DBMS='$total' WHERE rollno='$studentreg'";
    if(mysqli_query($conn,$qry5))
	{
	  ottotal();
	  otrank();
	  header('LOCATION:studentpage.php');
	}
  }
  else if($sname=="TOC")
  {
    $qry5="UPDATE otmark SET TOC='$total' WHERE rollno='$studentreg'";
    if(mysqli_query($conn,$qry5))
	{
	  ottotal();
	  otrank();
	  header('LOCATION:studentpage.php');
	}
  }
  else if($sname=="CA")
  {
    $qry5="UPDATE otmark SET CA='$total' WHERE rollno='$studentreg'";
    if(mysqli_query($conn,$qry5))
	{
	  ottotal();
	  otrank();
	  header('LOCATION:studentpage.php');
	}
  }
  else if($sname=="PDS")
  {
    $qry5="UPDATE otmark SET PDS='$total' WHERE rollno='$studentreg'";
    print_r($qry5);
    if(mysqli_query($conn,$qry5))
	{
	  ottotal();
	  otrank();
	  header('LOCATION:studentpage.php');
	}
  }
?>