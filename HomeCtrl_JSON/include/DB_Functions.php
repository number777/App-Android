<?php

class DB_Functions {

    private $db;

    //put your code here
    // constructor
    function __construct() {
        require_once 'DB_Connect.php';
        // connecting to database
        $this->db = new DB_Connect();
        $this->db->connect();
    }

    // destructor
    function __destruct() {

    }


    /**
     * Random string which is sent by mail to reset password
     */

public function random_string()
{
    $character_set_array = array();
    $character_set_array[] = array('count' => 7, 'characters' => 'abcdefghijklmnopqrstuvwxyz');
    $character_set_array[] = array('count' => 1, 'characters' => '0123456789');
    $temp_array = array();
    foreach ($character_set_array as $character_set) {
        for ($i = 0; $i < $character_set['count']; $i++) {
            $temp_array[] = $character_set['characters'][rand(0, strlen($character_set['characters']) - 1)];
        }
    }
    shuffle($temp_array);
    return implode('', $temp_array);
}


public function forgotPassword($forgotpassword, $newpassword, $salt){
  mysql_query("SET NAMES UTF8");
	$result = mysql_query("UPDATE `users` SET `encrypted_password` = '$newpassword',`salt` = '$salt'
						  WHERE `email` = '$forgotpassword'");

if ($result) {

return true;

}
else
{
return false;
}

}
public function device_name($id,$name) {
       for($i=0;$i<count($id);$i++){
       $result = $result = mysql_query("UPDATE devices SET device_name = '".$name[$i]."' WHERE device_id = ".$id[$i]);

		}

        // check for successful store
        if ($result) {

			$result = mysql_query("SELECT * FROM devices ");

return mysql_fetch_array($result);

}
else
{
return false;
}
    }

    public function UpdateProfile($id, $uname) {
      mysql_query("SET NAMES UTF8");

        $result = $result = mysql_query("UPDATE users SET username = '".$uname." ', update_at = NOW() WHERE uid = ".$id);
        // check for successful store
        if ($result) {
			$result = mysql_query("SELECT * FROM users WHERE uid = $id");

return mysql_fetch_array($result);

}
else
{
return false;
}
    }
	
	
    public function IP_Server($id, $ip,$port) {
      mysql_query("SET NAMES UTF8");

        $result = $result = mysql_query("UPDATE ip_server SET ip_server = '".$ip." ', port = '".$port."' WHERE id = ".$id);
        // check for successful store
        if ($result) {
			$result = mysql_query("SELECT * FROM ip_server WHERE id = $id");

return mysql_fetch_array($result);

}
else
{
return false;
}
    }
/**
     * Adding new user to mysql database
     * returns user details
     */

    public function storeUser($fname, $lname, $email, $uname, $password) {
      mysql_query("SET NAMES UTF8");
        $uuid = uniqid('', true);
        $hash = $this->hashSSHA($password);
        $encrypted_password = $hash["encrypted"]; // encrypted password
        $salt = $hash["salt"]; // salt
		$status = "User";
        $result = mysql_query("INSERT INTO users(unique_id, firstname, lastname, email, username, encrypted_password, salt, created_at ,users_status) VALUES('$uuid', '$fname', '$lname', '$email', '$uname', '$encrypted_password', '$salt', NOW() ,'$status')");
        // check for successful store
        if ($result) {
            // get user details
            $uid = mysql_insert_id(); // last inserted id
            $result = mysql_query("SELECT * FROM users WHERE uid = $uid");
            // return user details
            return mysql_fetch_array($result);
        } else {
            return false;
        }
    }
/**
     * Verifies devices status and date
     */
	 public function ctrl_led($id,$status,$users_id){
		// $id1 = 5;//กำหนด id ให้กับอุปกรณื
		 $result = mysql_query("SELECT * FROM devices WHERE device_id = '$id'");
		 if($result){
		 $result = mysql_query("UPDATE `devices` SET `status` = '$status',`date` = NOW(),`users_id` = '$users_id'
						  WHERE `device_id` = '$id'");

		 if ($result){
			  $result = mysql_query("SELECT * FROM devices WHERE device_id = $id");
			 return mysql_fetch_array($result);

		}else{
			return false;
			}
		 }
		 else{
			 $result = mysql_query("INSERT INTO devices(status,date,users_id) VALUES('$status', NOW(), '$users_id')");
		 if ($result){
			// $id = mysql_insert_id();
			 $result = mysql_query("SELECT * FROM devices WHERE device_id = $id");
			 return mysql_fetch_array($result);
		}else{
			return false;
			}
		 }}
    /**
     * Verifies user by email and password
     */
    public function getUserByEmailAndPassword($Username, $password) {
        $result = mysql_query("SELECT * FROM users WHERE username = '$Username'") or die(mysql_error());

        // check for result
        $no_of_rows = mysql_num_rows($result);
        if ($no_of_rows > 0) {
            $result = mysql_fetch_array($result);
            $salt = $result['salt'];
            $encrypted_password = $result['encrypted_password'];
            $hash = $this->checkhashSSHA($salt, $password);
            // check for password equality
            if ($encrypted_password == $hash) {
                // user authentication details are correct
                return $result;
            }
        } else {
            // user not found
            return false;
        }
    }


 /**
     * Check user is existed or not
     */
    public function isUserExisted($email) {
        $result = mysql_query("SELECT email from users WHERE email = '$email'");
        $no_of_rows = mysql_num_rows($result);
        if ($no_of_rows > 0) {
            // user existed
            return true;
        } else {
            // user not existed
            return false;
        }
    }

    /**
     * Encrypting password
     * returns salt and encrypted password
     */
    public function hashSSHA($password) {

        $salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
        return $hash;
    }

    /**
     * Decrypting password
     * returns hash string
     */
    public function checkhashSSHA($salt, $password) {

        $hash = base64_encode(sha1($password . $salt, true) . $salt);

        return $hash;
    }

}

?>
