<?php

/*
- Inclusion de fichier nécessaire
- Necessary file inclusion
*/
require_once '../../control/BDDControl/connectBDD.php'; 

class ArtDeletModel {
    
    /*
    - Cette fonction récupère les informations d'articles
    - This function retrieves item information
    */
    public function getDeletArt(PDO $bdd, $artId) {
        $recupDeletArt = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
        $recupDeletArt->execute([$artId]);
        return $recupDeletArt->fetch();
    }

    /*
    - Cette fonction supprime les informations d'articles
    - This function deletes item information
    */
    public function deletArt(PDO $bdd, $artId) {
        $deletArt = $bdd->prepare('DELETE FROM articles WHERE id = ?');
        return $deletArt->execute([$artId]);
    }
}
