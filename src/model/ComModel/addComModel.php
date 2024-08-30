<?php

/*
- Inclusion de fichier nécessaire
- Necessary file inclusion
*/
require_once '../../control/BDDControl/connectBDD.php';

class SubmitCommentModel {

    /*
    - Fonction qui insère les informations soumis par le formulaire
    - Function that inserts the information submitted by the form
    */
    public function insertComment(PDO $bdd, $articleId, $commentaire, $userId) {
        /*
        - 0 = Validation False
        */
        $insertComment = 'INSERT INTO commentaires (article_id, message, user_id, dateCreation, validation) VALUES (?, ?, ?, NOW(), 0)';
        $insertCommentaire = $bdd->prepare($insertComment);
        return $insertCommentaire->execute([$articleId, $commentaire, $userId]);
    }
}
