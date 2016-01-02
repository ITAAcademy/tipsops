<?php
include('connect/connect.php');

// inlude file select data, title and articles from db
$data;
$title;
$articles;

echo'<h2>$title</h2>
     <hr/>
     <p><span class="glyphicon glyphicon-time"></span>Дата $data</p>
     <hr/>
    ';
    foreach($articles as $art_){
        echo '<p>$art_</p>';
    }
?>