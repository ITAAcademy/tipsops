<?php
include"Models/first_languages.php";
    $result = get__firstLanguages();
include"Views/main_title.php";
    show_title($result);
//echo"<script src='Content/Controllers/Views/Views_js/title.js'></script>";
?>