<?php
//include to model data base and looking for user
include('../Content/Controllers/Models/connect/connect.php');
$user_sel= mysql_query("SELECT * FROM users WHERE name='$username' ");
$temp_user=mysql_fetch_array($user_sel);
$user_db=$temp_user['login'];
$pawd_db=$temp_user['password'];



//$user_sel

?>