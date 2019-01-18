<?php
session_start();

$auth3=array();

require("fun.php");
$id=$_REQUEST['id'];
$password=$_REQUEST['pass'];
$_SESSION['id1']=$id;
$_SESSION['pass1']=$password;
$_SESSION['x']='';
$_SESSION['x1']='';
loadXmlFile();
loadId('select * from studentinfo');
$flag;
$flag1;
$flag2;
foreach($auth3 as $a)
{
	if($a['id']==$id && $a['pass']==$password)
	{
		$flag2=1;
		$_SESSION['x1']="success1";
	}

	
}


	if($flag1==11)
	{
		if(isset($_POST['remember']))
		
		{setcookie('id',$id,time()+60*60);
		setcookie('password',$password,time()+60*60);
		}
					header("Location:admin.php");


	}
	
	else if($flag2==1)
	{
					if(isset($_POST['remember']))
		
		{setcookie('id',$id,time()+60*60);
		setcookie('password',$password,time()+60*60);
		}
					header("Location:student.php");

	}
	 else 
	{echo "invalid  student id or password";
	}
	
	
	
	//session_destroy();


?>