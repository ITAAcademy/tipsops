<?php
/**
 * User: Ivan Pirus
 * Group: B14
 * Date: January 2016
 */
$server_name = "localhost";
$user_name = "root";
$password ="";
$db="tips";

$conn = new mysqli($server_name, $user_name, $password, $db);
mysqli_set_charset($conn, "utf8");
if($conn->connect_error){
    die("Connection foiled: " . $conn->connect_error);
}


?>