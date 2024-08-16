<?php

require_once '../../BDDControl/connectBDD.php';
include '../../model/log.php';

$message = "ID : {$_SESSION['id']} = Déconnexion réussie pour l'utilisateur au pseudo '{$_SESSION['pseudo']}' - " . date("d-m-Y H:i:s") . PHP_EOL . PHP_EOL;
writeLog($message, "../../../LogFiles/logout.log");

$_SESSION = array();
session_destroy();

header('Location: ../../views/Page/home.php');
