
<?php
session_start();
if(isset($_SESSION['x1']) && $_SESSION['x1']=="success1")
{
?>
<!doctype html>
<html>


<head>
<link rel="stylesheet" type="text/css" href="style3.css">


</head>


<body>

<div 
 class="signupbox">
 <h2>PROFILE INFO </h2>

<?php
require('fun.php');
$auth3=array();

$sql='SELECT   id,fname,lname,gender,department,email,url FROM studentinfo WHERE id = '.$_SESSION["id1"];
loadId($sql);


echo "<table class'center' border='5px' cellpadding='10px' >";
				echo "<tr>";

		echo "<td>"."ID"."</td>";
		echo "<td>"."FIRST NAME"."</td>";
		echo "<td>"."LAST NAME"."</td>";
		echo "<td>"."GENDER"."</td>";
		echo "<td>"."DEPARTMENT"."</td>";
		echo "<td>"."EMAIL"."</td>";

					echo "</tr>";
					


foreach($auth3 as $a)
{
	
		
	

	
	{
		echo "<tr>";
		echo "<td>".$a['id']."</td>";
		echo "<td>".$a['fname']."</td>";
		echo "<td>".$a['lname']."</td>";
		echo "<td>".$a['gender']."</td>";
		echo "<td>".$a['department']."</td>";
		echo "<td>".$a['email']."</td>";
		
		echo "</tr>";
	
		
	
		

}
echo "	<h2 style='text-align:center'> ";
echo "<img alt='not found' src='".$a['url']."' width='200px' height='200px'/>";
echo "</h2>";
}

echo "</table>";

?>

</div>

<div 
 class="signupbox">
 
</br></br></br> </br></br></br></br> </br></br></br></br></br></br></br></br></br></br></br></br></br></br>


	<a href="student.php"> 
	<h2 style="text-align:center; color:white">HOME </h2>
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



