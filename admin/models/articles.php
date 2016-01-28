<?php
function articles_all($link){
    // ������
    $query = "SELECT * FROM articles ORDER BY id";
    $result = mysqli_query($link, $query);

    if(!$result) die(mysqli_error($link));

    // ���������� �� ��
    $n = mysqli_num_rows($result);
    $articles = array();

    for($i = 0; $i < $n; $i++){
        $row = mysqli_fetch_assoc($result);
        $articles[] = $row;
    }
    return $articles;
}

function article_delete($link, $id){
    $id = (int)$id;
    // ��������
    if($id == 0)
        return false;

    // ������
    $query = sprintf("DELETE FROM articles WHERE id='%d'", $id);
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    return mysqli_affected_rows($link);
}

