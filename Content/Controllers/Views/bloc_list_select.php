<?php
/**
 * User: Ivan Pirus
 * Group: B14
 * Date: January 2016
 */
function show_list($list){
    $count = count($list);
    echo "<select class='form-control' id='sel1' name='sel1'>";
    for($i=0; $i<$count;  $i++)
    {
        echo"<option>$list[$i]</option>";

    }
    echo"</select>";
}
?>







