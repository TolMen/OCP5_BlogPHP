<?php

require_once '../BDDControl/connectBDD.php';
include '../../model/log.php';

if (isset($_POST['connexion'])) {
    if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = $_POST['mdp'];

        $recupUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
        $recupUser->execute(array($pseudo));

        if ($recupUser->rowCount() > 0) {
            $userData = $recupUser->fetch();
            if (password_verify($mdp, $userData['mdp'])) {
                $_SESSION['pseudo'] = $pseudo;
                $_SESSION['id'] = $userData['id'];

                $message = "ID : {$_SESSION['id']} = Connexion réussie pour l'utilisateur au pseudo '{$_SESSION['pseudo']}' - " . date("d-m-Y H:i:s") . PHP_EOL . PHP_EOL;
                writeLog($message, "../../../LogFiles/login.log");

                header('Location: ../../views/Page/homeConnect.php');
                exit();

            }else{
                header('Location: ../Form/loginForm.php');
                exit();
            }
        }
    }
}

