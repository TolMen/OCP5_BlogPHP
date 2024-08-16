<?php
session_start();

require_once '../../BDDControl/connectBDD.php';
include '../../model/log.php';

if(isset($_POST['envoi'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        $insertUser = $bdd->prepare('INSERT INTO users(pseudo, mdp)VALUES(?, ?)');
        $insertUser->execute(array($pseudo, $mdp));

        $recupUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND mdp = ?');
        $recupUser->execute(array($pseudo, $mdp));
        if($recupUser->rowCount() > 0){
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupUser->fetch()['id'];
        }

        $message = "ID : {$_SESSION['id']} = Inscription réussie pour l'utilisateur au pseudo '{$_SESSION['pseudo']}' - " . date("d-m-Y H:i:s") . PHP_EOL . PHP_EOL;
        writeLog($message, "../../../LogFiles/register.log");

        header('Location: ../../views/Page/home.php');

    }else{
        header('Location: ../../views/Form/registForm.php');
        exit();
    }
}