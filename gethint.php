<html>
    <head>    
    
    </head>
<body>

<?php
  $a[]="aswin";
  $a[]="anand";
  $a[]="bala";
  $a[]="harikshore";
  $a[]="jebin";
  $a[]="mani";
  $a[]="vignesh";
  $a[]="saimonesh";
  $a[]="saran";
  $a[]="subbu";
  $a[]="deepak";
  $a[]="abdul";
  $a[]="venkatesh";
  $a[]="shankar";
  $a[]="sai";
  $a[]="john";


//getting parameter

$q= $_REQUEST["q"];
$hint="";

//getting matched names

if($q!==""){
    
    $q=strtolower($q);
    $len=strlen($q);
    foreach($a as $name){
        if(stristr($q,substr($name,0,$len))){
            if($hint===""){
                $hint=$name; }
            else
            {
                $hint .=",$name";
            }
        }
    }
}

//output hint or empty
echo $hint=== "" ? "no suggestion" : $hint;
?>
 </body>
</html>