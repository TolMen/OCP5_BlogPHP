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
require_once '../../model/ComModel/addComModel.php';

/*
- Vérifie si le formulaire est soumis
- Check if the form is submitted
*/
if (isset($_POST['submitCom'])) {

    /*
    - Stockage des données
    - Data storage
    */
    $articleId = $_POST['article'];
    $commentaire = $_POST['message'];

    /*
    - Vérifie que l'utilisateur est connecté
    - Verifies that the user is logged in
    */
    if (isset($_SESSION['id'])) {
        $userId = $_SESSION['id'];
    } else {
        echo "Vous devez être connecté pour laisser un commentaire.";
        throw new Exception("Non connecté");
    }

    /*
    - Vérifie que les champs ne sont pas vides
    - Check that the fields are not empty
    */
    if (!empty($articleId) && !empty($commentaire) && !empty($userId)) {

        /*
        - Nouvelle instance de la classe de sécurité
        - New instance of the security class
        */
        $submitCommentModel = new SubmitCommentModel();

        if ($submitCommentModel->insertComment($bdd, $articleId, $commentaire, $userId)) {
            header('Location: ../../views/Page/homeConnect.php');
            throw new Exception(" Redirection à la page d'accueil utilisateurs");
        } else {
            echo "Erreur lors de l'envoi du commentaire";
        }
    } else {
        echo "Veuillez remplir tous les champs";
    }
}
