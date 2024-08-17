<?php

require_once '../BDDControl/connectBDD.php';
include '../../model/log.php';

// Checks if the form has been submitted
if (isset($_POST['connexion'])) {
    // Checks if the username and password fields are not empty
    if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
        // Secures user input
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = $_POST['mdp'];

        // Prepares and executes query to retrieve user information
        $recupUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
        $recupUser->execute(array($pseudo));

        // Check if user exists
        if ($recupUser->rowCount() > 0) {
            // Retrieves user data
            $userData = $recupUser->fetch();
            // Check password
            if (password_verify($mdp, $userData['mdp'])) {
                // Connection successful: initializes session variables
                $_SESSION['pseudo'] = $pseudo;
                $_SESSION['id'] = $userData['id'];
        
                $message = "ID : {$_SESSION['id']} = Connexion réussie pour l'utilisateur au pseudo '{$_SESSION['pseudo']}' - " . date("d-m-Y H:i:s") . PHP_EOL . PHP_EOL;
                writeLog($message, "../../../LogFiles/login.log");

                header('Location: ../../views/Page/homeConnect.php');
                exit();

            }else{
                header('Location: ../../views/Page/home.php');
                exit();
            }
        }
    }
}
