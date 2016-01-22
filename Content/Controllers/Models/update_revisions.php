<?php
function UpdateRevisions($id, $value)
{
    include ('connect/connect.php');
   // $protected_value = sip($value); die($protected_value);
    $sql = "UPDATE articles SET revisions='$value' WHERE id=".sip($id);
    if($conn->query($sql))    //the variable $conn connect with file connect.php
    {}
    else{die("Error updating record:  UpdateRevisions");}


    $conn->close(); // close connect
}
function SelectRevisions($id)
{
    include ('connect/connect.php');
    $sql = "SELECT revisions FROM articles WHERE id=".sip($id);

    $temp = $conn->query($sql);    //the variable $conn connect with file connect.php
    $row = $temp->fetch_array();
    $result = $row[0];
    $temp->close(); // free memory
    $conn->close(); // close connect
    return $result;
}
?>