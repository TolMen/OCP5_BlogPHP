<?php

/*
- Cette fonction écrit un message donné dans un fichier de log spécifié
- This function writes a given message to a specified log file
*/
function writeLog($message, $logFilePath) {

    $file = fopen($logFilePath, "a");

    if ($file) {
        fwrite($file, $message);
        fclose($file);
    }
}
