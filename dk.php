<?php
include("connect.php");
$user=$_POST['user'];
$pass=$_POST['pass'];
$repass=$_POST['re_pass'];
$email=$_POST['email'];
if(isset($_POST['sub']))
{
	if($user==""||$pass==""||$email=="")
		{
		header("Location:formdk.php");
		}

	else
		{
		$traloi=mysql_query("select*from dung");
		while($dulieu=mysql_fetch_array($traloi))
			{
			if($pass!=$repass)
				{
				echo "ko trung mat khau";break;
				}
			else{
					if($dulieu['username']==$user || $dulieu['email']==$email)
					{
					header("Location:formdk.php");break;
					}
					else
					{
					mysql_query("insert into dung(id,username,password,email) values('','$user','$pass','$email')");
					//echo "chung mung ban";
					}
				}
			}
		}
}

?>