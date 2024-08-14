<?php

require_once '../BDDControl/connectBDD.php';
include '../../model/log.php';

$_SESSION = array();
session_destroy();

$message = "Info : Déconnexion réussie pour un utilisateur - " . date("d-m-Y H:i:s") . PHP_EOL . PHP_EOL;
writeLog($message, "../../../LogFiles/logout.log");

header('Location: ../../views/Page/home.php');
