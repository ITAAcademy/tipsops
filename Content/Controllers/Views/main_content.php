<?php
function show__content($title, $date, $author, $revisions, $articles)
{

//    foreach($articles as $art_){
        echo"<h3>$title</h3>
         <hr/>
         <p><span class='glyphicon glyphicon-time'></span><font-text>&nbsp; Дата: $date &nbsp;</font-text>
            <span class='glyphicon glyphicon-user'></span><font-text>&nbsp; Автор: $author &nbsp;</font-text>
            <span class='glyphicon glyphicon-eye-open'></span><font-text>&nbsp; Переглядів: $revisions &nbsp;</font-text>
         </p>
         <hr/>
        ";
        echo "<p>$articles</p>";
//    }
}
?>