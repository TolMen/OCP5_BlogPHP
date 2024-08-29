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
require_once '../../model/UserModel/userRegistModel.php';
require_once '../../model/LogModel/logWriteModel.php';
require_once '../../model/UserModel/userSecurityModel.php';

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
        $mdp = $_POST['mdp']; // We only hash the password after validation

        /*
        - Nouvelle instance de la classe de sécurité
        - New instance of the security class
        */
        $securityAccount = new SecurityAccount;

        /*
        - Appel de la fonction de vérification
        - Call of the verification function
        */
        $errorsSecurAccount = $securityAccount->checkSecurityAccount($pseudo, $mdp);

        /*
        - Si variables errors vide, on crée une instance du modèle de la classe
        - If variables errors empty, we create an instance of the model class
        */
        if (empty($errorsSecurAccount)) {
            $mdpHash = password_hash($mdp, PASSWORD_DEFAULT);
            $userRegistModel = new UserRegistModel();
            
            /*
            - Enregistre l'utilisateur, récupère ses informations, puis vérifie sa présence dans la BDD
            - Register the user, retrieve his information, then check his presence in the database
            */
            if ($userRegistModel->insertRegistUser($bdd, $pseudo, $mdpHash)) {
    
                $user = $userRegistModel->getRegistUser($bdd, $pseudo, $mdpHash);
    
                if ($user) {
                    /*
                    - Stock les informations dans des variables de session
                    - Store the information in session variables
                    */
                    $_SESSION['pseudo'] = $pseudo;
                    $_SESSION['id'] = $user['id'];
                }
    
                /*
                - Gestion des logs par un message et un appel de fonction
                - Logs management by a message and a function call
                */
                $logWrite = new LogWriteModel();
                $message = "ID : {$_SESSION['id']} = Inscription réussie pour l'utilisateur au pseudo '{$_SESSION['pseudo']}' - " . date("d-m-Y H:i:s") . PHP_EOL . PHP_EOL;
                $logWrite->writeLog($message, "../../../LogFiles/register.log");
    
                /*
                - Redirection vers la page d'accueil des utilisateurs
                - Redirect to the user's home page
                */
                header('Location: ../../views/Page/homeConnect.php');
                throw new Exception("Redirection vers la page d'accueil des utilisateurs");
            }
        } else {
            echo '$errorsSecurAccount';
        }
    } else {
        /*
        - Si échecs, retourne au formulaire
        - If failures, return to the form
        */
        header('Location: ../../views/Form/registForm.php');
        throw new Exception("Retourne au formulaire");
    }
}
