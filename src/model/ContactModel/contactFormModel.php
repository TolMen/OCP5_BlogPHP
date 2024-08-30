<?php

/*
- Inclusion de fichier nécessaire
- Necessary file inclusion
*/
require_once '../../control/BDDControl/connectBDD.php'; 

/*
- Classe pour gérer les opérations du formulaire de contact
- Class to manage the operations of the contact form
*/
class ContactModel {

    /*
    - Cette fonction insert les informations du formulaire
    - This function inserts the form information
    */
    public function insertContact(PDO $bdd, $firstName, $name, $email, $message) {
        $insertContact = $bdd->prepare('INSERT INTO formcontacts(firstName, name, email, message) VALUES(?, ?, ?, ?)');
        return $insertContact->execute([$firstName, $name, $email, $message]);
    }
}
