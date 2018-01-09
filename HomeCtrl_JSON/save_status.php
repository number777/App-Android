<?

	$id = $_POST["id"]; //= "2";  ImageID
	$status = $_POST["status"];// = "ON"; // ratingPoint
	$users_id = $_POST["users_id"] ;//= "7";
	
	$objConnect = mysql_connect("localhost","root","1234");
	$objDB = mysql_select_db("home_ctrl");
	
	/*** Update ***/
	$strSQL = " UPDATE `devices` SET `status` = '$status',`date` = NOW(),`users_id` = '$users_id'  WHERE `device_id` = '$id'";

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