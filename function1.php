<html>
<head>
    
<script type="text/javascript">
function checkf(){
	 var role=document.getElementById("role").value;
	 var r=document.getElementById("role").value.length;
	 var p= document.getElementById("pass").value.length;
	 var username = document.getElementById("uname").value;
    var uname = document.getElementById("uname").value.length;
	 var password = document.getElementById("pass").value;
	 
	 if(role=="Role"){
		document.getElementById("role").style.border="2px solid #8b0300";
        alert("PLEASE ENTER THE ROLE"); 
	    return false;
	 }
     else if(p==0 || uname==0){
     document.getElementById("pass").style.border="2px solid #8b0300";
     alert("PLEASE FILL ALL FIELDS");
	 return false;
      }	
    
      else if(p < 6) {
	  alert("PASSWORD SHOULD ATLEAST BE SIX CHARECTERS.");
      document.getElementById("pass").style.border="2px solid #8b0300";
		return false;
      	}
            
    }
    
function checkfac()
    {
        var hodfac=document.getElementById("hodfac").value.length;
        var hoddept=document.getElementById("hoddept").value.length;
        if(hodfac==0)
            {
                alert("Please enter faculty's name");
                return false;
            }
        else if(hoddept==0)
            {
                alert("Please enter department");
                return false;
            }
        
    }
    
    
function checkfac1()
    {
        var faculty=document.getElementById("allot-view").value.length;
        if(faculty==0)
            {
                alert("Please enter faculty name");
                return false;
            }
    }
    
function checkallot(){
    
    var allotfaculty=document.getElementById("allotfac").value.length;
    var allotsec=document.getElementById("allotsec").value.length;
     if(allotfaculty==0 || allotsec==0){
         alert("Please enter all fields");
         return false;
     }
}
    
    
function sedes()
    {
        session_destroy();
        
    }
</script>
</head>
</html>
