<?php
include 'connect/security_from_injections.php'; //include function protections sip($in)

function get__articles($title_id)
{
    include 'connect/connect.php';
    $sql = "SELECT id, title_id, title, author,  article, updated_up, revisions FROM articles  WHERE title_id =".sip($title_id);
    $temp = $conn->query($sql); //the variable $conn connect with file connect.php
    $number = $temp->num_rows;
    $result = array();
    if($number>0) {
        for ($i = 0; $i < $number; $i++) {
            $result[$i] = $temp->fetch_array();
        }
    }
    else{die("SQL: Select is not successful: get__articles");}

    $temp->close(); // free memory
    $conn->close(); // close connect
    return $result;
}

function get__numbers($article)
{
    include 'connect/connect.php';
    $sql = "SELECT COUNT('id') FROM articles WHERE title_id =".sip($article);
    $temp = $conn->query($sql); //the variable $conn connect with file connect.php
    if($temp->num_rows>0)
    {
        $result =  $temp->fetch_array();
    }
    else{die("SQL: Select is not successful: get__numbers");}

    $temp->close(); // free memory
    $conn->close(); // close connect
    return $result[0];
}
function get__first_article()
{
    include 'connect/connect.php';
    $sql = "SELECT MIN(id) FROM languages ";
    $temp = $conn->query($sql); //the variable $conn connect with file connect.php
    $number = $temp->num_rows;
    if($number>0)
    {
        for ($i = 0; $i < $number; $i++) {
            $result = $temp->fetch_array();
        }
    }
    else{die("SQL: Select is not successful : first_article");}

    $sql = "SELECT title FROM languages WHERE id =".sip($result[0]);
    $temp = $conn->query($sql); //the variable $conn connect with file connect.php
    $number = $temp->num_rows;
    if($number>0)
    {
        for ($i = 0; $i < $number; $i++) {
            $result = $temp->fetch_array();
        }
    }
    else{die("SQL: Select is not successful : first_article");}

    $temp->close(); // free memory
    $conn->close(); // close connect
    return $result[0];
}
function GetListArticles($title_id)
{
    include 'connect/connect.php';
    $sql = "SELECT title_id, title, preview_article FROM articles WHERE title_id =".sip($title_id);
    $temp = $conn->query($sql); //the variable $conn connect with file connect.php
    $number = $temp->num_rows;
   // die("test2");
    $result = array();
    if($number>0) {
        for ($i = 0; $i < $number; $i++)
        {
            $result[$i] = $temp->fetch_array();
        }
    }
    else{die("SQL: Select is not successful: GetListArticles");}

    $temp->close(); // free memory
    $conn->close(); // close connect

    return $result;
}
?>