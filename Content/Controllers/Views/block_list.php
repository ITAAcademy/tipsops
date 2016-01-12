<?php
function show_list($list){
    $count = count($list);

        for($i=0; $i<$count;  $i++)
        {
            echo"<button type=\"button\" class=\"btn btn-info\" id='button'>$list[$i]</button>";
        }

}
?>