<?php
include "Models/select_languages.php";
$list =get_languages();
include "Views/block_list.php";
show_list($list);
?>