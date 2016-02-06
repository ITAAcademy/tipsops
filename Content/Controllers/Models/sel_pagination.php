<?php
/**
 * User: Ivan Pirus
 * Group: B14
 * Date: 06.02.2016
 * Time: 12:58
 */
function GetFirstArticle()
{
    $sql = "SELECT MIN(id) FROM articles";
    $temp = $conn->query($sql); //the variable $conn connect with file connect.php
    $number = $temp->num_rows;
    if($number>0)
    {
        for ($i = 0; $i < $number; $i++) {
            $result = $temp->fetch_array();
        }
    }
    else{die("SQL: Select is not successful : GetFirstArticle()");}
    return $result[0];
}