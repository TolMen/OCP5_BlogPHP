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
require_once '../../model/UserModel/userCheckRoleModel.php';

/*
- Stocke l'ID de la session, crée une instance de classe, puis appelle la fonction
- Stores the session ID, creates a class instance, then calls the function
*/
$userId = $_SESSION['id'];
$userCheckRole = new CheckUserRole();
$userRole = $userCheckRole->getCheckRole($bdd, $userId);

/*
- Redirection en fonction du rôle
- Role-based redirection
*/
if ($userRole === 'Modérateur') {
    header('Location: ../../views/Page/listCom.php');
} else {
    header('Location: ../../views/Page/homeConnect.php');
}
throw new Exception(" Fin du script");
