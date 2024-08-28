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
require_once '../../model/UserModel/userBanModel.php';
require_once '../../model/LogModel/logWriteModel.php';

/*
- Vérifie si un ID User a été passé dans l'URL et qu'il n'est pas vide
- Checks if a User ID has been passed in the URL and is not empty
*/
if (isset($_GET['id']) && !empty($_GET['id'])) {

    /*
    - Récupère l'ID User, puis crée une instance de classe, pour ensuite récupérer toutes les informations de l'utilisateur
    - Retrieves the User ID, creates an instance of the class, and then retrieves all the user
    */
    $userId = $_GET['id'];
    $userBanModel = new UserBanModel();
    $user = $userBanModel->getBanUser($userId);

    /*
    - Vérifie si l'utilisateur existe, puis tente de le supprimer par l'appel de fonction
    - Checks if the user exists, then tries to delete it by calling the function
    */
    if ($user) {
        if ($userBanModel->deleteBanUser($userId)) {

            /*
            - Gestion des logs par un message et un appel de fonction
            - Logs management by a message and a function call
            */
            $message = "ID : {$userId} = L'utilisateur a été banni avec succès - " . date("d-m-Y H:i:s") . PHP_EOL . PHP_EOL;
            writeLog($message, "../../../LogFiles/ban.log");

            /*
            - Redirection vers la page actuel
            - Redirect to the current page
            */
            header('Location: ../../views/Admin/dashboard.php');
            exit();
        } else {
            echo "Erreur lors de la suppression de l'utilisateur.";
        }
    } else {
        echo "Aucun membre n'a été trouvé.";
    }
} else {
    echo "L'identifiant n'a pas été récupéré.";
}
