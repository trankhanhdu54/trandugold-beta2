<?php




$db_name = 'mysql:host=bln4gido9kwljjn4et1g-mysql.services.clever-cloud.com:3306;dbname=bln4gido9kwljjn4et1g';
$user_name = 'ujktaoitnxiu30jv';
$user_password = '9lTnWoISxsAEFKVBHUwS';
date_default_timezone_set('Asia/Ho_Chi_Minh'); 
$conn = new PDO($db_name, $user_name, $user_password);


if (!$conn){
    die("Error". mysqli_connect_error());
}

?>
