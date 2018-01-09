<?php
//$_POST['tag'] = "IP_Server";

if (isset($_POST['tag']) && $_POST['tag'] != '') {
    // Get tag
    $tag = $_POST['tag'];

    // Include Database handler
    require_once 'include/DB_Functions.php';
    $db = new DB_Functions();
    // response Array
    $response = array("tag" => $tag, "success" => 0, "error" => 0);

    // check for tag type
    if ($tag == 'login') {
        // Request type is check Login
        $Username = $_POST['email'];
        $password = $_POST['password'];
		// check for permission status

        // check for user
        $user = $db->getUserByEmailAndPassword($Username, $password);
        if ($user != false) {
            // user found
            // echo json with success = 1
			if($user["users_status"]=="Admin"){
				$rs=1;
				}else{
				$rs=2;
					}
            $response["success"] = 1;
			$response["permission"] = $rs;
			$response["user"]["uid"] = $user["uid"];
            $response["user"]["fname"] = $user["firstname"];
            $response["user"]["lname"] = $user["lastname"];
            $response["user"]["email"] = $user["email"];
	  		$response["user"]["uname"] = $user["username"];
            $response["user"]["unique_id"] = $user["unique_id"];
            $response["user"]["created_at"] = $user["created_at"];
			$response["user"]["status"] = $user["users_status"];


            echo json_encode($response);
        } else {
            // user not found
            // echo json with error = 1
            $response["error"] = 1;
            $response["error_msg"] = "Incorrect email or password!";
            echo json_encode($response);
        }
    }

  else if ($tag == 'chgpass'){
  $email = $_POST['email'];

  $newpassword = $_POST['newpas'];


  $hash = $db->hashSSHA($newpassword);
        $encrypted_password = $hash["encrypted"]; // encrypted password
        $salt = $hash["salt"];
  $subject = "Change Password Notification";
         $message = "Hello User,\n\nYour Password is sucessfully changed.\n\nRegards,\nLearn2Crack Team.";
          $from = "ongardpulathane@gmail.com";
          $headers = "From:" . $from;
	if ($db->isUserExisted($email)) {

 $user = $db->forgotPassword($email, $encrypted_password, $salt);
if ($user) {
         $response["success"] = 1;
          //mail($email,$subject,$message,$headers);
         echo json_encode($response);
}
else {
$response["error"] = 1;
echo json_encode($response);
}


            // user is already existed - error response


        }
           else {

            $response["error"] = 2;
            $response["error_msg"] = "User not exist";
             echo json_encode($response);

}
}
else if ($tag == 'forpass'){
$forgotpassword = $_POST['forgotpassword'];

$randomcode = $db->random_string();


$hash = $db->hashSSHA($randomcode);
        $encrypted_password = $hash["encrypted"]; // encrypted password
        $salt = $hash["salt"];
  $subject = "Password Recovery";
         $message = "Hello User,\n\nYour Password is sucessfully changed. Your new Password is $randomcode . Login with your new Password and change it in the User Panel.\n\nRegards,\nLearn2Crack Team.";
          $from = "ongardpulathane@gmail.com";
          $headers = "From:" . $from;
	if ($db->isUserExisted($forgotpassword)) {

 $user = $db->forgotPassword($forgotpassword, $encrypted_password, $salt);
if ($user) {
         $response["success"] = 1;
          mail($forgotpassword,$subject,$message,$headers);
         echo json_encode($response);
}
else {
$response["error"] = 1;
echo json_encode($response);
}


            // user is already existed - error response


        }
           else {

            $response["error"] = 2;
            $response["error_msg"] = "User not exist";
             echo json_encode($response);

}

}
else if ($tag == "ctrl_led"){

	$id = $_POST['id'] ;
	$status = $_POST['status'];
	$users_id = $_POST['users_id'];


	$led = $db->ctrl_led($id,$status,$users_id);
	if($led != false){

		$response["success"] = 1;/*
		$response["device"]["id"] = $led["device_id"] ;
		$response["device"]["name"] = $led["device_name"] ;
		$response["device"]["status"] = $led["status"] ;
		$response["device"]["created_at"] = $led["date"];
		$response["device"]['users_id'] = $led["users_id"];
		*/
	$strSQL = "SELECT * FROM devices WHERE 1  ";
	$objQuery = mysql_query($strSQL);
	$intNumField = mysql_num_fields($objQuery);
	//$resultArray = array();
	$i=1;
	while($obResult = mysql_fetch_array($objQuery))
	{
		//$response["success"] = 1;
		$resultArray['user'][]=array(

		'device_id'=>$obResult['device_id'],
		'device_name'.$i=>$obResult['device_name'],
		'status'.$i=>$obResult['status'],
		'date'=>$obResult['date'],
		'users_id'=>$obResult['users_id'],
		);
	$i++;}

	//mysql_close($objConnect);
	//print_r($resultArray);
	echo json_encode($resultArray);
	print"<br>";




		echo json_encode($response);
	}else {
                // user failed to store
                $response["error_led"] = 1;
                $response["error_msg"] = "JSON Error occured in Status led";
                echo json_encode($response);

        }
	}
	elseif($tag == 'UpdateProfile'){
		$id = $_POST['id'];
		$uname = $_POST['uname'];
		$user = $db->UpdateProfile($id,$uname);
            if ($user) {
                // user stored successfully
            $response["success"] = 1;
			$response["POST"] = "$id";
			$response["user"]["uid"] = $user["uid"];
            $response["user"]["fname"] = $user["firstname"];
            $response["user"]["lname"] = $user["lastname"];
            $response["user"]["email"] = $user["email"];
	   		$response["user"]["uname"] = $user["username"];
            $response["user"]["unique_id"] = $user["unique_id"];
            $response["user"]["created_at"] = $user["created_at"];

                echo json_encode($response);
            } else {
                // user failed to store
                $response["error"] = 1;
                $response["error_msg"] = "Cannot Update";
                echo json_encode($response);

        }
		

	}
	
	elseif($tag == 'IP_Server'){
		$id = $_POST['id'];
		$ip = $_POST['ip'] ;
		$port = $_POST['port'];
		$user = $db->IP_server($id,$ip,$port);
            if ($user) {
                // user stored successfully
            $response["success"] = 1;
			
			$response["user"]["id"] = $user["id"];
            $response["user"]["IPAdress"] = $user["ip_server"];
            $response["user"]["Port"] = $user["port"];
           
                echo json_encode($response);
            } else {
                // user failed to store
                $response["error"] = 1;
                $response["error_msg"] = "Cannot Update";
                echo json_encode($response);

        }
		

	}
	elseif($tag == 'device_name'){
		$name1 = $_POST['name1'];
		$name2 = $_POST['name2'];
		$name3 = $_POST['name3'];
		$name4 = $_POST['name4'];

		$id= array('1','2','3','4');

		$name = array($name1,$name2,$name3,$name4) ;


		$user = $db->device_name($id,$name);
           if ($user) {
                // user stored successfully
            $response["success"] = 1;

			$response["user"]["id"] = $user["device_id"];
            $response["user"]["name"] = $user["device_name"];
            $response["user"]["status"] = $user["status"];
            $response["user"]["data"] = $user["date"];
	   		$response["user"]["user_id"] = $user["users_id"];


                echo json_encode($response);


            } else {
                // user failed to store
                $response["error"] = 1;
                $response["error_msg"] = "Cannot Update";
                echo json_encode($response);

        }

	}
	

else if ($tag == 'register') {
        // Request type is Register new user
        $fname = $_POST['fname'];
		$lname = $_POST['lname'];
        $email = $_POST['email'];
		$uname = $_POST['uname'];
        $password = $_POST['password'];



        // check if user is already existed
                    // store user
            $user = $db->storeUser($fname, $lname, $email, $uname, $password);
            if ($user) {
                // user stored successfully
            $response["success"] = 1;

            $response["user"]["fname"] = $user["firstname"];
            $response["user"]["lname"] = $user["lastname"];
            $response["user"]["email"] = $user["email"];
	    $response["user"]["uname"] = $user["username"];
            $response["user"]["uid"] = $user["uid"];
            $response["user"]["created_at"] = $user["created_at"];

                echo json_encode($response);
            } else {
                // user failed to store
                $response["error"] = 1;
                $response["error_msg"] = "JSON Error occured in Registartion";
                echo json_encode($response);

        }
    } else {
         $response["error"] = 3;
         $response["error_msg"] = "JSON ERROR";
        echo json_encode($response);
    }

}


 else {
    echo "Home Automation";
}
?>
