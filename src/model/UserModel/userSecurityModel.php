<?php

class SecurityAccount {

    public function checkSecurityAccount($pseudo, $mdp) {
        
        $errorsSecurAccount = [];

        if (strlen($pseudo) > 26) {
            $errorsSecurAccount[] = 'Le pseudo ne doit pas dépasser 26 caractères.';
        }
        if (strlen($mdp) > 15) {
            $errorsSecurAccount[] = 'Le mot de passe ne doit pas dépasser 15 caractères.';
        }

        if(!preg_match('/^[A-Za-zÀ-ÿ0-9_\-.]+$/', $pseudo)) {
            $errorsSecurAccount[] = 'Le pseudo peut contenir des lettres, des chiffres et les symboles .-_';
        }
        if(!preg_match('/^[A-Za-zÀ-ÿ0-9.]+$/', $mdp)) {
            $errorsSecurAccount[] = 'Le mot de passe doit contenir des lettres, des chiffres et uniquement le symboles POINT.';
        }

        return $errorsSecurAccount;
    }
}
