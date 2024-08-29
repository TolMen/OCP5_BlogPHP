<?php

/* 
- Inclusion des fichiers nécessaire
- Inclusion of necessary files
*/
require_once '../../control/BDDControl/connectBDD.php';

class ArtPostModel {

    /*
    - Cette fonction récupère tous les articles en effectuant une liaison à la BDD, puis exécute une requête SQL de sélection, afin de retourner les articles
    - This function retrieves all the articles by linking to the database, then executes a SQL selection query, in order to return the articles
    */
    public function getPostArt(PDO $bdd, $postArtId) {
        $recupPostArt = $bdd->prepare('SELECT * FROM articles WHERE id = :id');
        $recupPostArt->execute(['id' => $postArtId]);
        return $recupPostArt->fetchAll(PDO::FETCH_ASSOC);
    }
}
