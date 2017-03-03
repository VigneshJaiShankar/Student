
<!DOCTYPE HTML>
<html>
    <head>
       <link href="css/bootstrap.min.css" rel="stylesheet" />
       <link href="css/styler.css" rel="stylesheet" />
       <meta name="viewport" content="width=device-width,initial-scale=1.0" />
       <meta charset="UTF-8" />
       <title>SAS</title>
    </head>

    <body>

        <?php

            require 'connect.inc.php';
            include 'logout.php';
            echo "<br/><br/>";?>
        <div>
        <center>
            <h2 style="padding-top:3em"> <em>View Details</em></h2>
                <form action="hodfac-view.php" method="GET" onsubmit="return checkfac1()" >
                <input type="text" class="inputtext_reg" name="allot-view" id="allot-view" placeholder="Faculty name" /><br/>
                <b><em><input type="submit"  value="View" class="regButt"></em></b>
                </form>
        
        <br/><br/>
        
            <h2 style="paddibg-top:3em"><em>Allot Advisor</em></h2>
                <form action="hodfac-allot.php" method="GET"  onsubmit="return checkallot()">
                  <input type="text" class="inputtext_reg" name="allotfac" id="allotfac" placeholder="Faculty name" />
                  <input type="text" class="inputtext_reg" name="allotsec" id="allotsec" placeholder="Section" /><br/>
                  <b><em><input type="submit" value="Allot" class="regButt"></em></b>
                </form>
        
        </center>
        </div>
     <?php include 'barbottom.php' ?>

    </body>

</html>
