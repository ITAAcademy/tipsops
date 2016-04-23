<?php
/**
 * User: Ivan Pirus
 * Group: B14
 * Date: January 2016
 */
include"models/first_languages.php";
    $result = get__firstLanguages();
include"views/main_title.php";
    show_title($result);
//echo"<script src='Content/Controllers/Views/Views_js/title.js'></script>";
?>