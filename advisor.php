<html>
 <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta charset="UTF-8" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/styler.css" rel="stylesheet" />
    <title>SAS</title>  </head>
<body>
<?php  
include 'navigation.php';
include 'function.php';
require 'connect.inc.php';
?>

<div >
    <div class="_studenttop" >
        <h2><em>class advisor login</em></h2>
    </div>
     <form name="advisor_form" action="advisor2.php" method="GET">
        <input type="text" class="inputtext_reg"      name="adv_name"       id="advisor_name" placeholder="class advisor name*" /><br/>
 		<input type="password"  class="inputtext_reg" name="adv_password"  id="adv_password" placeholder="password*" />
    	<button type="submit" class="regButt" onclick="checkadv()"><em>login</em></button>
      </form>
	  
</div>


</body>
</html>