<?php
session_start();
if(isset($_SESSION['x']) && $_SESSION['x']=="success")
{
echo'	
<!doctype html>
<html>
<head>
<title>
WELCOME TO ADMIN PANEL 
</title>

<link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>
<div 
 class="loginbox">
 <h2>WELCOME TO AIUB ADMIN PANEL </h2>




	<a href="showStudentInfo.php"> 
	<p style="text-align:center;">STUDENT LIST </p>
	</a>
	
	<a href="chooseDept.php"> 
	<p style="text-align:center;">SHOW RESOURCE </p>
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
		
			
</body>
</html>
	
	';
}
else
	echo "invalid";
?>
