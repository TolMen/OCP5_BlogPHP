<?php

/* 
- Inclusion des fichiers nécessaire
- Inclusion of necessary files
*/
require_once '../../model/ContactModel/contactFormModel.php';
require_once '../../model/ContactModel/contentContactModelGenerator.php.php';
require_once '../../model/LogModel/logWriteModel.php';
require_once '../../model/ContactModel/contactSecurityModel.php';

/*
- Vérifie si le formulaire est soumis, puis si les champs sont complets
- Check if the form is submitted, then if the fields are complete
*/
if (isset($_POST['envoi'])) {
    if (!empty($_POST['firstName']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message']) && isset($_POST['check'])) {

        /*
        - Sécurisation des données
        - Data security
        */
        $firstName = htmlspecialchars($_POST['firstName']);
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        /*
        - Nouvelle instance de la classe de sécurité
        - New instance of the security class
        */
        $securityContact = new SecurityFormContact();

        /*
        - Appel de la fonction de vérification
        - Call of the verification function
        */
        $errorsSecurContact = $securityContact->checkSecurityContact($firstName, $name, $email, $message);

        /*
        - Si variables errors vide, on crée une instance du modèle de la classe
        - If variables errors empty, we create an instance of the model class
        */
        if (empty($errorsSecurContact)) {
            $contactModel = new ContactModel();
            
            /*
            - Appel la fonction pour insérer les données dans la BDD
            - Call the function to insert data into the database
            */
            if ($contactModel->insertContact($bdd, $firstName, $name, $email, $message)) {
    
                /*
                - Appel la fonction pour générer l'organisation des données dans un modèle
                - Call the function to generate the organization of data in a model
                */
                $fileContent = ContactContentGenerator::generateContactContent($firstName, $name, $email, $message);
                
                /*
                - Écrit le contenu généré dans le fichier en prenant le chemin dans la variable
                - Write the generated content to the file by taking the path from the variable
                */
                $filePath = '../../../LogFiles/listContentContact.txt';
                file_put_contents($filePath, $fileContent, FILE_APPEND | LOCK_EX);
    
                /*
                - Redirection vers la page d'accueil des visiteurs
                - Redirect to the visitors' home page
                */
                header('Location: ../../views/Page/home.php');
                exit();
            } else {
                echo 'Erreur lors de l\'insertion des données.';
            }
        } else {
            echo '$errorsSecurContact';
        }
    } else {
        /*
        - Si échecs, redirection vers une page d'erreur
        - If failures, redirect to an error page
        */
        header('Location: ###');
        exit();
    }
}
