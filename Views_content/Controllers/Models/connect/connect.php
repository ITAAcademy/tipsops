<?php
$server_name = "localhost";
$user_name = "root";
$password ="";
$db="tipsops";

$conn = new mysqli($server_name, $user_name, $password, $db);
if($conn->connect_error){
    die("Connection foiled: " . $conn->connect_error);
}
echo "Conected successfully"."</br>";
?>