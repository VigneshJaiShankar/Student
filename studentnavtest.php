<?php 
  session_start();
  if(isset($_GET['dbms']))
	  header('LOCATION:onlinetest.php');
  else if(isset($_GET['toc']))
	  header('LOCATION:onlinetoc.php');
  else if(isset($_GET['ca']))
	  header('LOCATION:onlineca.php');
  else if(isset($_GET['pds']))
	  header('LOCATION:onlinepds.php');
 ?>