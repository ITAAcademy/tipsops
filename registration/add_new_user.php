<?php
include('../Content/Controllers/Models/connect/connect.php'); //include to model data base
//$sel_id = mysql_query("SELECT id FROM user ");
//$temp_id = mysql_fetch_array($sel_id);
//echo $temp_id['id'];
//$temp_id--;
mysql_query("INSERT INTO users (login, password, email) VALUE('$form_user', '$form_password' , '$form_email')");
  
?>