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

$head_title = $_GET['id'];
$array_article = get__articles($head_title);
ShowArticles($array_article, $head_title);
?>