<?php
function show_list($list){
    $count = count($list);
        echo "<div class='btn-group-justified'>";
        for($i=0; $i<$count;  $i++)
        {
            echo"<button type='button' class='btn btn-success' id='button' name='$list[$i]' >$list[$i]</button>";
        }
        echo"</div>";
}
?>