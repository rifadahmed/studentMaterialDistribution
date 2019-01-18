<?php
$dept=$_REQUEST['department'];
echo $dept;
			if($dept=="CSE")
			{header('location:cseResource.php');
			}
			
			else if($dept=="eee")
			{header('location:eeeResource.php');
			}
			else if($dept=="bba")
			{header('location:bbaResource.php');
			}
			else if($dept=="architecture")
			{header('location:archResource.php');
			}
?>
