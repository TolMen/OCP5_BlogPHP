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
require_once '../../model/UserModel/UserRoleModel.php';

/*
- Verifie les paramétres de l'URL, les stock, puis crée une nouvelle instance de classe
- Verifies the URL parameters, stores them, then creates a new instance of the class
*/
if (isset($_GET['id']) && isset($_GET['action'])) {
    $userId = intval($_GET['id']);
    $action = $_GET['action'];

    $userRoleModel = new UserRoleModel();

    /*
    - Vérification de l'action et appel de la fonction correspondante
    - Check the action and call the corresponding function
    */
    if ($action == 'promote') {
        $userRoleModel->promoteUser($userId);
    } elseif ($action == 'demote') {
        $userRoleModel->demoteUser($userId);
    }

    /*
    - Redirection vers le tableau de bord
    - Redirect to the dashboard
    */
    header('Location: ../../views/Admin/dashboard.php');
    exit();
}
