<?php

     function get_languages(){
        include ('connect/connect.php');

        $sql = ("SELECT * title FROM languages");
        $temp = $conn->query($sql);
        $resalt = $temp->fetch_assoc();
        $conn->close();
        return $resalt;
    }
?>