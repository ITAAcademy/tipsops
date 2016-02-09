<?php
/**
 * User: Ivan Pirus
 * Group: B14
 * Date: 06.02.2016
 * Time: 0:27
 */
if($_GET['type'])
{
    include 'con_cookie.php';
    $type = GetCookieWord('language_search');
    $SEARCH_PAGINATION = 4;
    $LANGUAGE_PAGINATION = 10;

    $result = 0;
    if($type == 'search')
    {
        $result =  $SEARCH_PAGINATION;
    }
    else if($type == 'language'){
        $result = $LANGUAGE_PAGINATION;
    }
    echo $result;
}
else{
    die("No, GET");
}
