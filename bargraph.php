<?php session_start(); ?>

<html>
    <head>
        <title>Graphs</title>
         <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/styler.css" rel="stylesheet" /> 
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta charset="UTF-8" />
    </head>
    
    <body>
        
        <?php
  
           include 'logout.php';
        ?>
    
        <center style="padding-top:50px">
       <div id="chart-container">
          <canvas id="mycanvas" width:200px height:200px></canvas>
       </div>
        </center>
        
        
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-compat/3.0.0-alpha1/jquery.min.js"></script>
        <!-- <script type="text/javascript" src="Charts/jquery.min.js"></script> -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.js"></script> 
       <!-- <script type="text/javascript" src="Charts/Chart.min.js"></script> -->
        <script type="text/javascript" src="app.js"></script>
    
    
        <?php include 'barbottom.php'; ?>
    </body>
</html>