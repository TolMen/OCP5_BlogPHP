<?php

$host = 'localhost';
$dbname = 'ocprojet5';
$admin = 'root';
$pass = '';

include 'src/model/log.php';

try {
    $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8;", $admin, $pass);
} catch (PDOException $e) {
    $message = "ERREUR Base de donnée indisponible : " . $e->getMessage() . PHP_EOL . PHP_EOL;
    writeLog($message, "LogFiles/error.log");
    die;
}