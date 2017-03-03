<?php 
  function ottotal()
  {
	  GLOBAL $conn;
	  $t1=0;
	  GLOBAL $studentreg;
	  $qry="SELECT * FROM otmark WHERE rollno='$studentreg'";
	  $result=mysqli_query($conn,$qry);
	  $row=mysqli_fetch_assoc($result);
	  $t1=$row["DBMS"]+$row["TOC"]+$row["CA"]+$row["PDS"];
	  $qry1="UPDATE otmark SET Total='$t1' WHERE rollno='$studentreg'";
	  mysqli_query($conn,$qry1);
  }
  function otrank()
  {
	GLOBAL $conn;
	$i=0;$h=0;$k=0;
	$a=0;
	$temp=0;$temp1=0;
	$qry="SELECT rollno,Total FROM otmark";
	$result=mysqli_query($conn,$qry);
	while($row=mysqli_fetch_array($result))
	{
		$regarray[$i]=$row["rollno"];
		$totarray[$i]=$row["Total"];
		$i=$i+1;
	}
	for($k=0;$k<$i;$k++)
	{
	for($h=0;$h<$i-1;$h++)
	{ 
       $a=$h + 1;
		if($totarray[$h] < $totarray[$a])
		{
			$temp=$totarray[$h];
			$totarray[$h]=$totarray[$a];
			$totarray[$a]=$temp;
			$temp1=$regarray[$h];
			$regarray[$h]=$regarray[$a];
			$regarray[$a]=$temp1;
		}
	}
	}
	for($k=0;$k<$i;$k++)
	{
	  $a=$k+1;
	  $qry1="UPDATE otmark SET Rank='$a' WHERE rollno='$regarray[$k]'";
	  mysqli_query($conn,$qry1);
	}
  }
  
  function rank()
  {
	GLOBAL $conn;
	$i=0;$h=0;$k=0;
	$a=0;
	$temp=0;$temp1=0;
	$qry="SELECT rollno,total FROM stud";
	$result=mysqli_query($conn,$qry);
	while($row=mysqli_fetch_array($result))
	{
		$regarray[$i]=$row["rollno"];
		$totarray[$i]=$row["total"];
		$i=$i+1;
	}
	for($k=0;$k<$i;$k++)
	{
	for($h=0;$h<$i-1;$h++)
	{ 
       $a=$h + 1;
		if($totarray[$h] < $totarray[$a])
		{
			$temp=$totarray[$h];
			$totarray[$h]=$totarray[$a];
			$totarray[$a]=$temp;
			$temp1=$regarray[$h];
			$regarray[$h]=$regarray[$a];
			$regarray[$a]=$temp1;
		}
	}
	}
	for($k=0;$k<$i;$k++)
	{
	  $a=$k+1;
	  $qry1="UPDATE stud SET Rank='$a' WHERE rollno='$regarray[$k]'";
	  mysqli_query($conn,$qry1);
	}
  }
  ?>