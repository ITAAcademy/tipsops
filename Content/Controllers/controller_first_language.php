<?php
/**
 * User: Ivan Pirus
 * Group: B14
 * Date: January 2016
 */
include'Models/select_articles.php';
include 'controller_main_language.php';

$head_title = get__first_article();
$array_article = get__articles($head_title);
ShowArticles($array_article, $head_title);

?>