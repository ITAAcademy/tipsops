<?php
/**
 * User: Ivan Pirus
 * Group: B14
 * Date: January 2016
 */
$server_name = "localhost";
$user_name = "mysql";
$password ="mysql";
$db="qa_intita";

$conn = new mysqli($server_name, $user_name, $password, $db);
mysqli_set_charset($conn, "utf8");
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>