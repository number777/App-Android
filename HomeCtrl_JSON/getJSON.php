<?php
	$objConnect = mysql_connect("localhost","root","1234");
	$objDB = mysql_select_db("home_ctrl");
	
	$_POST["sMemberID"] = "1"; // for Sample

	$strMemberID = $_POST["sMemberID"];
	$strSQL = "SELECT * FROM ip_server WHERE 1 AND id = '".$strMemberID."'  ";

	$objQuery = mysql_query($strSQL);
	$obResult = mysql_fetch_array($objQuery);
	if($obResult)
	{
		$arr["id"] = $obResult["id"];
		$arr["ip_server"] = $obResult["ip_server"];
		
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