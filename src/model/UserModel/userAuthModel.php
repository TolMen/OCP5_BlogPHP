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
    - Cette fonction récupère les informations utilisateurs en effectuant une liaison à la BDD, puis prépare une requête SQL de sélection, l'exécute afin de retourner les données sous forme de tableau associatif
    - This function retrieves user information by connecting to the database, then prepares an SQL selection query, executes it to return the data in the form of an associative table
    */
    public function getAuthUser($pseudo) {
        global $bdd; 
        
        $recupUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');

        $recupUser->execute([$pseudo]);

        return $recupUser->fetch();
    }
}
