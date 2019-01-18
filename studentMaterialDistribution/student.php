
<?php
session_start();
if(isset($_SESSION['x1']) && $_SESSION['x1']=="success1")
{
?>


<!doctype html>
<html>
<head>
<title>
WELCOME TO STUDENT PANEL 
</title>

<link rel="stylesheet" type="text/css" href="style3.css">
<head>

<body>
<div 
 class="signupbox">
 
 <h2>WELCOME TO STUDENT PANEL </h2>


	<a href="studentProfile.php"> 
	<h2 style="text-align:center; color:white">My Profile </h2>
	</a>
	
	<a href="chooseDept2.php"> 
	<h2 style="text-align:center;">View Resources </h2>
	</a>
	
	<a href="reportV.php"> 
	<h2 style="text-align:center;">Report Problem </h2>
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