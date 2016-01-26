<?php

$form_login=$_POST["log_login"];
$form_password=$_POST["log_pwd"];

//Connect to db and looking login and password user
//if user exist login
//if not exist echo "Login or password are wrong"

include('../Content/Controllers/Models/connect/connect.php'); //include to model data base


if(empty($form_login)==false && empty($form_password)==false)
{
    include('select_user.php'); //include find user

    if($form_login === $user_db && $form_password===$pawd_db){
        echo "all is good";
    }


}else{
    echo "Error login or password. Try again later.";
}