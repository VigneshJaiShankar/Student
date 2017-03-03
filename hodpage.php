<?php

session_start();

?>


<!DOCTYPE HTML>
    <head>
      <title>SAS</title>
      <link href="css/bootstrap.min.css" rel="stylesheet" />
      <link href="css/styler.css" rel="stylesheet" />
    </head>

<body>

     <?php
          
          include 'connect.inc.php';
          include 'logout.php';
      
          echo "<br/><br/><br/><br/>";
     ?>  
    
    
    <div class="container">
      <h2><?php echo "Welcome ".$_SESSION['user']; ?></h2>
      <div class="list-group">
          <a href="hod-allotment.php" class="list-group-item"><b>Class Allotment</b></a>
          <a href="hod-facresults.php" class="list-group-item"><b>View faculty's results</b></a>
        <!--<a href="#" class="list-group-item"></a>-->
    </div>
   </div>

    
   <!-- <center><a href="allotment.php" style="color:white"><input type="button" class="regButt" value="class allotment" /></a></center><br/> -->
   
    
    
    
    
    
    
  <?php include 'barbottom.php'; ?>



</body>