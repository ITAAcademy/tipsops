<?php
/**
 * User: Ivan Pirus
 * Group: B14
 * Date: January 2016
 */
include'models/select_articles.php';
include 'controller_main_language.php';
include 'con_cookie.php';

DeleteCookieWord('word'); // delete old cookie

$head_title = get__first_article();
$array_article = GetListArticles($head_title);
ShowListArticles($array_article, $head_title);

echo"<script src='content/controllers/views/views_js/articles.js'></script>";
?>