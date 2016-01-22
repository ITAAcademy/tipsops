<?php
include'Models/select_articles.php';
include'Models/update_revisions.php';
include 'controller_main_language.php';

$head_title = $_GET['id'];

$value = SelectRevisions($head_title); //select with sql DB
$value++; // increment revision article
UpdateRevisions($head_title, $value); //update revisions articles

$array_article = GetArticle($head_title);
ShowSelectArticles($array_article);
echo"<script src='Content/Controllers/Views/Views_js/articles.js'></script>";



?>