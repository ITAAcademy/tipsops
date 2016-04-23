<?php
/**
 * User: Ivan Pirus
 * Group: B14
 * Date: January 2016
 */
function ShowArticles($array_article, $head_title)
{
    include"views/main_content.php";
    $numbers=get__numbers($head_title);//get numbers articles with sql db
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
    include"views/main_content.php";
    $numbers = get__numbers($article);
    for($i=0; $i<$numbers; $i++)
    {
        $id= $array_article[$i]['id'];
        $title = $array_article[$i]['title'];
        $preview_article = $array_article[$i]['preview_article'];
        ShowPreviewArticle($title, $preview_article, $id);
    }
}
function ShowSelectArticles($array_article)
{
    include"views/main_content.php";

        $title = $array_article[0]['title'];
        $updated = $array_article[0]['updated_up'];
        $article = $array_article[0]['article'];
        $author = $array_article[0]['author'];
        $revisions = $array_article[0]['revisions'];

        show__content($title, $updated, $author, $revisions, $article);
}
function ShowNewArticles($array_article)
{
    include"views/main_content.php";

    $title = $array_article[0]['title'];
    $updated = $array_article[0]['updated_up'];
    $article = $array_article[0]['article'];
    $author = $array_article[0]['author'];

    show_new_article($title, $updated, $author, $article);
}

function ShowResult($array_article)
{
    include"views/main_content.php";
    $numbers=count($array_article);//get numbers article
    for( $i=0; $i<$numbers; $i++)
    {
        $title = $array_article[$i]['title'];
        $updated = $array_article[$i]['updated_up'];
        $article = $array_article[$i]['article'];
        $author = $array_article[$i]['author'];
        $revisions = $array_article[$i]['revisions'];

        ShowContentSearch($title, $updated, $author, $revisions, $article);
    }
}
function PrepareResult($array_article) // prepare result for encode in JSON
{
    include"views/main_content.php";
    $numbers=count($array_article);//get numbers article
    $result = "";
    for( $i=0; $i<$numbers; $i++)
    {
        $title = $array_article[$i]['title'];
        $updated = $array_article[$i]['updated_up'];
        $article = $array_article[$i]['article'];
        $author = $array_article[$i]['author'];


        $result .= PrepareContentSearch($title, $updated, $author, $article);
    }
    return $result;
}


