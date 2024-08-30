<?php

/*
- Inclusion de fichier nécessaire
- Necessary file inclusion
*/
require_once '../../control/BDDControl/connectBDD.php';

class CheckUserRole {

    /*
    - Cette fonction regarde le rôle de l'utilisateur
    - This function looks at the role of the user
    */
    public function getCheckRole(PDO $bdd, $userId) {
        $selectRole = 'SELECT roles FROM users WHERE id = :id';
        $checkRole = $bdd->prepare($selectRole);
        $checkRole->execute(['id' => $userId]);
        $user = $checkRole->fetch(PDO::FETCH_ASSOC);
        return $user['roles'];
    }
}
