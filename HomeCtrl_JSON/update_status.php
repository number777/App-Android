<?php
	$host='127.0.0.1';
	$uname='root';
	$pwd='1234';
	$db="home_ctrl";

	$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");
	 
	$id=$_REQUEST['id'];
	$status=$_REQUEST['status'];
	$users_id =$_REQUEST['users_id'];
	/*
   $id = 1;
   $status = 0;
   $users_id = 12;*/
	$flag['code']=0;

	if($r=mysql_query("UPDATE `devices` SET `status` = '$status',`date` = NOW(),`users_id` = '$users_id'
						  WHERE `device_id` = '$id'",$con))
	{
		$flag['code']=1;
		echo"hi";
	}

	print(json_encode($flag));
	mysql_close($con);
?>