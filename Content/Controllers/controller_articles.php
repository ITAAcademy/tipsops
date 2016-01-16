<?php
include"Models/select_articles.php";
$article = "C/C++";
$array_article = get__articles($article);
include"Views/main_content.php";
$title = $array_article['title'];
$updated = $array_article['updated_up'];
$article = $array_article['article'];
$author = $array_article['author'];
$revisions = $array_article['revisions'];

show__content($title, $updated, $author, $revisions, $article);