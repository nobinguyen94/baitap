<?php
include("connect.php");
//mysql_query("insert into dung select * from dung where id=1 (id,email) values('','cuom@yahoo.com') ");
mysql_query("insert into dung(id,username,password,email) values('','admin','12345','admin@yahoo.com')");
//mysql_query("delete from dung where id>=15");
?>