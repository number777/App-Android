<?
	$objConnect = mysql_connect("localhost","root","1234");
	$objDB = mysql_select_db("home_ctrl");
	
	/*
		$_POST["id"] = "33";
		$_POST["uname"] = "adisorn@2";
		$_POST["lname"] = "Adisorn Bunsong";
		$_POST["fname"] = "adisorn@thaicreate.com";
		$_POST["email"] = "adisorn@thaicreate.com021978032";
	*/

	$id = $_POST["id"];
	$useranme = $_POST["uname"];
	$lname = $_POST["lname"];
	$fname = $_POST["fname"];
	$email = $_POST["email"];

	/*** Check Email Exists ***/
	$strSQL = "SELECT * FROM users WHERE username = '".$useranme."' AND uid != '".$email."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if($objResult)
	{
		$arr['Sccess'] = "0"; 
		$arr['Error'] = "Email Exists!";	
		echo json_encode($arr);
		exit();
	}
	
	/*** Update ***/
	$strSQL = " UPDATE users SET
		username = '".$useranme."'
		,firstname = '".$fname."'
		,lastname = '".$lname."'
		,email = '".$email."'
		WHERE uid = '".$id."'
	";

	$objQuery = mysql_query($strSQL);
	if(!$objQuery)
	{
		$arr['StatusID'] = "0"; 
		$arr['Error'] = "Cannot save data!";	
	}
	else
	{
		$arr['StatusID'] = "1"; 
		$arr['Error'] = "";	
	}

	/**
		$arr['StatusID'] // (0=Failed , 1=Complete)
		$arr['Error'] // Error Message
	*/
	
	mysql_close($objConnect);
	
	echo json_encode($arr);
?>