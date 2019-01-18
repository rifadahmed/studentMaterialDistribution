<?php
session_start();
if(isset($_SESSION['x1']) && $_SESSION['x1']=="success1")
{
?>
<!doctype html>
<html>
<link rel="stylesheet" type="text/css" href="style3.css">
<body>

<div 
 class="signupbox">
 
 <h2 style="text-align:center;">Write Your Report Here</h2>
  <form action="report.php" method="post">
  
	<pre>
			    <textarea name="report" cols="50" rows="8"></textarea></pre>	<br> <br> 
	<pre>				             <input type="submit" value="submit"></pre>
		</p>
		
		<div 
 class="loginbox">
			</br><a href="studentProfile.php"> 
	<h2 style="text-align:center">My Profile </h2> </br>
	</a>
	
	<a href="chooseDept2.php"> 
	<h2 style="text-align:center;">View Resources </h2></br>
	</a>
	
	
	<a href="logout.php"> 
	<h2 style="text-align:center;">LOG-OUT </h2>
	</a>
			
			
			</div>

</form>
</body>
</html>
<?php
}
else
	echo "cant access this page";
?>