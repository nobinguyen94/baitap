<?php
include("connect.php");
$x=$_POST['user'];
$y=$_POST['email'];
if(isset($_POST['sub']))
{
	if($x=="" || $y=="")
		{
		header("location:formllttin.php");
		}
	else
		{
		$traloi=mysql_query("select*from dung");
		while($dulieu=mysql_fetch_array($traloi))
			{
			if($dulieu['username']==$x && $dulieu['email']==$y)
				{
				echo "pass day ".$dulieu['password'];
				}
			else
				{
				header("location:formllttin.php");
				}
			}
		}
}
?>