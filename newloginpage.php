<?php


session_start();



include 'function1.php';
include 'connect.inc.php';
?>
<html lang="en">
 <head>
   <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta charset="UTF-8" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/styler.css" rel="stylesheet" />
    <title>SAS</title>
    <script>
       
       function  showHint(str){
           if(str.length==0){
               document.getElementById("txtHint").innerHTML="";
               return;
           }
               
           else{
                
                //ajax
                
                var xhttp=new XMLHttpRequest();
                    
                    xhttp.onreadystatechange=function(){
                       if(this.readyState==4 && this.status==200){
                         document.getElementById("txtHint").innerHTML=this.responseText;
                        
                    }
                
                    };
                
                xhttp.open("GET","gethint.php?q="+str,true);
                xhttp.send();
            }
           
       }
       
     
    </script>

  
  
  
  
  
</head>

<body>
<br/><br/><br/><br/><br/>
<center> 
 <!--<fieldset name="login" style="width:40em">-->
 <h2 style="padding-top:3em"> <em>Login</em></h2>
 <form name="login" action="function3.php" onsubmit="return checkf()" method="GET" style="padding-top:10px;padding-bottom:10px">
     <select type="text" class="inputtext_reg" id="role" name="role" placeholder="Role*"/>
         <option style="font-weight:bold"><em>Role</em></option>
         <option style="font-weight:bold"><em>admin</em></option>
         <option style="font-weight:bold"><em>HOD</em></option>
         <option style="font-weight:bold"><em>faculty</em></option>
         <option style="font-weight:bold"><em>student</em></option>
     </select><br/>
     <input type="text" class="inputtext_reg" name="username" onkeyup="showHint(this.value)"  id="uname"  placeholder="Username*/AdmissionNo*" /><br/><br/>
      <p><b>Suggestions:</b><em><span id="txtHint"></span></em></p><br/>
     <input type="password" class="inputtext_reg" name="passwd"  id="pass" placeholder="Password*/Regno*" /><br/>
    <b><em><input type="submit" id="login" class="regButt" value="login"/></em></b><br/>
	<a href="forgotpass.php">Forgot Password?</a>
 </form>
     <!--</fieldset>-->
</center>
    
</body>



</html>