<?php
include"Models/select_articles.php";
$head_title = $_GET['id'];
call__articles($head_title);
function call__articles($head_title)
{
    $array_article = get__articles($head_title);
    articles($array_article, $head_title);
}

function articles($array_article, $article)
{
    include"Views/main_content.php";
    $numbers=get__numbers($article);
    for( $i=0; $i<$numbers; $i++)
    {
        $title = $array_article[$i]['title'];
        $updated = $array_article[$i]['updated_up'];
        $article = $array_article[$i]['article'];
        $author = $array_article[$i]['author'];
        $revisions = $array_article[$i]['revisions'];

        show__content($title, $updated, $author, $revisions, $article);
    }
}

