<?php

/*
- Inclusion de fichier nécessaire
- Necessary file inclusion
*/
require_once '../../control/BDDControl/connectBDD.php';

/*
- Classe pour gérer les rôles utilisateurs
- Class to manage user roles
*/
class UserRoleModel {

    /*
    - Fonction pour promouvoir un utilisateur au rôle de "Modérateur"
    - Function to promote a user to the "Moderator" role
    */
    public function promoteUser($bdd, $userId) {
        $updateRole = $bdd->prepare('UPDATE users SET roles = "Modérateur" WHERE id = ?');
        return $updateRole->execute([$userId]);
    }

    /*
    - Fonction pour rétrograder un utilisateur au rôle "Inscrit"
    - Function to demote a user to the "Registered" role
    */
    public function demoteUser($bdd, $userId) {
        $updateRole = $bdd->prepare('UPDATE users SET roles = "Inscrit" WHERE id = ?');
        return $updateRole->execute([$userId]);
    }
}
