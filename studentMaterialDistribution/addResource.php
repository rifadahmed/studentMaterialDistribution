<?php
session_start();
if(isset($_SESSION['x']) && $_SESSION['x']=="success")
{
?>
<!doctype html>
<html>

<link rel="stylesheet" type="text/css" href="style4.css">

<body>
<div 
 class="signupbox">
 <h2 style="text-align:center;">Choose Department </h2>

<form method = "POST"enctype ="multipart/form-data" action="upload.php">
	
	
	<p style="text-align:center;">DEPT:
			<select style="text-align:center;"name="department" >
			  <option value="CSE" >CSE</option>
			  <option value="bba" >BBA</option>
			  <option value="eee" >EEE</option>
			  <option value="architecture" >ARCHITECTURE</option>
			</select>
			<br><br>
			</p>
	<h5 style="text-align:center;"> CHOOSE FILE TO UPLOAD </h5>
	<p style="text-align:center;">
	<input type ="file" name="file"> 
	
	<input type = "submit" value= "Upload">
	</p>
	
</form>
<div id="txtHint"><b></b></div>


</br></br></br></br></br></br></br></br>
<div 
 class="loginbox">
	
	<a href="admin.php"> 
	<p style="text-align:center;">HOME  </p>
	</a>
	
	<a href="showStudentInfo.php"> 
	<p style="text-align:center;">STUDENT LIST </p>
	</a> 
	
	<a href="chooseDept.php"> 
	<p style="text-align:center;">SHOW RESOURCE </p>
	</a>
	
    
	
	<a href="showReport.php"> 
	<p style="text-align:center;">MESSAGE LIST </p>
	</a>
	
	
	
	<a href="logout.php"> 
	<p style="text-align:center;">LOG-OUT </p>
	</a>
	</div>

</body>
</html>

<?php
}
else
	echo "cant access this page";
?>
