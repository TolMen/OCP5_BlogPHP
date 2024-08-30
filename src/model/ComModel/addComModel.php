<?php

/*
- Inclusion de fichier nécessaire
- Necessary file inclusion
*/
require_once '../../control/BDDControl/connectBDD.php';

class SubmitCommentModel {

    public function insertComment(PDO $bdd, $articleId, $commentaire, $userId) {
        /*
        - 0 = Validation False
        */
        $insertComment = 'INSERT INTO commentaires (article_id, message, user_id, dateCreation, validation) VALUES (?, ?, ?, NOW(), 0)';
        $insertCommentaire = $bdd->prepare($insertComment);
        return $insertCommentaire->execute([$articleId, $commentaire, $userId]);
    }
}
