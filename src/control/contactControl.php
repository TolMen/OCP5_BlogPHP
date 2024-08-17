<?php

// Inclusion des fichiers nécessaire
require_once 'BDDControl/connectBDD.php';
require_once '../model/log.php';

// Vérification de la soumission du formulaire
if(isset($_POST['envoi'])){
    if(!empty($_POST['firstName']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message']) && isset($_POST['check'])){
        // Sécuriser les données du formulaire
        $firstName = htmlspecialchars($_POST['firstName']);
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        
        // Insérer les données dans la base de données
        $insertContact = $bdd->prepare('INSERT INTO formcontacts(firstName, name, email, message) VALUES(?, ?, ?, ?)');
        $insertContact->execute(array($firstName, $name, $email, $message));

        require_once '../model/contentFormContact.php';
        
        // Définir le chemin du fichier
        $filePath = '../../LogFiles/MessageFormContact.txt';

        // Écrire le contenu dans le fichier
        file_put_contents($filePath, $fileContent, FILE_APPEND | LOCK_EX);

        header('Location: ../views/Page/home.php');
        exit();

    } else {
        // Redirection si les champs sont vides
        header('Location: ###');
        exit();
    }
}

