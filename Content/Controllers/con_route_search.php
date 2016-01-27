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
//$numbers = array();
//$numbers = array("1", "2", "3");
//$temp = count($numbers); echo($temp);
ShowResult($array_result); //
//die ($select_result[1]['article']);

?>