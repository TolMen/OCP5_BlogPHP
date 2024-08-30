<?php

/* 
- Inclusion des fichiers nécessaire
- Inclusion of necessary files
*/
require_once '../../control/BDDControl/connectBDD.php';

class ComPostModel {

    /*
    - Fonction pour récupérer toute les informations du commentaires avec le pseudo utilisateurs, et seulement les commentaires validé
    - Function to retrieve all comment information with user nickname, and only validated comments
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
