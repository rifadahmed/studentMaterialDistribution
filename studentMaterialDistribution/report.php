<?php
session_start();
require('fun.php');
$id=$_SESSION['id1'];
$report=$_REQUEST['report'];


$date=date("Y/m/d");


submitStudentInfo($sql = "INSERT INTO report (rId,date,message) VALUES ('$id', '$date','$report')");

echo "<p  style='text-align:center'>
	<font size='6'>THANKS FOR YOUR FEEDBACK. YOUR REPORT SUBMITTED SUCCESSFULLY.</font>

</p>";


?>
<html>
<body>
<a href="student.php"> 
	<h2 style="text-align:center">Home </h2> </br>
	</a>
</body>
</html>