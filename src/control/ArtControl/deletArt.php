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
require_once '../../model/ArtModel/deletArtModel.php';
require_once '../../model/LogModel/logWriteModel.php';

/*
- Vérifie si un ID Article a été passé dans l'URL et qu'il n'est pas vide
- Checks if an ID Article has been passed in the URL and is not empty
*/
if (isset($_GET['id']) && !empty($_GET['id'])) {

    /*
    - Récupère l'ID Article, puis crée une instance de classe, pour ensuite récupérer toutes les informations d'article
    - Retrieves the ID Article, then creates an instance of the class, to then retrieve all article
    */
    $artId = $_GET['id'];
    $artDeletModel = new ArtDeletModel();
    $article = $artDeletModel->getDeletArt($artId);
    
    /*
    - Vérifie si l'article existe, puis tente de le supprimer par l'appel de fonction
    - Checks if the article exists, then tries to delete it by calling the function
    */
    if ($article) {
        if ($artDeletModel->deletArt($artId)) {

            /*
            - Gestion des logs par un message et un appel de fonction
            - Logs management by a message and a function call
            */
            $message = "Article ID : {$artId} = L'article a été supprimé avec succès - " . date("d-m-Y H:i:s") . PHP_EOL . PHP_EOL;
            writeLog($message, "../../../LogFiles/artDelet.log");

            /*
            - Redirection vers la page actuel
            - Redirect to the current page
            */
            header('Location: ../../views/Admin/dashboard.php');
            exit();
        } else {
            echo "Erreur lors de la suppression de l'article.";
        }
    } else {
        echo "Aucun article n'a été trouvé.";
    }
} else {
    echo "Aucun identifiant n'a été trouvé.";
}
