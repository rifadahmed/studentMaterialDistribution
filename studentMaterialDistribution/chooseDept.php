<?php
session_start();
if(isset($_SESSION['x']) && $_SESSION['x']=="success")
{
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style4.css">

</head>


<body>


<html>

<head>


</head>

<body>
 
<div 

 class="signupbox">

 <h2 style="text-align:center;">Choose Depatment </h2>

<form action="chooseDept1.php" method="post" >

	<p style="text-align:center;">DEPT:
	<div style="text-align:center;" class="selectbox">
			<select style="text-align:center;" name="department" >
			
			  <option value="CSE" >CSE</option>
			  <option value="bba" >BBA</option>
			  <option value="eee" >EEE</option>
			  <option value="architecture" >ARCHITECTURE</option>
			</select>
			<br><br>
			</p>
			
			
			<div class="inputbox">
			
			<input type="submit" value ="SUBMIT"/>
			
			</div>
			
			</div>

</form>

</p>
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
	
	
    <a href="addResource.php"> 
	<p style="text-align:center;">ADD RESOURCE </p>
	</a>
	
	<a href="showReport.php"> 
	<p style="text-align:center;">MESSAGE LIST </p>
	</a>
	
	
	
	<a href="logout.php"> 
	<p style="text-align:center;">LOG-OUT </p>
	</a>
	</div>
<?php
}
else
	echo "cant access this page";
?>

</body>

</html>