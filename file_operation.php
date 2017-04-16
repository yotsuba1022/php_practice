<?php

    $file = "example.txt";
    $content = "Ruru mao mao.";
    createFileAndWrite($file, $content);
    readFromFile($file);
    deleteFile($file);

    function createFileAndWrite($file, $content) {
        if($handle = fopen($file, 'w')) {
            fwrite($handle, $content);
            fclose($handle);
        } else {
            echo "Unable to create the file / write data.";
        }
    }

    function readFromFile($file) {
        if($handle = fopen($file, 'r')) {
            // Each byte equals to one character, the following line means 100 bytes.
            // echo $content = fread($handle, 100);
            
            echo $content = fread($handle, filesize($file));
            fclose($handle);
        } else {
            echo "Unable to read the file.";
        }
    }

    function deleteFile($file) {
        unlink($file);
    }

?>
