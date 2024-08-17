<?php

$host = 'localhost';
$dbname = 'ocprojet5';
$admin = 'root';
$pass = '';

require_once dirname(__DIR__, 2) . '/model/log.php';

try {
    // Connecting to database using PDO
    $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8;", $admin, $pass);
} catch (PDOException $e) {
    // If the connection fails, a PDOException is thrown
    $message = "ERREUR Base de donnée indisponible : " . $e->getMessage() . PHP_EOL . PHP_EOL;
    writeLog($message, "LogFiles/error.log");
    die;
}
