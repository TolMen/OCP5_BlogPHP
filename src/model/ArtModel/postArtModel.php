<?php

/* 
- Inclusion des fichiers nécessaire
- Inclusion of necessary files
*/
require_once '../../control/BDDControl/connectBDD.php';

class ArtPostModel {

    /*
    - Cette fonction récupère tous les articles par leurs ID
    - This function retrieves all articles by their IDs
    */
    public function getPostArt(PDO $bdd, $postArtId) {
        $recupPostArt = $bdd->prepare('SELECT * FROM articles WHERE id = :id');
        $recupPostArt->execute(['id' => $postArtId]);
        return $recupPostArt->fetchAll(PDO::FETCH_ASSOC);
    }
}
