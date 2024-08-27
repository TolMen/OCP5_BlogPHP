<?php

/* 
- Inclusion des fichiers nécessaire
- Inclusion of necessary files
*/
require_once '../../model/ArtModel/updateArtModel.php';

/*
- Vérifie si un ID est en paramètre
- Check if an ID is in parameter
*/
if (isset($_GET['id'])) {
    $articleId = $_GET['id'];

    /*
    - Crée une instance de classe, puis récupère les informations
    - Create an instance of the class, then retrieve the information
    */
    $updateArticleModel = new UpdateArticleModel();
    $article = $updateArticleModel->getArticleId($articleId);
}

if (isset($_POST['updateArticle'])) {

    /*
    - Sécurisation des données
    - Data security
    */
    $title = $_POST['title'];
    $chapo = $_POST['chapo'];
    $content = $_POST['content'];
    $dateUpdate = $_POST['dateUpdate'];

    /*
    - Mise à jour de l'article
    - Update the article
    */
    if ($updateArticleModel->updateArticle($articleId, $title, $chapo, $content, $dateUpdate)) {

        /*
        - Gestion des logs par un message et un appel de fonction
        - Logs management by a message and a function call
        */
        $message = "Article ID : {$articleId} = L'article a été modifier avec succès - " . date("d-m-Y H:i:s") . PHP_EOL . PHP_EOL;
        writeLog($message, "../../../LogFiles/artEdit.log");

        /*
        - Redirection vers le tableau de bord
        - Redirect to the dashboard
        */
        header('Location: ../../views/Admin/dashboard.php');
        exit();
    } else {
        echo "Erreur lors de l'envoi de l'article";
    }
}

include '../../views/Admin/updateFormArt.php';