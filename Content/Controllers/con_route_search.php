<?php
include'con_main_search.php';
include 'controller_main_language.php';
include'Models/select_articles.php';

if(isset($_GET['key']))
{
    $words = $_GET['key'];
}
else{ die("Nothing is found");}
if($words === "") return false;
$select_search = SearchSelect($words);         // get select with db
$array_result = SearchResult($select_search); //controller get select with db
PrepareUpdate($array_result); // update reviews article
ShowResult($array_result);


?>