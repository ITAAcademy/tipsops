<?php
include ('connect/connect.php');

$sql = ("INSERT INTO articles SET title ='PHP 5 Tutorial', article='PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages'");

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

?>