<?php

    $json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

function writeJSONinFile($json){
    echo "file json.txt exist";
    $fp = fopen('json.txt', 'a') or die("Unable to open file!");
    $fpWrite = fwrite($fp,$json);
    if($fpWrite) echo 'Data write to file';
    else echo 'Error to write data in file';
    fclose($fp);
}

    writeJSONinFile($json);

?>