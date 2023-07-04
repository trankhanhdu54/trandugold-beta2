<?php




$db_name = 'mysql:host=fdb1027.freehostingeu.com:3306;dbname=4340698_trandugold';
$user_name = '4340698_trandugold';
$user_password = 'Gold@123';
date_default_timezone_set('Asia/Ho_Chi_Minh'); 
$conn = new PDO($db_name, $user_name, $user_password);


if (!$conn){
    die("Error". mysqli_connect_error());
}

?>
