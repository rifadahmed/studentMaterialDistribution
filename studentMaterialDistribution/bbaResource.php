<?php
session_start();
if(isset($_SESSION['x']) && $_SESSION['x']=="success" || ((isset($_SESSION['x1'])) && $_SESSION['x1']=="success1"))
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
 
 <?php


$bba = scandir("bba");


echo '<font size="3"><h2 style="text-align:center;font-family:century gothic;">BBA DEPARTMENT RESOURCES </h2></font>';

//////////////////////////////////////////txt files////
echo '<table style="color: pink" border="5px" cellpadding="5px" cellspacing="1px">';
echo " <tr><th>............................................WORD FILE..............................................</th></tr>";
for($a=2;$a<count($bba);$a++)
{
	
	$string=$bba[$a];
if(strpos($string,".txt")>0)
{
	
	?>
	<tr> 
	<td><a download = "<?php echo $bba[$a]?>" href = "bba/<?php echo $bba[$a]?>"><?php echo $bba[$a]?></a>
<?php
?>
 </td>
	</tr>
	
	<?php 
	
}


}


echo "</table>";


//////////////////////////////////////////pdfs////
echo '<table style="color: pink" border="5px" cellpadding="5px" cellspacing="1px">';
echo " <tr><th>...............................................PDF FILE...............................................</th></tr>";
for($a=2;$a<count($bba);$a++)
{
	
	$string=$bba[$a];
if(strpos($string,".pdf")>0)
{
	
	?>
	<tr> 
	<td><a download = "<?php echo $bba[$a]?>" href = "bba/<?php echo $bba[$a]?>"><?php echo $bba[$a]?></a>
<?php
?>
 </td>
	</tr>
	
	<?php 
	
}


}
//////////////////////////////////////////zip files//////
echo '<table style="color: pink" border="5px" cellpadding="5px" cellspacing="1px">';
echo " <tr><th>..............................................ZIP FILE.................................................</th></tr>";
for($a=2;$a<count($bba);$a++)
{
	
	$string=$bba[$a];
if(strpos($string,".zip")>0)
{
	
	?>
	<tr> 
	<td><a download = "<?php echo $bba[$a]?>" href = "bba/<?php echo $bba[$a]?>"><?php echo $bba[$a]?></a>
<?php
?>
 </td>
	</tr>
	
	<?php 
	
}


}
//////////////////////////////////////////ppt files//////

echo '<table style="color: pink" border="5px" cellpadding="5px" cellspacing="1px">';
echo " <tr><th>...................................POWERPOINT SLIDES......................................</th></tr>";
for($a=2;$a<count($bba);$a++)
{
	
	$string=$bba[$a];
if(strpos($string,".ppt")>0)
{
	
	?>
	<tr> 
	<td><a download = "<?php echo $bba[$a]?>" href = "bba/<?php echo $bba[$a]?>"><?php echo $bba[$a]?></a>
<?php
?>
 </td>
	</tr>
	
	<?php 
	
}


}



//////////////////////////////////////////jpeg files//////

echo '<table style="color: pink" border="5px" cellpadding="5px" cellspacing="1px">';
echo " <tr><th>............................................PHOTOS..................................................</th></tr>";
for($a=2;$a<count($bba);$a++)
{
	
	$string=$bba[$a];
if(strpos($string,"jpg")>0)
{
	
	?>
	<tr> 
	<td><a download = "<?php echo $bba[$a]?>" href = "bba/<?php echo $bba[$a]?>"><?php echo $bba[$a]?></a>
<?php
?>
 </td>
	</tr>
	
	<?php 
	
}


}





































echo "</table>";














/*for($a=2;$a<count($files);$a++)
{
	//displaying links to download
?>

<a download = "<?php echo $files[$a]?>" href = "upload/<?php echo $files[$a]?>"><?php echo $files[$a]?></a>
<?php
}
*/


?>

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

</body>
</html>


<?php
}
else
	echo "cant access this page";
?>