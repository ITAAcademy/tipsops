<?php
/**
 * User: Ivan Pirus
 * Group: B14
 * Date: 02.02.2016
 * Time: 15:45
 */
function ShowPagination()
{
    echo"
    <div id='pagination'>Pagination
            <!-- Just tell the system we start with page 1 (id=1) -->
            <!-- See the .js file, we trigger a click when page is loaded -->
            <div><a href=\"#\" id=\"1\"></a></div>
        </div>
     ";
}