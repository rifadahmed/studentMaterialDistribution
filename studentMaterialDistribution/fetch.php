<?php
$auth3=array();
require("fun.php");
if(isset($_POST["flag"]) && $_POST["flag"]=="loadDistrict"){

	//$sql="select * from district where divid='".$_POST["divid"]."'";	

	$sql="select * from studentInfo where id= ".$_POST["divid"]." ";	
	//echo $sql;
	//loadFromText();
	loadId($sql);
	echo json_encode($auth3);
	//print_r($data);
}
?>