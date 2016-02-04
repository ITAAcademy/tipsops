<?php
/**
 * User: Ivan Pirus
 * Group: B14
 * Date: January 2016
 */

function PrepareUpdate($array_result)
{
    include'Models/update_revisions.php';
    $numbers = count($array_result);
    for($i=0; $i<$numbers; $i++)
    {
        $value = SelectRevisions($array_result[$i]['id']); //select with sql DB
        $value++;
        UpdateRevisions($array_result[$i]['id'], $value); //update revisions articles
    }
}

