<?php
/**
 * User: Khupchenko Oleksander
 */
//include '../../content/controllers/models/connect/security_from_injections.php';

function articles_type_list($conn){
    $query = "SELECT * FROM tips_languages ORDER BY id";
    $result = mysqli_query($conn, $query);

    if(!$result) die(mysqli_error($conn));

    // ���������� �� ��
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

    $t = "INSERT INTO tips_languages (title) VALUES ('%s')";
    $query = sprintf($t, mysqli_real_escape_string($conn, $title));
    echo $query;
    $result = mysqli_query($conn, $query);

    if(!$result)
        die(mysqli_error($conn));

    return true;
}

function articles_all($conn){
    // ������
    $query = "SELECT * FROM tips_articles";
    $result = mysqli_query($conn, $query);

    if(!$result) die(mysqli_error($conn));

    // ���������� �� ��
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
    // ��������
    if($id == 0)
        return false;

    // ������
    $query = sprintf("DELETE FROM tips_articles WHERE id='%d'", $id);
    $result = mysqli_query($conn, $query);

    if(!$result)
        die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function articles_type_delete($conn, $id){
    $id = (int)$id;
    // ��������
    if($id == 0)
        return false;

    // ������
    $query = sprintf("DELETE FROM tips_languages WHERE id='%d'", $id);
    $result = mysqli_query($conn, $query);

    if(!$result)
        die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

