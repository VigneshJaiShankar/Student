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
  <form name="spage" action="studnav.php"  method="GET" style="padding-top:10px;padding-bottom:10px">
    <button type="submit" name="test" class="regButt button" ><em>Attend test</em></button><br/>
	<button type="submit" name="view" class="regButt button" ><em>View marks</em></button>
  </form>
 </center>
</body>
</html>