<?php

require_once '../../control/BDDControl/connectBDD.php'; // Inclure le fichier de connexion à la BDD

class CheckUserRole {
    public function getCheckRole($bdd, $userId) {
        $selectRole = 'SELECT roles FROM users WHERE id = :id';
        $checkRole = $bdd->prepare($selectRole);
        $checkRole->execute(['id' => $userId]);
        $user = $checkRole->fetch(PDO::FETCH_ASSOC);
        return $user['roles'];
    }
}
