<html>
<head>
    <link rel="stylesheet" type="text/css" href="style5.css"> 


	<script>
	var numb=0;
	
	function Fname()
  {
   
   doc = /^[A-Za-z]+$/;
   if(document.fm.fname.value.match(doc))
     {
	 document.getElementById("msg1").innerHTML="";
	 numb=1;
      return true;
	  
	  
     }
   else
     {
      document.getElementById("msg1").style.color="red";
    document.getElementById("msg1").innerHTML="only character are allopwed";
     return false;
     }
  }
  
  function Lname()
  {
   
   doc = /^[A-Za-z]+$/;
   if(document.fm.lname.value.match(doc))
     {
	 document.getElementById("msg2").innerHTML="";
	 numb=1;
      return true;
     }
   else
     {
      document.getElementById("msg2").style.color="red";
    document.getElementById("msg2").innerHTML="only character are allopwed";
     return false;
     }
  }
  

 function emailvalid(){
	   v=document.fm.email.value;
	   pos = v.search("@");
	   pos1 = v.search(".com");
	  
	if(pos != -1 && pos1 != -1){
		
	
		document.getElementById("msg3").innerHTML="";
		numb=1;
		return true;
	}
	else{
	
		document.getElementById("msg3").style.color="red";
		document.getElementById("msg3").innerHTML="Email Not Valid";
		
		return false;
	}
}




     function validate(){
	   v=document.fm.password.value;
	
	if(v.length>=6 ){
		
		//alert("valid data");
		document.getElementById("msg4").innerHTML="";
		numb=1;
		return true;
	}
	else{
		document.getElementById("msg4").style.color="red";
		document.getElementById("msg4").innerHTML="password length must be grater or equal 5 character";
		
		return false;
	}
}

 function confirm(){
	   v=document.fm.password.value;
	  u=document.fm.cpassword.value;
	
	if(v==u){
		
		document.getElementById("msg5").innerHTML="";
		numb=1;
		return true;
	}
	else{
		document.getElementById("msg5").style.color="red";
		document.getElementById("msg5").innerHTML="Password And Confirm Password Didn't Match";
		
		return false;
	}
	
	
}
</script>
</head>

<body>
<div 
 class="signupbox"><pre>

</pre>
		<Form name="fm" method ='post' action='submitSignup.php' enctype="multipart/form-data">
		<div class="inputbox">
		<h4  > User Number : </h4>
		<input  type = "number"  required=""  name = "id">
	    </div>
		
		
		<div class="inputbox">
		<h4  > FIRST NAME : </h4>
		<input  type = "text"  onclick="return Fname()"  name = "fname">
	    <p id="msg1"></p>
			    </div>

		
		<div class="inputbox">
		<h4  > Last  Name : </h4>
		<input  type = "text" onclick="return Lname()" name = "lname">
		 <p id="msg2"></p>
	    </div>

		 
		 <div class="inputbox">
		   <h4  >Gender:</h4  >
			 
			  <select name="gender" >
			  <option value="male" >MALE</option>
			  <option value="female" >FEMALE</option>
			</select>
				    </div>

			
			
			<div class="inputbox">
		 <h4>Dept:</h4>
			
			
			<select name="department" >
			  <option value="CSE" >CSE</option>
			  <option value="bba" >BBA</option>
			  <option value="eee" >EEE</option>
			  <option value="architecture" >ARCHITECTURE</option>
			
			</select>
		 	    </div>

		 
		  <div class="inputbox">
		   <h4  >Email : </h4>
		<input  type = "text" onclick="return emailvalid()" name = "email">
		 <p id="msg3"></p>
		    </div>

	
	
	<div class="inputbox">
		<h4  >password : </h4>
		<input  type = "password" onclick="return validate()" name = "password">
		 <p id="msg4"></p>
	    </div>

		 
		 <div class="inputbox">
		<h4  >confirm password : </h4> 
		<input  type = "password" onclick="return confirm()" name = "cpassword"> 
        <br>
		 <p id="msg5"></p>
		<br>
			    </div>
		
				 <div class="inputbox">

			Select file to upload : 
			<input type="file" name="fileToUpload" id="fileToUpload" >
			<p id='msg6'></p>
				</div>

				
<p style="text-align:center;"> 
			<input type="submit" value="SUBMIT" >
			</p>
			<p style="text-align:center; color:black; font-size:20px"> 
		already have an account?<a style=" color:blue" href ='welcome.php'>click here</a>
		</p>
		</div>
</form>
</body>
</html>



































