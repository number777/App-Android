<?
 require_once 'include/DB_Functions.php';
    $db = new DB_Functions();
	$_POST['status']="on";
$status = $_POST['status'];
	
	$led = $db->ctrl_led($status);
	if($led){
		$response["success"] = 1;
		$response["device"]["status"] = $led["status"] ;
		echo json_encode($response);
	}else {
                // user failed to store
                $response["error"] = 1;
                $response["error_msg"] = "JSON Error occured in Status led";
                echo json_encode($response);
            
        }
	
?>