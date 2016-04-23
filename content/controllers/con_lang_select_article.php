<?php
/**
 * User: Ivan Pirus
 * Group: B14
 * Date: January 2016
 */
include'models/select_articles.php';
include'models/update_revisions.php';
include 'controller_main_language.php';

$head_title = $_GET['id'];
// increment revision article
$value = SelectRevisions($head_title); //select with sql DB
$value++;
UpdateRevisions($head_title, $value); //update revisions articles

//select article
$array_article = GetArticle($head_title);
ShowSelectArticles($array_article);
echo"<script src='content/controllers/views/views_js/articles.js'></script>";
echo"<script src='content/controllers/views/views_js/copy_url.js'></script>";


?>