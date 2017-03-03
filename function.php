<html>
<head>
<script type="text/javascript">
    
    
function checkadv(){
     var p = document.advisor_form.adv_password.value.length;
	 var user=document.getElementById('advisor_name').value;
	 var pass=document.getElementById('adv_password').value;
      if(p==0){
     document.getElementById("adv_password").style.border="2px solid #8b0300";
      
     alert("PLEASE ENTER THE PASSWORD");
      }	  
      else if(p < 6) {
	  alert("PASSWORD SHOULD ATLEAST BE SIX CHARECTERS.");
      document.getElementById("adv_password").style.border="2px solid #8b0300";
		
      	}
		else if( user =="sridevi" && pass == "accenture"){
		window.location='advisor2.php';
		}
		else if( user =="sangeetha" && pass == "cognizant"){
		window.location='advisor2.php';
		}
		else if( user =="abin" && pass == "infosys"){
		window.location='advisor2.php';
		}
		else{
          document.getElementById("adv_password").style.border = "2px solid #8b0300";
		document.getElementById("advisor_name").style.border = "2px solid #8b0300";
		alert("INCORRECT CREDENTIALS");		
		
		}
    };
function checkadm(){
      var password = document.getElementById("pass").value;
	  var username = document.getElementById("uname").value;
      var p = document.login.password.value.length;
      if(p==0){
      document.getElementById("pass").style.border = "2px solid #8b0300";
      alert("PLEASE ENTER THE PASSWORD");
      }	  
      else if(p < 6) {
	    alert("PASSWORD SHOULD ATLEAST BE SIX CHARECTERS.");
		document.getElementById("pass").style.border = "2px solid #8b0300";		
		}
		
		 
	/*	else if(username != "admin" || password != "wonderful")
		{
		document.getElementById("passwd").style.border = "2px solid #8b0300";
		document.getElementById("uname").style.border = "2px solid #8b0300";
		alert("INCORRECT CREDENTIALS");
		}
		
		
		
		else if(username == "admin" && password == "wonderful")
	    { 
		   window.location = 'adminpage.php';
		  }*/
	  
	       
		     
    }
    
    
function check()
    {
        
        
    }
    
    
    
    
    
    
</script>
</head>
</html>
