<?php
include 'Controllers/Models/connect/connect.php';

$catalog = $_POST['sel1'];
$titels = $_POST['inp1'];
$authors = $_POST['inp2'];
$dates = $_POST['date'];
$editors = $_POST['editor1'];
$resault = "INSERT INTO articles(title_id,title,author, preview_article,article, created_up)
                        VALUES ('$catalog','$titels','$authors','$editors','$editors',$dates);";

if(isset($_POST['add_article'])){
    mysqli_query($conn, $resault);
    echo '<a href="../index.html">Повернутись на головну сторінку</a>';
}else {echo "Error writing";}
?>
