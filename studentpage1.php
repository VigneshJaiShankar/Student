<?php 
  session_start();
 ?>
<html>
<head>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
 <link rel="stylesheet" type="text/css" href="css/styler.css" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <style>
   form
   {
	   margin-top:10em;
   }
 </style>
</head>
<body>
<?php
 include 'logout.php'; 
?>
 <center>
  <form name="spage1" action="studentnavtest.php"  method="GET" style="padding-top:10px;padding-bottom:10px">
    <button type="submit" name="dbms" class="regButt button" ><em>DBMS</em></button><br/>
	<button type="submit" name="toc" class="regButt button" ><em>TOC</em></button><br/>
	<button type="submit" name="ca" class="regButt button" ><em>CA</em></button><br/>
	<button type="submit" name="pds" class="regButt button" ><em>PDS</em></button>
  </form>
 </center>
</body>
</html>