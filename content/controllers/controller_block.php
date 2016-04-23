<?php
/**
 * User: Ivan Pirus
 * Group: B14
 * Date: January 2016
 */
include "models/select_languages.php";
$list =get_languages();
include "views/block_list.php";
show_list($list);
?>