<?php
/**
 * User: Ivan Pirus
 * Group: B14
 * Date: January 2016
 */
function UpdateRevisions($id, $value)
{
    include ('connect/connect.php');
    $value_pro = sip($value);
    $sql = "UPDATE tips_articles SET revisions = ".$value_pro." WHERE id=".sip($id);
    if ($conn->query($sql) === FALSE) { //the variable $conn connect with file connect.php
        die("Error updating record:  UpdateRevisions()");
    }
    $conn->close(); // close connect
}
function SelectRevisions($id)
{
    include ('connect/connect.php');
    $sql = "SELECT revisions FROM tips_articles WHERE id=".sip($id);

    $temp = $conn->query($sql);    //the variable $conn connect with file connect.php
    $row = $temp->fetch_array();
    $result = $row[0];
    $temp->close(); // free memory
    $conn->close(); // close connect
    return $result;
}
?>