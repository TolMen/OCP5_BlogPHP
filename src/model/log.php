<?php
function writeLog($message, $logFilePath) {
    $file = fopen($logFilePath, "a");
    if ($file) {
        fwrite($file, $message);
        fclose($file);
    }
}