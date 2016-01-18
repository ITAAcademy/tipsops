<?php
include"Models/select_articles.php";
$head_title = "CSS";
include'controller_articles.php';

$array_article = call__articles($head_title);
articles($array_article, $head_title);
//    echo $head_title;
?>