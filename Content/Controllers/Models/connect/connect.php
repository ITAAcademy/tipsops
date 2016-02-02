<?php

$server_name = "localhost";
$user_name = "root";
$password ="";
$db="new_tipsops";

$conn = new mysqli($server_name, $user_name, $password, $db);
mysqli_set_charset($conn, "utf8");
if($conn->connect_error){
    die("Connection foiled: " . $conn->connect_error);
}

?>