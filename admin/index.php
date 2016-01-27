<?php

require_once("../Content/Controllers/Models/connect/connect.php");
require_once("models/articles.php");

$link = $conn;

if(isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = "";

if($action == "delete"){
    $id = $_GET['id'];
    $article = article_delete($link, $id);
    header("Location: index.php");
}else{
    $articles = articles_all($link);
    include ("views/articles_admin.php");
}