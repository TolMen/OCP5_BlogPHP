<?php

/* 
- Reprend une session existante
- Resumes an existing session
*/
session_start();

/* 
- Inclusion des fichiers nécessaire
- Inclusion of necessary files
*/
require_once '../BDDControl/connectBDD.php';
require_once '../../model/LogModel/logWriteModel.php';

/*
- Réinitialise les variables, puis détruit la session
- Resets variables, then destroys the session
*/
$_SESSION = array();
session_destroy();

/*
- Gestion des logs par un message et un appel de fonction
- Logs management by a message and a function call
*/
$message = "Info : Déconnexion réussie pour un utilisateur - " . date("d-m-Y H:i:s") . PHP_EOL . PHP_EOL;
writeLog($message, "../../../LogFiles/logout.log");

/*
- Redirection vers la page d'accueil des visiteurs
- Redirect to the visitors' home page
*/
header('Location: ../../views/Page/home.php');
exit();
