<?php
function SearchSelect($words)
{
    $query_search = "";
    if($words === "") return false;
    $array_words = explode(" ", $words);
    // forming query for sql db
    foreach ($array_words as $key => $value) {
        if(isset($array_words[$key -1]))
            $query_search .= " OR ";
        $query_search .= "title LIKE '%$value%' OR article LIKE '%$value%'";
    }
    $query = "SELECT id, title_id, title, author,  article, updated_up, revisions FROM articles WHERE " . $query_search;
    //die($query);
    return $query;
}

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
