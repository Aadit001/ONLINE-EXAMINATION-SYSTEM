<?php
    $file = "test.txt";

    if(!file_exists($file)) die("I'm sorry, the file doesn't seem to exist.");

    $type = filetype($file);
    // Send file headers
    header("Content-type: $type");
    header("Content-Disposition: attachment;filename=\"test.txt\"");
    header("Content-Transfer-Encoding: binary"); 
    header('Pragma: no-cache'); 
    header('Expires: 0');
    // Send the file contents.
    set_time_limit(0); 
    readfile($file);
    exit();

?>