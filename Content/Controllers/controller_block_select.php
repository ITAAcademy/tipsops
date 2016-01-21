<?php
include "Models/select_languages.php";
$list =get_languages();
include "Views/bloc_list_select.php";
show_list($list);
?>
