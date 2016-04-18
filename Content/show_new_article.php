<?php
    include 'Controllers/Models/select_articles.php';
    include 'Controllers/controller_main_language.php';
    $head_title = NewArticle();
    ShowNewArticles($head_title);
    echo"<script src='Controllers/Views/Views_js/articles.js'></script>";
    echo"<script src='Controllers/Views/Views_js/copy_url.js'></script>";
?>