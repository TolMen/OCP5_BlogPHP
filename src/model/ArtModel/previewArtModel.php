<?php

/* 
- Inclusion des fichiers nécessaire
- Inclusion of necessary files
*/
require_once '../../control/BDDControl/connectBDD.php'; 

class ArtPreviewModel {

    /*
    - Cette fonction récupère tous les articles en effectuant une liaison à la BDD, puis exécute une requête SQL de sélection, et trie par date décroissante, afin de retourner les articles sous forme de tableau associatif
    - This function retrieves all the articles by linking to the database, then executes a SQL selection query, and sorts by descending date, in order to return the articles in the form of an associative table
    */
    public function getPreviewArt() {
        global $bdd;  
        $recupPreviewArt = $bdd->query('SELECT * FROM articles ORDER BY datePublication DESC');
        return $recupPreviewArt->fetchAll(PDO::FETCH_ASSOC);
    }
}
