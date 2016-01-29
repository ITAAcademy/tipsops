<?php
include('../Content/Controllers/Models/connect/connect.php'); //include to model data base

$sql = "INSERT INTO users (login, password, email)
VALUES ('$form_user', '$form_password', '$form_email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?>