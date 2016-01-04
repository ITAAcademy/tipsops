<?php
function show_content($title, $data, $articles)
{
    echo'<h2>$title</h2>
     <hr/>
     <p><span class="glyphicon glyphicon-time"></span>Дата $data</p>
     <hr/>
    ';
    foreach($articles as $art_){
        echo '<p>$art_</p>';
    }
}
?>