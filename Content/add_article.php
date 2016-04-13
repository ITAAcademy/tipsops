<?php
session_start();

$id = next($_SESSION);
$id = current($_SESSION);
$id_name = (integer) $id;


include '../Content/Controllers/Models/connect/connect.php';

$sql = "SELECT firstName, secondName FROM user WHERE id='$id_name'";
$result = mysqli_query($conn, $sql);
$name = mysqli_num_rows($result);
$author = array();
if($name>0) {
    for ($i = 0; $i < $name; $i++) {
        $author[$i] = $result->fetch_array();
    }
}


$catalog = $_POST['sel1'];
$titels = $_POST['inp1'];
$authors = addslashes($author[0][0]);
$dates = date("Y-m-d");
$editors = $_POST['editor1'];
$previe = strip_tags($_POST['editor1']);
$previe = substr($previe,0,500);
$previe = substr($previe, 0, strrpos($previe, ' '));
$resault = "INSERT INTO tips_articles(title_id,title,author, preview_article,article, created_up,updated_up)
                        VALUES ((SELECT id FROM tips_languages WHERE title='$catalog'),'$titels','$authors','$previe','$editors','$dates',NOW());";


if(isset($_POST['add_article'])){
    include 'Controllers/Models/connect/connect.php';
    mysqli_query($conn, $resault);
    //echo $authors;
    header("Location: ../text_editor.php");
}else {echo "Error writing";}
?>
