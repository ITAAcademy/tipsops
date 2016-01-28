<?php
include'con_main_search.php';
include 'controller_main_language.php';
include'Models/select_articles.php';
include 'Views/search.php';

if(isset($_GET['key']))
{
    $words = $_GET['key'];
}
else{ die("Nothing is found");}
if($words === "") return false;
$select_search = SearchSelect($words);         // get select with db
$array_result = SearchResult($select_search); //controller get select with db
if($array_result != false)
{
    PrepareUpdate($array_result); // update reviews article
    $result = count($array_result);
    ShowNumbers($result);
    ShowResult($array_result);
}
else{
    ShowNumbers(0);
    ShowEmpty($words);
}


?>