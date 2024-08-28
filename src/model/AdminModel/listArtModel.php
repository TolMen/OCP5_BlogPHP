<?php

/* 
- Inclusion des fichiers nécessaire
- Inclusion of necessary files
*/
require_once '../../control/BDDControl/connectBDD.php';

class ListArtModel {

    /*
    - Cette fonction récupère tous les articles en effectuant une liaison à la BDD, puis exécute une requête SQL de sélection, afin de retourner
    - This function retrieves all articles by linking to the database, then executes a SQL selection query, in order to return
    */
    public function getListArt() {
        global $bdd;
        $recupListArt = $bdd->query('SELECT * FROM articles');
        return $recupListArt->fetchAll(PDO::FETCH_ASSOC);
    }
}