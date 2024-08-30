<?php

/* 
- Inclusion des fichiers nécessaire
- Inclusion of necessary files
*/
require_once '../../control/BDDControl/connectBDD.php';

class ComPostModel {

    /*
    - Cette fonction récupère tous les articles en effectuant une liaison à la BDD, puis exécute une requête SQL de sélection, afin de retourner les articles
    - This function retrieves all the articles by linking to the database, then executes a SQL selection query, in order to return the articles
    */
    public function getPostCom(PDO $bdd, $postComId) {
        $request = '
            SELECT commentaires.message, users.pseudo
            FROM commentaires
            JOIN users ON commentaires.user_id = users.id
            WHERE commentaires.article_id = :id
            AND commentaires.validation = 1
        '; 
        $recupPostCom = $bdd->prepare($request);
        $recupPostCom->execute(['id' => $postComId]);
        return $recupPostCom->fetchAll(PDO::FETCH_ASSOC);
    }
}
