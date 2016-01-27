<?php
function articles_all($link){
    // Запрос
    $query = "SELECT * FROM articles ORDER BY id";
    $result = mysqli_query($link, $query);

    if(!$result) die(mysqli_error($link));

    // Извлечение из БД
    $n = mysqli_num_rows($result);
    $articles = array();

    for($i = 0; $i < $n; $i++){
        $row = mysqli_fetch_assoc($result);
        $articles[] = $row;
    }
    return $articles;
}