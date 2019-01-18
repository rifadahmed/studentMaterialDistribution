<?php
session_start();

if(isset($_SESSION['x']) && $_SESSION['x']=="success")
{

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style4.css">

<?php


	require("fun.php");
$auth3=array();
loadId("select * from studentinfo");?>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>


<p  style="text-align:center;"> please select user name </p> </br>
<p style="text-align:center;"> 
<select id="users" onchange="showUser(this.value)"><?php
foreach($auth3 as $r){?>
	<option value="<?php echo $r["id"];?>">
	<?php echo $r["fname"];?>
	</option>	<?php
}?>
</select>

</p>
<div id="txtHint"><b><p style="text-align:center;">Person info will be listed here.</p></b></div>


</br></br>
<div 
 class="loginbox">
	
	<a href="admin.php"> 
	<p style="text-align:center;">HOME  </p>
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

<?php
}

else
	echo "cant accessthis page";
?>