<?php
include'Models/select_articles.php';
include'Models/update_revisions.php';
$id = $_GET['id'];
$value = 2; //select widt sql DB
UpdateRevisions($id, $value); //update revisions articles

?>