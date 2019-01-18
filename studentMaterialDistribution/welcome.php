<?php
session_start();
?>
<!doctype html>
<html>
<head>
<title>
WELCOME TO RESOURCE SHARING SITE
</title>

<link rel="stylesheet" type="text/css" href="style.css">
	<script>
	function ID()
  {
   
   doc = /^[A-Za-z]+$/;
   if(document.fm.id.value.match(doc))
     {
	
	  
	  document.getElementById("msg1").style.color="red";
    document.getElementById("msg1").innerHTML="User Id can't contain Characters";
     return false;
	  
	  
     }
   else
     {
       document.getElementById("msg1").innerHTML="";
      return true;
     }
  }
  
  
  function PASS(){
	   v=document.fm.pass.value;
	
	if(v.length<=0 ){
		
		
		
		
		document.getElementById("msg2").style.color="red";
		document.getElementById("msg2").innerHTML="password can't be Empty";
		
		return false;
	}
	else{
		document.getElementById("msg2").innerHTML="";
		return true;
	}
}
	</script>

</head>


<body>

<div 
 class="loginbox"><pre>
<h2>LOG-IN</h2>
</pre>
<form action="login.php" method="post" name='fm'>

			<div class="inputbox">
			<input  type="text"  name="id" id="id" onclick='return ID()' >
			<label>USER ID :</label>
			<p id='msg1'></p>
			</div>
			
			<div class="inputbox">
			<input type="password" id ="pass" name="pass"  onclick='return PASS()' >
			<label>Password :</label>
			<p id='msg2'></p>
			</div>
			
		
			<p style="  font-size:15px">Remember me: 
			<input type="checkbox" name="remember" >
			</p>
			
			
			</br><pre>
			
	<input type="submit"  value="LOG-IN" >	<button onclick="location.href='signup.php'" type="button">SIGN-UP</button></pre>


</form>
</div>


			
			
			
</body>
</html>


<?php
if(isset($_COOKIE['id']) && isset($_COOKIE['password']))
{
	$Cid=$_COOKIE['id'];
	$Cpass=$_COOKIE['password'];
	echo "
	<script>
	
	document.getElementById('id').value= '$Cid';
	document.getElementById('pass').value= '$Cpass';
	</script>
	
	
	";
	
	
	
	
}


?>