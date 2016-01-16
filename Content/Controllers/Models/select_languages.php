<?php
     function get_languages()
     {
        include ('connect/connect.php');

        $sql = ("SELECT title FROM languages");
         $temp = $conn->query($sql);    //the variable $conn connect with file connect.php


        $result_array = array();

        for($i=0; $i<$temp->num_rows; $i++)
        {
            $row = $temp->fetch_assoc();
           // echo $row['title'] . "</br>";
            $result_array[$i] =$row['title'];
        }
         $temp->close(); // free memory
         $conn->close(); // close connect
        return $result_array;
    }
?>