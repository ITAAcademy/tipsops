<?php
include'Models/select_articles.php';
include 'controller_main_language.php';

$head_title = get__first_article();
$array_article = GetListArticles($head_title);
ShowListArticles($array_article, $head_title);

?>