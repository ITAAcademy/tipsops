<?php
include'Models/select_articles.php';
include 'controller_main_language.php';

$head_title = $_GET['id'];
$array_article = GetArticle($head_title);
ShowSelectArticles($array_article);
echo"<script src='Content/Controllers/Views/Views_js/articles.js'></script>";
?>