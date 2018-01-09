<?
class DB_Functions {

    private $db;

    //put your code here
    // constructor
    function __construct() {
        require_once 'DB_Connect.php';
        mysql_query("SET NAMES UTF8");
        // connecting to database
        $this->db = new DB_Connect();
        $this->db->connect();
    }

    // destructor
    function __destruct() {

    }

 public function ctrl_led($id,$status,$users_id){
		// $id1 = 5;//กำหนด id ให้กับอุปกรณื
    mysql_query("SET NAMES UTF8");
		 $result = mysql_query("SELECT * FROM devices WHERE device_id = '$id'");
		 if($result){
		 $result = mysql_query("UPDATE `devices` SET `status` = '$status',`date` = NOW(),`users_id` = '$users_id'
						  WHERE `device_id` = '$id'");
						  if ($result){

			 return true;
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
		 }}}
?>
