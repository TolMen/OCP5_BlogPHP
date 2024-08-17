<?php

/* 
- Reprend une session existante
- Resumes an existing session
*/
session_start();

/* 
- Inclusion des fichiers nécessaire :
Modèle gestion utilisateur + logs 
- Inclusion of necessary files:
User management + logs model
*/
require_once '../../model/UserModel/userRegistModel.php';
require_once '../../model/log.php';

/*
- Vérifie si le formulaire est soumis, puis si les champs sont vide
- Check if the form is submitted, and if the fields are empty
*/
if (isset($_POST['inscription'])) {
    if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {

        /*
        - Sécurisation des données
        - Data security
        */
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

        /*
        - Nouvelle instance du modèle de la classe
        - New instance of the class model
        */
        $userRegistModel = new UserRegistModel();

        /*
        - Enregistre l'utilisateur, récupère ses informations, puis vérifie sa présence dans la BDD
        - Register the user, retrieve his information, then check his presence in the database
        */
        if ($userRegistModel->insertRegistUser($pseudo, $mdp)) {

            $user = $userRegistModel->getRegistUser($pseudo, $mdp);

            if ($user) {
                /*
                - Stock les informations dans des variables de session
                - Store the information in session variables
                */
                $_SESSION['pseudo'] = $pseudo;
                $_SESSION['mdp'] = $mdp;
                $_SESSION['id'] = $user['id'];
            }

            /*
            - Gestion des logs par un message et un appel de fonction
            - Logs management by a message and a function call
            */
            $message = "ID : {$_SESSION['id']} = Inscription réussie pour l'utilisateur au pseudo '{$_SESSION['pseudo']}' - " . date("d-m-Y H:i:s") . PHP_EOL . PHP_EOL;
            writeLog($message, "../../../LogFiles/register.log");

            /*
            - Redirection vers la page d'accueil des utilisateurs
            - Redirect to the user's home page
            */
            header('Location: ../../views/Page/homeConnect.php');
            exit();
        }
    } else {
        /*
        - Si échecs, retourne au formulaire
        - If failures, return to the form
        */
        header('Location: ../../views/Form/registForm.php');
        exit();
    }
}
