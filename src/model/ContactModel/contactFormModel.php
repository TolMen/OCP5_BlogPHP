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
    - Cette fonction récupère les informations du formulaire en effectuant une liaison à la BDD, puis prépare une requête d'insertion SQL, et enfin l'exécute pour l'insérer dans la table
    - This function retrieves the form information by performing a database binding, then prepares an SQL insertion query, and finally executes it to insert it into the table
    */
    public function insertContact($bdd, $firstName, $name, $email, $message) {
        $insertContact = $bdd->prepare('INSERT INTO formcontacts(firstName, name, email, message) VALUES(?, ?, ?, ?)');
        return $insertContact->execute([$firstName, $name, $email, $message]);
    }
}
