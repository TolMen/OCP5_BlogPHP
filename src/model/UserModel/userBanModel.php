<?php

/*
- Inclusion de fichier nécessaire
- Necessary file inclusion
*/
require_once '../../control/BDDControl/connectBDD.php'; 

class UserBanModel {
    
    /*
    - Cette fonction récupère les informations utilisateurs par son ID
    - This function retrieves user information by ID
    */
    public function getBanUser(PDO $bdd, $userId) {
        $recupBanUser = $bdd->prepare('SELECT * FROM users WHERE id = ?');
        $recupBanUser->execute([$userId]);
        return $recupBanUser->fetch();
    }

    /*
    - Cette fonction supprime les informations utilisateurs
    - This function deletes user information
    */
    public function deleteBanUser(PDO $bdd, $userId) {
        $deleteBanUser = $bdd->prepare('DELETE FROM users WHERE id = ?');
        return $deleteBanUser->execute([$userId]);
    }
}
