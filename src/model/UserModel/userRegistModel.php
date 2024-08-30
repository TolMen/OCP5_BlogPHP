<?php

/*
- Inclusion de fichier nécessaire
- Necessary file inclusion
*/
require_once '../../control/BDDControl/connectBDD.php'; 

/*
- Classe pour gérer les opérations d'inscription
- Class to manage the registration operations
*/
class UserRegistModel {

    /*
    - Cette fonction insère les informations utilisateurs
    - This function inserts user information
    */
    public function insertRegistUser(PDO $bdd, $pseudo, $mdpHash) {
        $insertUser = $bdd->prepare('INSERT INTO users(pseudo, mdp, roles) VALUES (?, ?, "Inscrit")');
        return $insertUser->execute([$pseudo, $mdpHash]);
    }

    /*
    - Cette fonction récupère les informations utilisateurs
    - This function retrieves user information
    */
    public function getRegistUser(PDO $bdd, $pseudo, $mdpHash) {
        $recupUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND mdp = ?');
        $recupUser->execute([$pseudo, $mdpHash]);
        return $recupUser->fetch();
    }
}
