<?php
	$objConnect = mysql_connect("localhost","root","1234");
	$objDB = mysql_select_db("home_ctrl");
	mysql_query("SET NAMES UTF8");
	 //$_POST["txtKeyword"] = "ongard"; // for Sample

	$strKeyword = $_POST["txtKeyword"];
	$strSQL = "SELECT * FROM users WHERE 1 AND username LIKE '%".$strKeyword."%'  ORDER BY uid ASC  ";

	$objQuery = mysql_query($strSQL);
	$intNumField = mysql_num_fields($objQuery);
	$resultArray = array();
	while($obResult = mysql_fetch_array($objQuery))
	{
		$arrCol = array();
		for($i=0;$i<$intNumField;$i++)
		{
			$arrCol[mysql_field_name($objQuery,$i)] = $obResult[$i];
		}
		array_push($resultArray,$arrCol);
	}
	
	mysql_close($objConnect);
	
	echo json_encode($resultArray);
?>