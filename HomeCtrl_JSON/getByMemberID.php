<?php
	
	$objConnect = mysql_connect("localhost","root","1234");
	$objDB = mysql_select_db("home_ctrl");
	mysql_query("SET NAMES UTF8");
	$_POST["sMemberID"] = "7"; // for Sample

	$strMemberID = $_POST["sMemberID"];
	$strSQL = "SELECT * FROM users WHERE 1 AND uid = '".$strMemberID."'  ";

	$objQuery = mysql_query($strSQL);
	$obResult = mysql_fetch_array($objQuery);
	if($obResult)
	{
		$arr["uid"] = $obResult["uid"];
		$arr["firstname"] = $obResult["firstname"];
		$arr["lastname"] = $obResult["lastname"];
		$arr["usesname"] = $obResult["usesname"];
		$arr["email"] = $obResult["email"];
		$arr["users_status"] = $obResult["users_status"];
	}

	
	mysql_close($objConnect);

	/*** return JSON by MemberID ***/
	/* Eg :
	{"MemberID":"2",
	"Username":"adisorn",
	"Password":"adisorn@2",
	"Name":"Adisorn Bunsong",
	"Tel":"021978032",
	"Email":"adisorn@thaicreate.com"}
	*/
	
	echo json_encode($arr);
?>