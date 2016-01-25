<?php
include'Models/select_articles.php';
include 'controller_main_language.php';

$head_title = $_GET['id'];
$array_article = get__articles($head_title);
ShowArticles($array_article, $head_title);
?>