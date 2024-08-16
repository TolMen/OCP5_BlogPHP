<?php

// This function writes a given message to a log file.
function writeLog($message, $logFilePath) {
    $file = fopen($logFilePath, "a");
    if ($file) {
        fwrite($file, $message);
        fclose($file);
    }
}
