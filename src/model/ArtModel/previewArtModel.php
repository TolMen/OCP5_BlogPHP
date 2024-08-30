<?php

/* 
- Inclusion des fichiers nécessaire
- Inclusion of necessary files
*/
require_once '../../control/BDDControl/connectBDD.php'; 

class ArtPreviewModel {

    /*
    - Cette fonction récupère tous les articles par date décroissante
    - This function retrieves all articles by descending date
    */
    public function getPreviewArt(PDO $bdd) {
        $recupPreviewArt = $bdd->query('SELECT * FROM articles ORDER BY datePublication DESC');
        return $recupPreviewArt->fetchAll(PDO::FETCH_ASSOC);
    }
}
