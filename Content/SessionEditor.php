<?php
session_start();
$id = next($_SESSION);
$id = current($_SESSION);

if(($id)){
    header('Location: ../text_editor.html');
}else{
    header('Location: ../index.html');
    exit;

}

?>