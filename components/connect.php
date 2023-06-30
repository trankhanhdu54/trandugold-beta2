<?php




$db_name = 'mysql:host=localhost;dbname=trandugold';
$user_name = 'root';
$user_password = '';
date_default_timezone_set('Asia/Ho_Chi_Minh'); 
$conn = new PDO($db_name, $user_name, $user_password);


if (!$conn){
    die("Error". mysqli_connect_error());
}

?>
