<?php
include 'connect/security_from_injections.php'; //include function protections sip($in)

function get__articles($title_id)
{
    include 'connect/connect.php';
    $sql = "SELECT id, title_id, title, author,  article, updated_up, revisions FROM articles  WHERE title_id =(SELECT id FROM languages WHERE title=".sip($title_id).")";
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
    $sql = "SELECT COUNT('id') FROM articles WHERE title_id =(SELECT id FROM languages WHERE title=".sip($article).")";
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
    $sql = "SELECT id, title_id, title, preview_article FROM articles WHERE title_id =(SELECT id FROM languages WHERE title=".sip($title_id).")";
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
function GetArticle($title_id) {
    include 'connect/connect.php';
    $sql = "SELECT id, title, author,  article, updated_up, revisions FROM articles  WHERE id =" .sip($title_id);
    $temp = $conn->query($sql); //the variable $conn connect with file connect.php
    $number = $temp->num_rows;
    $result = array();
    if($number > 0) {
        for ($i = 0; $i < $number; $i++) {
            $result[$i] = $temp->fetch_array();
        }
    } else {
        die("SQL: Select is not successful: GetArticle");
    }
    $temp->close(); // free memory
    $conn->close(); // close connect
    return $result;
}
function SearchSelect($words)
{
    $query_search = "";
    if($words === "") return false;
    $array_words = explode(" ", $words);
    // forming query for sql db
    foreach ($array_words as $key => $value) {
        if(isset($array_words[$key -1]))
            $query_search .= " OR ";
        $query_search .= "title LIKE '%$value%' COLLATE utf8_unicode_ci OR
        article LIKE '%$value%' COLLATE utf8_unicode_ci";
    }
    $query = "SELECT id, title_id, title, author,  article, updated_up, revisions FROM articles WHERE " . $query_search;
    //die($query);
    return $query;
}
function SearchResult($search_select)
{
    include 'connect/connect.php';
    $temp = $conn->query($search_select); //the variable $conn connect with file connect.php
$number = $temp->num_rows;
    $result = array();

    if($number > 0) {
        for ($i = 0; $i < $number; $i++) {
            $result[$i] = $temp->fetch_assoc();
        }
    } else {
        return false;
    }
    $temp->close(); // free memory
    $conn->close(); // close connect
    return $result;
}

?>