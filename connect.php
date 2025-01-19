<?php
$localhost = "localhost";
$user_name = "root";
$db_name = "avia-company";
$password = "";

$conn = new mysqli($localhost, $user_name, $password, $db_name);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$conn->set_charset("utf8"); 

?>