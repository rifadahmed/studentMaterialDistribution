<?php
require("fun.php");
$tmp=$_FILES['fileToUpload']['tmp_name'];
$name=$_FILES['fileToUpload']['name'];

global $flag6;
$ex=array();
$auth1=array();

$id=$_REQUEST["id"];
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$gender=$_REQUEST["gender"];
$department=$_REQUEST["department"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$cpassword=$_REQUEST["cpassword"];




searchUser('select * from studentInfo');
foreach($auth1 as $a){
	if($a['id']==$id)
	{
		$flag=10;
	}
		
		

		
		
}



$space=" ";
$newline="\n";

if(!empty($name))
{$ext=getExt($name);
$target="uploads/".time().".".$ext;
if($ext=="jpg" ){
	
	$flag6=6;
}

 if(file_exists($target)){
	echo "File already exists";
}
}









if (empty($id))
 {
 echo "<script type='text/javascript'>alert('ID MISSING')</script>"; }
	 
  if (empty($fname))
 {
echo "<script type='text/javascript'>alert('FIRST NAME MISSING')</script>"; 
 }
 
 if (empty($lname))
 {
echo "<script type='text/javascript'>alert('LAST NAME MISSING')</script>"; 
 }
 
 
 if (empty($email))
 {
echo "<script type='text/javascript'>alert('MAIL ADDRESS MISSING')</script>"; 
 }
 
   if (empty($password))
 {
echo "<script type='text/javascript'>alert('PASSWORD IS MISSING')</script>";  }
 
   if (empty($cpassword))
 {
echo "<script type='text/javascript'>alert('PASSWORD IS MISSING')</script>"; 
 }
 

 
 else
 {
	
	 $flag;

	 if($flag==10)
	 {
				echo "<script type='text/javascript'>alert('SORRY! THIS USER EXISTS')</script>"; 

	 }
	 else
	 {
		 if(strpos($fname,"1")==true ||strpos($fname,"1")==true ||
strpos($fname,"1")==true ||strpos($fname,"8")==true ||strpos($lname,"4")==true ||
strpos($fname,"2")==true ||strpos($fname,"9")==true ||strpos($lname,"5")==true ||
strpos($fname,"3")==true ||strpos($fname,"0")==true ||strpos($lname,"6")==true ||
strpos($fname,"4")==true ||strpos($lname,"0")==true ||strpos($lname,"7")==true ||
strpos($fname,"5")==true ||strpos($lname,"1")==true ||strpos($lname,"9")==true ||
strpos($fname,"6")==true ||strpos($lname,"2")==true ||
strpos($fname,"7")==true ||strpos($lname,"3")==true||
strpos($fname,"~")==true ||strpos($fname,"&")==true ||strpos($lname,"%")==true ||
strpos($fname,"!")==true ||strpos($fname,"*")==true ||strpos($lname,"^")==true ||
strpos($fname,"@")==true ||strpos($fname,"(")==true ||strpos($lname,"&")==true ||
strpos($fname,"#")==true ||strpos($lname,"~")==true ||strpos($lname,"*")==true ||
strpos($fname,"$")==true ||strpos($lname,"@")==true ||strpos($lname,"(")==true ||
strpos($fname,"%")==true ||strpos($lname,"#")==true ||
strpos($fname,"^")==true ||strpos($lname,"$")==true ||
strpos($fname,")")==true ||strpos($fname,"}")==true ||strpos($lname,"-")==true ||
strpos($fname,"_")==true ||strpos($fname,"|")==true ||strpos($lname,"=")==true ||
strpos($fname,"+")==true ||strpos($fname,";")==true ||strpos($lname,"{")==true ||
strpos($fname,"`")==true ||strpos($lname,")")==true ||strpos($lname,"}")==true ||
strpos($fname,"-")==true ||strpos($lname,"_")==true ||strpos($lname,"|")==true ||
strpos($fname,"=")==true ||strpos($lname,"+")==true ||
strpos($fname,"{")==true ||strpos($lname,"`")==true ||
strpos($fname,"/")==true ||strpos($fname,"?")==true ||strpos($lname,"?")==true ||
strpos($fname,"<")==true  ||strpos($lname,"5")==true ||
strpos($fname,">")==true  ||strpos($lname,"6")==true ||
strpos($fname,"?")==true ||strpos($lname,"'")==true ||strpos($lname,">")==true ||
strpos($fname,"'")==true ||strpos($lname,",")==true ||strpos($lname,"<")==true ||
strpos($fname,",")==true ||strpos($lname,".")==true ||
strpos($fname,".")==true ||strpos($lname,"/")==true )
		 {
				echo "<script type='text/javascript'>alert('INVALID NAME')</script>"; 
		 }
		 
		 
		 else	
				{
					if(!filter_var($email, FILTER_VALIDATE_EMAIL))
					{
					echo "<script type='text/javascript'>alert('wrong mail format')</script>";
						
					}
					
					
					else
					{
						
						$up = 0;
						$low=0;
						$dig=0;
						$matches = array();
						if (preg_match_all("/[A-Z]/", $password, $matches) > 0) {
						  foreach ($matches[0] as $match)
						  { $up += strlen($match);
						  }
						}
						if (preg_match_all("/[a-z]/", $password, $matches) > 0) {
						  foreach ($matches[0] as $match)
						  { $low += strlen($match);
						  }
						}
						
						if (preg_match_all("/[0-9]/", $password, $matches) > 0) {
						  foreach ($matches[0] as $match)
						  { $dig += strlen($match);
						  }
						}
						
						
						
						
						 if($password!=$cpassword || $up==0 || $low==0 || $dig==0 || strlen($password)<5 )
						{
						
							echo "<script type='text/javascript'>alert('Check password format or try again!')</script>";

						}
						else if($flag6==6)
						{
							$t= move_uploaded_file($tmp,$target);
						submitStudentInfo($sql = "INSERT INTO studentInfo (id,fname,lname,gender,department, email,pass,url) VALUES ('$id', '$fname','$lname','$gender','$department', '$email','$password','$target')");

						echo"info submitted successfully";
	
						}
						else
							echo "<script type='text/javascript'>alert('Photo Missing')</script>";
							
						
					}
					
					
				}
		 
		 
	 }
	 
	 
	 
	 
	  
 }
 





?>