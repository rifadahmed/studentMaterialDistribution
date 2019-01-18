
<?php

    //session_start(); 
    global $flag;
function submitStudentInfo($sql)
{
	
	global $auth;
	global $flag;
	$conn = mysqli_connect("localhost", "root", "","resource");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	//$auth=array();
	//print_r($result);
	/*while($row = mysqli_fetch_assoc($result)) {
		//print_r($row);
		$ar=array();
		$ar["id"]=$row["id"];
		$ar["uname"]=$row["uname"];
		$ar["pass"]=$row["pass"];
		$ar["email"]=$row["email"];
		$auth[]=$ar;
		
	}*/
	$_SESSION['x']="success";
}

function searchUser($sql)
{
	global $auth1;
	$conn = mysqli_connect("localhost", "root", "","resource");
	//echo $sql;
	$result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
		$auth=array();
	//print_r($result);
	while($row = mysqli_fetch_assoc($result)) {
		//print_r($row);
		$ar=array();
		$ar["id"]=$row["id"];
		
		$auth1[]=$ar;
}
$_SESSION['x']="success";
}
	
function loadStudentInfo($sql)
	{
		global $auth2;
	$conn = mysqli_connect("localhost", "root", "","resource");
	//echo $sql;
	$result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
		
echo "<table border='5px' cellpadding='10px' >";
				echo "<tr>";

		echo "<td>"."ID"."</td>";
		echo "<td>"."FIRST NAME"."</td>";
		echo "<td>"."LAST NAME"."</td>";
		echo "<td>"."GENDER"."</td>";
		echo "<td>"."DEPARTMENT"."</td>";
		echo "<td>"."EMAIL"."</td>";
		echo "<td>"."PASSWORD"."</td>";


					echo "</tr>";


while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['fname'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['department'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
	echo "<td>" . $row['pass'] . "</td>";


    echo "</tr>";
}

echo "</table>";
		
	$_SESSION['x']="success";	
	}
	
	function report($sql)
	{
		
		global $auth4;
	$conn = mysqli_connect("localhost", "root", "","resource");
	//echo $sql;
	$result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
		
		while($row = mysqli_fetch_assoc($result)) {
	
		$auth4[]=$row;
	}
	$_SESSION['x']="success";
	
		
		
		
	}
	
	function loadId($sql)
	{
		
		global $auth3;
	global $flag2;
	$conn = mysqli_connect("localhost", "root", "","resource");
	//echo $sql;
	$result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
		
		while($row = mysqli_fetch_assoc($result)) {
	
		$auth3[]=$row;
	}
		

	
	}
	
	
	






	
	function loadXmlFile()
	{
		$xml=simplexml_load_file("admin.xml") or die ("file not found");
		global $flag1;
		foreach($xml->info as $value)
{		
	if($value->id ==$_SESSION['id1'] &&$value->password ==$_SESSION['pass1'] )
	{		
			$_SESSION['x']="success";

			$flag1=11;
	}
	
}
	}
	function loadTextFile()
	{
	$file=fopen("student.txt","r") or die ("file not found");
	global $flag2;
	while($line=fgets($file))
{	
	$line=trim($line);
	$ex=explode(" ",$line);
	if($ex[0] ==$_SESSION['id1'] && $ex[6] ==$_SESSION['pass1'])
	{
			$flag2=1;

	}
}
		
		
	}
	
	
function getExt($filename){
	//abc.jpg
	$a=explode(".",$filename);
	return $a[1];
}







?>