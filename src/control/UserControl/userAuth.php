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
require_once '../../model/UserModel/userAuthModel.php';
require_once '../../model/LogModel/logWriteModel.php';

/*
- Vérifie si le formulaire est soumis, puis si les champs sont vide
- Check if the form is submitted, and if the fields are empty
*/
if (isset($_POST['connexion'])) {
    if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {

        /*
        - Sécurisation et récupération des données
        - Security and data retrieval
        */
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = $_POST['mdp'];

        /*
        - Nouvelle instance du modèle de la classe
        - New instance of the class model
        */
        $userAuthModel = new UserAuthModel();

        /*
        - Récupère le pseudo fourni
        - Retrieves the provided pseudo
        */
        $dataAuthUser = $userAuthModel->getAuthUser($pseudo);

        /*
        - Vérifie la présence du pseudo, puis si le MDP correspond au MDP haché dans la BDD
        - Check if the pseudo exists, and if the password matches the hashed password in the database
        */
        if ($dataAuthUser) {
            if (password_verify($mdp, $dataAuthUser['mdp'])) {

                /*
                - Stock les informations dans des variables de session
                - Store the information in session variables
                */
                $_SESSION['pseudo'] = $pseudo;
                $_SESSION['id'] = $dataAuthUser['id'];

                /*
                - Gestion des logs par un message et un appel de fonction
                - Logs management by a message and a function call
                */
                $message = "ID : {$_SESSION['id']} = Connexion réussie pour l'utilisateur au pseudo '{$_SESSION['pseudo']}' - " . date("d-m-Y H:i:s") . PHP_EOL . PHP_EOL;
                writeLog($message, "../../../LogFiles/login.log");

                /*
                - Redirection vers la page d'accueil des utilisateurs
                - Redirect to the user's home page
                */
                header('Location: ../../views/Page/homeConnect.php');
                exit();
            } else {
                /*
                - Si échecs, retourne au formulaire
                - If failures, return to the form
                */
                header('Location: ../../views/Page/home.php');
                exit();
            }
        }
    }
}
