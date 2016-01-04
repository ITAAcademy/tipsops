<?php
function show_content($title, $date, $articles)
{
    echo'<h2>$title</h2>
     <hr/>
     <p><span class="glyphicon glyphicon-time"></span>Дата $date</p>
     <hr/>
    ';
    foreach($articles as $art_){
        echo '<p>$art_</p>';
    }
}
?>