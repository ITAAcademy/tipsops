<?php
$servername = "localhost";
$username = "mysql";
$password = "mysql";

$connDB = mysqli_connect($servername, $username, $password);


if (!$connDB) {
    echo "Don't connect database"."<br />";
}else{
    echo "Connected successfully"."<br />";
}

$tipsops = "CREATE DATABASE tips";
if (mysqli_query($connDB, $tipsops)) {
    echo "Database created successfully"."<br />";
} else {
    echo "Error creating database: "."<br />". mysqli_error($connDB);
}

$dbname = "tips";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$tips_name = "CREATE TABLE tips_name (
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(50) NOT NULL,
	creates DATETIME,
	users VARCHAR(50) NOT NULL
	);";


if (mysqli_query($conn, $tips_name)) {
    echo "Table tips_name created successfully"."<br />";
} else {
    echo "Error creating table: "."<br />" . mysqli_error($conn);
}

$tips_block = "CREATE TABLE tips_block (
	id INT AUTO_INCREMENT PRIMARY KEY,
	id_tips INT NOT NULL,
	id_type INT NOT NULL,
	texts TEXT NOT NULL
	);";
if (mysqli_query($conn, $tips_block)) {
    echo "Table tips_block created successfully"."<br />";
} else {
    echo "Error creating table: "."<br />" . mysqli_error($conn);
}

$tips_type = "CREATE TABLE tips_type (
	ID INT AUTO_INCREMENT PRIMARY KEY,
	types VARCHAR(50) NOT NULL,
	info TEXT NOT NULL
	);";
if (mysqli_query($conn, $tips_type)) {
    echo "Table tips_type created successfully"."<br />";
} else {
    echo "Error creating table: "."<br />" . mysqli_error($conn);
}

?>