<?php

/*
- Inclusion de fichier nécessaire
- Necessary file inclusion
*/
require_once '../../control/BDDControl/connectBDD.php';

class ComValidModel {

    /*
    - Fonction pour récupérer toute les informations du commentaires avec le pseudo utilisateurs, et seulement les commentaires non validé
    - Function to retrieve all comment information with user nickname, and only unvalidated comments
    */
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

    /*
    - Fonction pour mettre à jour la colonne validation de la table commentaires
    - Function to update the validation column of the comments table
    */
    public function validCom(PDO $bdd, $comId) {
        $updateValidCom = $bdd->prepare('UPDATE commentaires SET validation = "1" WHERE id = ?');
        return $updateValidCom->execute([$comId]);
    }

    /*
    - Fonction pour supprimer les informations du commentaires par sont ID
    - Function to delete comment information by its ID
    */
    public function deleteCom(PDO $bdd, $comId) {
        $updateValidCom = $bdd->prepare('DELETE FROM commentaires WHERE id = ?');
        return $updateValidCom->execute([$comId]);
    }
}
