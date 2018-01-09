<?
if (isset($_POST['tag']) && $_POST['tag'] != '') {
    // Get tag
    $tag = $_POST['tag'];

    // Include Database handler
    require_once 'function.php';
    $db = new DB_Functions();
    // response Array
    $response = array("tag" => $tag, "success" => 0, "error" => 0);
}
$id = $_POST['id'];
	$status = $_POST['status'] ;
	//$name = $_POST['name'];
	
	$users_id = $_POST['users_id'];
	
	
	$led = $db->ctrl_led($id,$status,$users_id);
	if($led != false){
		
		$response["success_led"] = 1;
		$response["device"]["id"] = $led["device_id"] ;
		$response["device"]["name"] = $led["device_name"] ;
		$response["device"]["status"] = $led["status"] ;
		$response["device"]["created_at"] = $led["created_at"];
		$response["device"]['users_id'] = $led["users_id"];
		
		
		
		echo json_encode($response);
	}else {
                // user failed to store
                $response["error_led"] = 1;
                $response["error_msg"] = "JSON Error occured in Status led";
                echo json_encode($response);
            
        }
?>