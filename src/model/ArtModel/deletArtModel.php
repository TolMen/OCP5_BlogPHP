<?php

/*
- Inclusion de fichier nécessaire
- Necessary file inclusion
*/
require_once '../../control/BDDControl/connectBDD.php'; 

class ArtDeletModel {
    
    /*
    - Cette fonction récupère les informations d'articles en effectuant une liaison à la BDD, puis prépare une requête SQL de sélection, l'exécute afin de retourner les données sous forme de tableau associatif
    - This function retrieves article information by performing a database connection, then prepares a SQL select query, executes it to return the data in the form of an associative table
    */
    public function getDeletArt($bdd, $artId) {
        $recupDeletArt = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
        $recupDeletArt->execute([$artId]);
        return $recupDeletArt->fetch();
    }

    /*
    - Cette fonction récupère les informations d'articles en effectuant une liaison à la BDD, puis prépare une requête SQL de suppression, et l'exécute
    - This function retrieves article information by performing a database connection, then prepares a SQL delete query, and executes it
    */
    public function deletArt($bdd, $artId) {
        $deletArt = $bdd->prepare('DELETE FROM articles WHERE id = ?');
        return $deletArt->execute([$artId]);
    }
}
