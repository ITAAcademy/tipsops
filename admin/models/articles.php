<?php
/**
 * User: Khupchenko Oleksander
 */
//include '../../Content/Controllers/Models/connect/security_from_injections.php';

function articles_type_list($conn){
    $query = "SELECT * FROM languages ORDER BY id";
    $result = mysqli_query($conn, $query);

    if(!$result) die(mysqli_error($conn));

    // Извлечение из БД
    $n = mysqli_num_rows($result);
    $articles = array();

    for($i = 0; $i < $n; $i++){
        $row = mysqli_fetch_assoc($result);
        $articles[] = $row;
    }
    return $articles;
}

function articles_type_add($conn, $title){
    $title = trim($title);
    if($title == '')
        return false;

    $t = "INSERT INTO languages (title) VALUES ('%s')";
    $query = sprintf($t, mysqli_real_escape_string($conn, $title));
    echo $query;
    $result = mysqli_query($conn, $query);

    if(!$result)
        die(mysqli_error($conn));

    return true;
}

function articles_all($conn){
    // Запрос
    $query = "SELECT * FROM articles";
    $result = mysqli_query($conn, $query);

    if(!$result) die(mysqli_error($conn));

    // Извлечение из БД
    $n = mysqli_num_rows($result);
    $articles = array();

    for($i = 0; $i < $n; $i++){
        $row = mysqli_fetch_assoc($result);
        $articles[] = $row;
    }
    return $articles;
}

function article_delete($conn, $id){
    $id = (int)$id;
    // Проверка
    if($id == 0)
        return false;

    // Запрос
    $query = sprintf("DELETE FROM articles WHERE id='%d'", $id);
    $result = mysqli_query($conn, $query);

    if(!$result)
        die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function articles_type_delete($conn, $id){
    $id = (int)$id;
    // Проверка
    if($id == 0)
        return false;

    // Запрос
    $query = sprintf("DELETE FROM languages WHERE id='%d'", $id);
    $result = mysqli_query($conn, $query);

    if(!$result)
        die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

