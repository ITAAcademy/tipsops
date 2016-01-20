<?php
function ShowArticles($array_article, $article)
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
function ShowListArticles($array_article, $article)
{
    include"Views/main_content.php";
    $numbers = get__numbers($article);
    for($i=0; $i<$numbers; $i++)
    {
        $title = $array_article[$i]['title'];
        $preview_article = $array_article[$i]['preview_article'];
        ShowPreviewArticle($title, $preview_article);
    }
}

