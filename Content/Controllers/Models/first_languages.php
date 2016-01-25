<?php
function get__firstLanguages()
{
    include ('connect/connect.php');

    $sql = ("SELECT title FROM languages WHERE id=1");
    $temp = $conn->query($sql); //the variable $conn connect with file connect.php

   // $result_array = array();

    $row = $temp->fetch_array();
    // echo $row[0] . "</br>";
    $result = $row[0];


    $temp->close(); // free memory
    $conn->close(); // close connect
    return $result;
}
