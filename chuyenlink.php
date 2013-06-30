<?php
mysql_connect("localhost","root","");
mysql_select_db("vandung");
/*if($_post['pass']||$_post['user']==null){ header("location:form.php");}
else
	{*/
		$traloi=mysql_query("select* from dung where username='".$_post['user']."' and password=".$_post['pass'] );
		while($dulieu=mysql_fetch_array($traloi))
			{
			if($dulieu['username']==""){header("location:form.php");}
			else {header("location:thanhcong.php");}
			}
	
	/*}*/
?>

