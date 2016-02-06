<?php
/**
 * User: Ivan Pirus
 * Group: B14
 * Date: January 2016
 */
include'con_main_search.php';
include 'controller_main_language.php';
include'Models/select_articles.php';
include 'Views/search.php';
include 'Views/pagination.php';
include 'con_cookie.php';

if(isset($_GET['key']))
{
    $words = $_GET['key'];
}
else{ die("Nothing is found");}
if($words === "")
{
    ShowEmpty();
    return;
}
$select_search = SearchSelect($words, 1, 1000);         // get select with db
$array_result = SearchResult($select_search); //controller get select with db
if($array_result != false)
{
    SaveCookieWord($words, 'word'); // Save word search in cookie
    //PrepareUpdate($array_result); // update reviews article
    $result = count($array_result); // get numbers result search
    SaveCookieWord($result, 'searched');
    ShowNumbers($result); // show numbers searched result
   // ShowResult($array_result); // show searched content
    ShowPagination();

}
else{
    ShowNumbers(0);
    ShowNoSearch($words);
}
echo"
    <script type='text/javascript' src='template/js/jquery-1.12.0.js'></script>
    <script type='text/javascript' src='Content/Controllers/Views/Views_js/pagination.js'></script>
    ";

?>