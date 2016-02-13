<?php
//include to model data base and looking for user
//include('../Content/Controllers/Models/connect/connect.php');

//$user_sel= mysql_query("SELECT * FROM users WHERE name='$form_login' ");
//$temp_user=mysql_fetch_array($user_sel);
//$user_db=$temp_user['login'];
//$pawd_db=$temp_user['password'];

function get_languages($form_login)
{
    include('../Content/Controllers/Models/connect/connect.php');

    //$sql = ("SELECT title FROM languages");
    $sql = ("SELECT * FROM users WHERE name='$form_login' ");
    $temp = $conn->query($sql);    //the variable $conn connect with file connect.php


    $result_array = array();

    for($i=0; $i<$temp->num_rows; $i++)
    {
        $row = $temp->fetch_assoc();
        // echo $row['title'] . "</br>";
        $result_array[$i] =$row['title'];
    }
    $temp->close(); // free memory
    $conn->close(); // close connect
    return $result_array;
}

$www=get_languages($form_login);
//print_r($www);

?>