<?php
include("connect.php");
$x=$_POST['user'];
$y=$_POST['pass'];
if(isset($_POST['sub']))
{
	if($x=="" || $y==""){
		header("Location: ./index.php");
		//alert("ban da dang nhap thanh cong");
	} else {
		$temp = mysql_query("select * from dung ");
		while($row = mysql_fetch_array($temp)){
			if($x=="admin" && $y="12345")
				{
				echo "ban la admin";break;
				}
			elseif($row['username']==$x && $row['password']==$y){
				header("Location: ./thanhcong.php");
				break;
				//alert("ban da dang nhap thanh cong");
			} 
			
			else {
				header("Location: ./index.php");
			}
		}
	}
}

?>