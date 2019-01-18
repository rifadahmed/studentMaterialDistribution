

<?php

if(isset ($_FILES['file']))
{
	
	$name_file=$_FILES['file']['name'];
	
	$tmp_name=$_FILES['file']['tmp_name'];
		$local_image="uploads/";
		move_uploaded_file($tmp_name,$local_image.$name_file);
}




?>

<!DOCTYPE html>
<html>
<body>
 
<form enctype="multipart/form-data" method="post">
<p>Upload your file</p>
<input type="file" name="file"/>
<input type="submit" value="Upload" />
</form>
 
</body
</head>