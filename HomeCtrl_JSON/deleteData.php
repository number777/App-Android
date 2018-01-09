<?php
	$objConnect = mysql_connect("localhost","root","1234");
	$objDB = mysql_select_db("home_ctrl");
	
	//$_POST["sMemberID"] = "30"; // for Sample

	$strMemberID = $_POST["sMemberID"];
	$strSQL = "DELETE FROM users WHERE 1 AND uid = '".$strMemberID."'   ";

	$objQuery = mysql_query($strSQL);
	if(!$objQuery)
	{
		$arr["StatusID"] = "0";
		$arr["Error"] = "Cannot delete data!";
	}
	else
	{
		$arr["StatusID"] = "1";
		$arr["Error"] = "";
	}
	
	/**
		$arr['StatusID'] // (0=Failed , 1=Complete)
		$arr['Error' // Error Message
	*/

	mysql_close($objConnect);
	
	echo json_encode($arr);
?>