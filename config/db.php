<?php

require 'constants.php';

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'data';

$conn = new MySQLi($host,$user,$pass,$db_name);

if($conn->connect_error){
    die('Database error:' . $conn->connect_error);
}
?>