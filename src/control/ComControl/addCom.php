<?php

session_start();

// Inclusion des fichiers nécessaires
require_once '../../model/ComModel/addComModel.php';

// Vérification que le formulaire a été soumis
if (isset($_POST['submitCom'])) {

    // Sécurisation des données
    $articleId = $_POST['article'];
    $commentaire = $_POST['message'];

    // Vérification que l'utilisateur est connecté
    if (isset($_SESSION['id'])) {
        $userId = $_SESSION['id'];
    } else {
        echo "Vous devez être connecté pour laisser un commentaire.";
        exit;
    }

    // Vérification que les champs ne sont pas vides
    if (!empty($articleId) && !empty($commentaire) && !empty($userId)) {

        // Création d'une instance de la classe du modèle
        $submitCommentModel = new SubmitCommentModel();

        // Envoi du commentaire dans la base de données
        if ($submitCommentModel->insertComment($bdd, $articleId, $commentaire, $userId)) {
            // Redirection après l'ajout du commentaire
            header('Location: ../../views/Page/homeConnect.php');
            exit; // Assure-toi que le script s'arrête après la redirection
        } else {
            echo "Erreur lors de l'envoi du commentaire";
        }

    } else {
        echo "Veuillez remplir tous les champs";
    }
}
