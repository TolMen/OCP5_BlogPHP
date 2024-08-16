<?php

$host = 'localhost';
$dbname = 'ocprojet5';
$admin = 'root';
$pass = '';

include 'src/model/log.php';

try {
    // Connecting to database using PDO
    $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8;", $admin, $pass);
} catch (PDOException $e) {
    // If the connection fails, a PDOException is thrown
    $message = "ERREUR Base de donnée indisponible : " . $e->getMessage() . PHP_EOL . PHP_EOL;
    writeLog($message, "LogFiles/error.log");
    die;
}
