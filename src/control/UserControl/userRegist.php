<?php
session_start();

require_once '../BDDControl/connectBDD.php';
include '../../model/log.php';

// Checks if the registration form has been submitted
if(isset($_POST['envoi'])){
    // Check if the username and password fields are not empty
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        // Secure the nickname and hash the password
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        // Prepare and execute the query to insert the new user into the database
        $insertUser = $bdd->prepare('INSERT INTO users(pseudo, mdp)VALUES(?, ?)');
        $insertUser->execute(array($pseudo, $mdp));

        // Retrieve the information of the newly registered user
        $recupUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND mdp = ?');
        $recupUser->execute(array($pseudo, $mdp));
        // If the user is found, initialize the session variables
        if($recupUser->rowCount() > 0){
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupUser->fetch()['id'];
        }

        $message = "ID : {$_SESSION['id']} = Inscription réussie pour l'utilisateur au pseudo '{$_SESSION['pseudo']}' - " . date("d-m-Y H:i:s") . PHP_EOL . PHP_EOL;
        writeLog($message, "../../../LogFiles/register.log");

        header('Location: ../../views/Page/homeConnect.php');

    }else{
        header('Location: ../../views/Form/registForm.php');
        exit();
    }
}
