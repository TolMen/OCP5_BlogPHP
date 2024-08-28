<?php

/* 
- Inclusion des fichiers nécessaire
- Inclusion of necessary files
*/
require_once '../../model/ArtModel/addArtModel.php';

if (isset($_POST['publishArticle'])) {

    /*
    - Sécurisation des données
    - Data security
    */
    $numero = $_POST['numero'];
    $title = $_POST['title'];
    $chapo = $_POST['chapo'];
    $content = $_POST['content'];
    $datePublication = $_POST['datePublication'];

    /*
    - Crée une instance de classe, puis récupère les informations
    - Create an instance of the class, then retrieve the information
    */
    $addArticleModel = new AddArticleModel();
    if ($addArticleModel->insertArticle($numero, $title, $chapo, $content, $datePublication)) {

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
