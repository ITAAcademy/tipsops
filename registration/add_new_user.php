<?php
include('/../model/zazy_db.php'); //include to model data base
//$sel_id = mysql_query("SELECT id FROM user ");
//$temp_id = mysql_fetch_array($sel_id);
//echo $temp_id['id'];
//$temp_id--;
mysql_query("INSERT INTO user (name, email, pasword, way_to_file) VALUE('$form_user', '$form_email', '$form_password', '$way_to_file') "); 
  
?>