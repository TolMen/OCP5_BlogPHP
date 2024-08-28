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
    - Cette fonction inscrit les utilisateurs en effectuant une liaison à la BDD, puis prépare une requête d'insertion SQL, et enfin l'exécute pour l'insérer dans la table
    - This function registers users by connecting to the database, then prepares an SQL insertion query, and finally executes it to insert it into the table
    */
    public function insertRegistUser($pseudo, $mdpHash) {
        global $bdd;

        $insertUser = $bdd->prepare('INSERT INTO users(pseudo, mdp, roles) VALUES (?, ?, "Inscrit")');

        return $insertUser->execute([$pseudo, $mdpHash]);
    }

    /*
    - Cette fonction récupère les informations utilisateurs en effectuant une liaison à la BDD, puis prépare une requête SQL de sélection, l'exécute afin de retourner les données sous forme de tableau associatif
    - This function retrieves user information by connecting to the database, then prepares an SQL selection query, executes it to return the data in the form of an associative table
    */
    public function getRegistUser($pseudo, $mdpHash) {
        global $bdd;
        
        $recupUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND mdp = ?');
        
        $recupUser->execute([$pseudo, $mdpHash]);

        return $recupUser->fetch();
    }
}
