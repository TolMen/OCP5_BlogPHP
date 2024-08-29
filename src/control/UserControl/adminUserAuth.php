<?php

/* 
- Inclusion des fichiers nécessaire
- Inclusion of necessary files
*/
require_once '../../model/LogModel/logWriteModel.php';
$config = require dirname(__DIR__, 3) . '/config/configAdmin.php';

/*
- Extraction des informations administrateur
- Extraction of administrator informations
*/
$adminPseudo = $config['adminPseudo'];
$adminPassword = $config['adminPassword'];

/*
- Vérification des identifiants administrateur
- Admin credentials verification
*/
if ($pseudo === $adminPseudo && $mdp === $adminPassword) {
    /*
    - Stock les informations dans des variables de session
    - Store the information in session variables
    */
    $_SESSION['pseudo'] = $pseudo;
    $_SESSION['role'] = 'admin';

    /*
    - Gestion des logs par un message et un appel de fonction
    - Logs management by a message and a function call
    */
    $message = "Info : Connexion réussie pour l'administrateur '{$pseudo}' - " . date("d-m-Y H:i:s") . PHP_EOL . PHP_EOL;
    writeLog($message, "../../../LogFiles/login.log");

    /*
    - Redirection vers la page d'administration
    - Redirect to the admin page
    */
    header('Location: ../../views/Admin/dashboard.php');
    exit();
}
