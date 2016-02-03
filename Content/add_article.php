<?php
include 'Controllers/Models/connect/connect.php';


$catalog = $_POST['sel1'];
$titels = $_POST['inp1'];
$authors = $_POST['inp2'];
$dates = $_POST['date'];
$editors = strip_tags($_POST['editor1']);
$previe = substr($editors,0,500);
$previe1 = substr($previe, 0, strrpos($previe, ' '));
$resault = "INSERT INTO articles(title_id,title,author, preview_article,article, created_up)
                        VALUES ((SELECT id FROM languages WHERE title='$catalog'),'$titels','$authors','$previe1','$editors','$dates');";

if(isset($_POST['add_article'])){
    mysqli_query($conn, $resault);
    echo '<a href="../index.html">Повернутись на головну сторінку</a>';
}else {echo "Error writing";}
?>
