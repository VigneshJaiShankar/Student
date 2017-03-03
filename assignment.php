
<html>
  <head>
    <link href="styler.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width;initial-scale=1.0"/>
  </head>
    
<body>
    
    <center>
    <form action="fileupload.php" type="multipart/enctype" method=post>
        
        <input  type="file" class="" placeholder="browsefiles"  name='file'/><br/>
        <button type="submit" class="regButt button" id="sub">Submit</button>
    
    
        </form>
        
        
    <?php
        
        $name = $_FILES['file']['name'];
        $size = $_FILES['file']['size'];
        $type = $_FILES['file']['type'];
        $tmp_name = $_FILES['file']['tmp_name'];
        
        
        
    ?>
        
    </center> 
    
    
    

</body>



</html>