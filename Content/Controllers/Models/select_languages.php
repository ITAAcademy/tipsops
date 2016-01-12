<?php
     function get_languages()
     {
        include ('connect/connect.php');

        $sql = ("SELECT title FROM languages");
         $temp = $conn->query($sql);
        $conn->close();

        $result_array = array();

        for($i=0; $i<$temp->num_rows; $i++)
        {
            $row = $temp->fetch_assoc();
           // echo $row['title'] . "</br>";
            $result_array[$i] =$row['title'];
        }


        return $result_array;
    }
?>