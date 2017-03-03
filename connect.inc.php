<?php
 
 $conn_error='could not connect.try again later';
 $mysql_host ='localhost';
 $mysql_user ='root';
 $mysql_pass ='';
 $mysql_db='student';
 
  $conn   =   mysqli_connect($mysql_host , $mysql_user , $mysql_pass , $mysql_db);
 
  if(!$conn)
  {
  echo $conn_error;
  } 
  
 
  
  
?>