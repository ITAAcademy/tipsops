
<?php
/**
 * User: Khupchenko Oleksander
 */
require_once("../content/controllers/models/connect/connect.php");
require_once("models/articles.php");

if(isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = "";

if($action == "add"){
    if(!empty($_POST)){
        articles_type_add($conn, $_POST['title']);
        header("Location: index.php");
    }
    include('views/add_type_articles.html');
}else if($action == "delete"){
        $id = $_GET['id'];
        $article = articles_type_delete($conn, $id);
        header("Location: index.php");
}else{
    $articles = articles_type_list($conn);
    include("views/articles_type_admin.php");
}
