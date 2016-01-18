<?php
include"connect/security_from_injections.php"; //include function protections sip($in)

function get__articles($title_id)
{
    include ('connect/connect.php');

    $sql = "SELECT id, title_id, title, author,  article, updated_up, revisions FROM articles  WHERE title_id =".sip($title_id);
    $temp = $conn->query($sql); //the variable $conn connect with file connect.php
    $number = $temp->num_rows;
    $result = array();
    if($number>0) {
        for ($i = 0; $i < $number; $i++) {
            $result[$i] = $temp->fetch_array();
        }
    }
    else{die("SQL: Select is not successful");}
    // die($result[3]);

    $temp->close(); // free memory
    $conn->close(); // close connect
    return $result;
}

function get__numbers($article)
{
    include ('connect/connect.php');
    $sql = "SELECT COUNT('id') FROM articles WHERE title_id =".sip($article);
    $temp = $conn->query($sql); //the variable $conn connect with file connect.php
    if($temp->num_rows>0)
    {
        $result =  $temp->fetch_array();
    }
    else{die("SQL: Select is not successful");}

    $temp->close(); // free memory
    $conn->close(); // close connect
    return $result[0];
}
?>