<?php
/**
 * User: Khupchenko Oleksander
 */
require_once("../content/controllers/models/connect/connect.php");
require_once("models/select_articles.php");

if(isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = "";

if($action == "delete_article"){
    $id = $_GET['id'];
    $article = article_delete($conn, $id);
    header("Location: views/articles_admin.php");
}else{
    $articles = articles_all($conn);
    include("views/articles_admin.php");
}