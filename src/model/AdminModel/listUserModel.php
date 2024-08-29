<?php

/* 
- Inclusion des fichiers nécessaire
- Inclusion of necessary files
*/
require_once '../../control/BDDControl/connectBDD.php';

class ListUserModel {

    /*
    - Cette fonction récupère tous les utilisateurs en effectuant une liaison à la BDD, puis exécute une requête SQL de sélection, afin de retourner
    - This function retrieves all users by linking to the database, then executes a SQL selection query, in order to return
    */
    public function getListUser(PDO $bdd) {
        $recupListUser = $bdd->query('SELECT * FROM users');
        return $recupListUser->fetchAll(PDO::FETCH_ASSOC);
    }
}
