<?php
mysql_connect("localhost","root","1234");
mysql_select_db("home_ctrl");

//ดึงข้อมูลออกมาในรูปแบบ UTF 8
mysql_query("SET NAMES UTF8");

//ส่วนของ SELECT ข้อมูลจาก DataBase
$moreYear=$_REQUEST['id'];
if(!$moreYear) $moreYear=0;
$q=mysql_query("SELECT * FROM ip_server where id > $moreYear");
while($e=mysql_fetch_assoc($q))
       $output[]=$e;

//แปลงข้อมูลให้อยู่ในรูปแบบของ JSON และพิมพ์ข้อมูลออกมา
print(json_encode($output));
mysql_close();
?>