<?php
    
    
    header('Content-Type: application/json');
    require 'connect.inc.php';
    
    $query="SELECT name,percentage FROM stud";
    
    $result=mysqli_query($conn,$query);
    
    $data=array();
    
    foreach($result as $row)
    {   
        $data[]=$row;
       
    }
    
    
    
    
    
    mysqli_close($conn);
    
    
    print json_encode($data);
    
?>

