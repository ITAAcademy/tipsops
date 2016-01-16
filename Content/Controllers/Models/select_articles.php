<?php
$title_id = "Java";
//get__articles($title_id);

function sip ($in)  // this function
{
    return "unhex('".bin2hex($in)."')";
}

function get__articles($title_id)
{
    include ('connect/connect.php');

    $sql = "SELECT id, title_id, title, author,  article, updated_up, revisions FROM articles  WHERE title_id =".sip($title_id);
    $temp = $conn->query($sql); //the variable $conn connect with file connect.php
    $temp->num_rows;
    $result = $temp->fetch_array();
    // die($result[3]);

    $temp->close(); // free memory
    $conn->close(); // close connect
    return $result;
}
?>