<?php
/**
 * User: Ivan Pirus
 * Group: B14
 * Date: January 2016
 */
include "Models/select_languages.php";
$list =get_languages();
include "Views/bloc_list_select.php";
show_list($list);
?>
