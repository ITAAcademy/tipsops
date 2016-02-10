<?php
/**
 * User: Ivan Pirus
 * Group: B14
 * Date: January 2016
 */
include'Models/select_articles.php';
include 'controller_main_language.php';
include 'con_cookie.php';

DeleteCookieWord('word'); // delete old cookie

<<<<<<< HEAD
UpdateCookieWord('language', 'language_search'); // Update result look language_search

=======
>>>>>>> c3cc0b5a594f6f9b9267845b0f8a1faa6ece9567
$head_title = $_GET['id'];
UpdateCookieWord($head_title, 'language');
$array_article = GetListArticles($head_title);
ShowListArticles($array_article, $head_title);

echo"<script src='Content/Controllers/Views/Views_js/articles.js'></script>";
?>