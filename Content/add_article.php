<?php
include 'Controllers/Models/connect/connect.php';

$catalog = $_POST['sel1'];
$titels = $_POST['inp1'];
$editors = $_POST['editor1'];
$resault = "INSERT INTO articles(title_id,title,preview_article,article) VALUES ('$catalog','$titels','$editors','$editors');";

/*if(mysqli_query($conn,$resault)){
    echo "Greate word";
    }else{echo "Error";}*/
if(isset($_POST['add_article'])){
    mysqli_query($conn, $resault);
}else {echo "Error writing";}
?>
