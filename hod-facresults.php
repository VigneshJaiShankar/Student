
<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
 <head>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/styler.css" rel="stylesheet" />
    <title>SAS</title>     
    
</head>
    
<body>
    
    <?php include 'logout.php';
    ?>
    <br/><br/><br/><br/>
    
    <center>
    <form action="hod-facresultspage.php" method="GET" onsubmit="return checkfac()">
        <input type="text" class=inputtext_reg  placeholder="faculty name" name="hodfac" id="hodfac"><br/>
        <input type="text" class=inputtext_reg  placeholder="Department" name="hoddept" id="hodfac"><br/>
        <b><em><input type="submit" class="regButt" value="view" style="color:white"></em></b>
    </form>
    </center>  
      
    <?php include 'barbottom.php'; ?>
</body>



</html>