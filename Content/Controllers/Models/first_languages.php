<?php
//get__firstLanguages();
function get__firstLanguages()
{
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    include ('connect/connect.php');

    $sql = ("SELECT title FROM languages WHERE id=1");
    $temp = $conn->query($sql);

    $outp = "[";
    while($rs = $temp->fetch_array(MYSQLI_ASSOC)) {
        if ($outp != "[") {$outp .= ",";}
        $outp .= '{"Name":"'  . $rs["CompanyName"] . '",';
        $outp .= '"City":"'   . $rs["City"]        . '",';
        $outp .= '"Country":"'. $rs["Country"]     . '"}';
    }
    $outp .="]";

    $temp->close(); // free memory
    $conn->close(); // close connect
    echo($outp);
}
