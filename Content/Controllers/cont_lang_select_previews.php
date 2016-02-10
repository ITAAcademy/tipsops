<?php
/**
 * User: Ivan Pirus
 * Group: B14
 * Date: January 2016
 */
include'Models/select_articles.php';
include 'controller_main_language.php';
include 'con_cookie.php';

DeleteCookieWord('word'); // delete old cookie

//UpdateCookieWord('language', 'language_search'); // Update result look language_search

$head_title = $_GET['id'];
$array_article = GetListArticles($head_title);
ShowListArticles($array_article, $head_title);

echo"<script src='Content/Controllers/Views/Views_js/articles.js'></script>";
?>