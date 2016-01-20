<?php
function show__content($title, $date, $author, $revisions, $articles)
{

//    foreach($articles as $art_){
    echo"<h3 class='title'>$title</h3>
     <div class='data_article'>
        <span class='glyphicon glyphicon-time'></span><font-text>&nbsp; Дата: $date &nbsp;</font-text>
        <span class='glyphicon glyphicon-user'></span><font-text>&nbsp; Автор: $author &nbsp;</font-text>
        <span class='glyphicon glyphicon-eye-open'></span><font-text>&nbsp; Переглядів: $revisions &nbsp;</font-text>
     </div>
    ";
    echo "<div class='article'>$articles</div>";
//    }

}
?>