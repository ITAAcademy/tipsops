<?php

require_once("../Content/Controllers/Models/connect/connect.php");
require_once("models/articles.php");

$link = $conn;

$articles = articles_all($link);

include ("views/articles_admin.php");