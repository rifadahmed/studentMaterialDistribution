<html>
<head>
</head>
<body>
<?php

//getting user uploaded file

$file = $_FILES["file"];
$dept=$_REQUEST['department'];
 $file['size'];
$cse="cse/";
$bba="bba/";
$arch="arch/";
$eee="eee/";

if($file['size']==0)
{
	echo "<script type='text/javascript'>alert('UPLOAD FAILED!!!Please Choose a file')</script>"; 

	
}
//saving file in upload folder
else
{
if($dept=="CSE")
{move_uploaded_file($file["tmp_name"],$cse. $file["name"]);

echo "RESOURCE SUCCESSFULLY ADDED TO CSE DEPARTMENT";
}

else if($dept=="bba")
{move_uploaded_file($file["tmp_name"],$bba . $file["name"]);
echo "RESOURCE SUCCESSFULLY ADDED TO BBA DEPARTMENT";
}

else if($dept=="architecture")
{move_uploaded_file($file["tmp_name"],$arch . $file["name"]);
echo "RESOURCE SUCCESSFULLY ADDED TO ARCHITECTURE DEPARTMENT";
}

else if($dept=="eee")
{move_uploaded_file($file["tmp_name"],$eee . $file["name"]);
echo "RESOURCE SUCCESSFULLY ADDED TO EEE DEPARTMENT";
}
}
//redirecting back to home

//header("Location:index.php");
?>
</body>
</html>
