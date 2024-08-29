<?php

/*
- Inclusion de fichier nécessaire
- Necessary file inclusion
*/
require_once '../../control/BDDControl/connectBDD.php'; 

class UserBanModel {
    
    /*
    - Cette fonction récupère les informations utilisateurs en effectuant une liaison à la BDD, puis prépare une requête SQL de sélection, l'exécute afin de retourner les données sous forme de tableau associatif
    - This function retrieves user information by connecting to the database, then prepares an SQL selection query, executes it to return the data in the form of an associative table
    */
    public function getBanUser($bdd, $userId) {
        $recupBanUser = $bdd->prepare('SELECT * FROM users WHERE id = ?');
        $recupBanUser->execute([$userId]);
        return $recupBanUser->fetch();
    }

    /*
    - Cette fonction récupère les informations utilisateurs en effectuant une liaison à la BDD, puis prépare une requête SQL de suppression, et l'exécute
    - This function retrieves user information by linking to the database, then prepares a delete SQL query, and executes it
    */
    public function deleteBanUser($bdd, $userId) {
        $deleteBanUser = $bdd->prepare('DELETE FROM users WHERE id = ?');
        return $deleteBanUser->execute([$userId]);
    }
}
