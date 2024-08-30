<?php

/*
- Inclusion de fichier nécessaire
- Necessary file inclusion
*/
require_once '../../control/BDDControl/connectBDD.php'; 

/*
- Classe pour gérer les opérations de connexion
- Class to manage connection operations
*/
class UserAuthModel {

    /*
    - Cette fonction récupère le pseudo des utilisateurs
    - This function retrieves the users' nickname
    */
    public function getAuthUser(PDO $bdd, $pseudo) {
        $recupUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
        $recupUser->execute([$pseudo]);
        return $recupUser->fetch();
    }
}
