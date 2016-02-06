<?php
/**
 * User: Ivan Pirus
 * Group: B14
 * Date: 30.01.2016
 * Time: 14:34
 */
include 'controller_main_language.php';
include 'Models/select_articles.php';
include 'con_cookie.php';

if($_POST)
{echo("test");
    $page = $_POST['page']; // Current page number
    $per_page = $_POST['per_page']; // Articles per page
    if ($page != 1) $start = ($page-1) * $per_page;
    else $start=0;

    $words = GetCookieWord('word'); 

    $select_search = SearchSelect($words, $start, $per_page);         // get select with db
    $array_result = SearchResult($select_search); //controller get select with db
    $numArticles = count($array_result); // get numbers result search
    $numPage = $numArticles / $per_page; // Total number of page for pagination

    $articleList = PrepareResult($array_result); // prepare content article

    // We send back the total number of page and the article list
    $dataBack = array('numPage' => $numPage, 'articleList' => $articleList);
    $dataBack = json_encode($dataBack);

    echo $dataBack;
}
?>

