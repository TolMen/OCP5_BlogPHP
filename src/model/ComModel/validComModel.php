<?php

require_once '../../control/BDDControl/connectBDD.php';

class ComValidModel {
    public function getValidCom(PDO $bdd) {
        $request = '
            SELECT commentaires.id, commentaires.message, users.pseudo
            FROM commentaires
            JOIN users ON commentaires.user_id = users.id
            WHERE commentaires.validation = 0
        '; 
        $recupValidCom = $bdd->prepare($request);
        $recupValidCom->execute();
        return $recupValidCom->fetchAll(PDO::FETCH_ASSOC);
    }

    public function validCom(PDO $bdd, $comId) {
        $updateValidCom = $bdd->prepare('UPDATE commentaires SET validation = "1" WHERE id = ?');
        return $updateValidCom->execute([$comId]);
    }

    /*
    - Fonction pour rétrograder un utilisateur au rôle "Inscrit"
    - Function to demote a user to the "Registered" role
    */
    public function deleteCom(PDO $bdd, $comId) {
        $updateValidCom = $bdd->prepare('DELETE FROM commentaires WHERE id = ?');
        return $updateValidCom->execute([$comId]);
    }
}
