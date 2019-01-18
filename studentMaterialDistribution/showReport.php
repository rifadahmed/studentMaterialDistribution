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
 <h2 style="text-align:center">Show Report Message </h2>
 
 <?php
  
 require('fun.php');
 $auth4=array();
 report('select * from report');
echo '<table   class="center" border="2px" cellpadding="2px" cellspacing="1px">';
echo "

<tr >
<th style='text-align:center;'>FROM</th>
<th>DATE</th>
<th>MESSAGE DETAILS</th>

</tr>


";
foreach($auth4 as $ex)
{	
	echo "<tr>";
	echo "<td>".$ex['rId']."</td>";
	echo "<td>".$ex['date']."</td>";
	
	echo "<td>".$ex['message']."</td>";
	
	echo "</tr>";
}
echo"</table>";

?>
</div>
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
	
    <a href="addResource.php"> 
	<p style="text-align:center;">ADD RESOURCE </p>
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