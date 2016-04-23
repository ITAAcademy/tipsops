<?php
    include 'controllers/models/select_articles.php';
    include 'controllers/controller_main_language.php';
    $head_title = NewArticle();
    ShowNewArticles($head_title);
    echo"<script src='controllers/views/views_js/articles.js'></script>";
    echo"<script src='controllers/views/views_js/copy_url.js'></script>";
?>