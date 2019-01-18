<?php
session_start();
if(isset($_SESSION['x1']) && $_SESSION['x1']=="success1")
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
			
		<div 
 class="loginbox">
			</br><a href="studentProfile.php"> 
	<h2 style="text-align:center">My Profile </h2> </br>
	</a>
	
	<a href="chooseDept2.php"> 
	<h2 style="text-align:center;">View Resources </h2></br>
	</a>
	
	<a href="reportV.php"> 
	<h2 style="text-align:center;">Report Problem </h2></br>
	</a>
	<a href="logout.php"> 
	<h2 style="text-align:center;">LOG-OUT </h2>
	</a>
			
			
			</div>
			
			</div>

</form>

</p>

<?php
}
else
	echo "cant access this page";
?>

</body>

</html>