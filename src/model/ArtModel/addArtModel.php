<?php

/* 
- Inclusion des fichiers nécessaire
- Inclusion of necessary files
*/
require_once '../../control/BDDControl/connectBDD.php';

class AddArticleModel {

    /*
    - Cette fonction récupére les information effectue une liaison à la BDD, puis exécute une requête SQL d'insertion
    - This function retrieves the information, links it to the database, then executes an insert SQL query
    */
    public function insertArticle($bdd, $numero, $title, $chapo, $content, $datePublication) {
        $insertArt = 'INSERT INTO articles (numero, title, chapo, content, datePublication) VALUES (?, ?, ?, ?, ?)';
        $insertArticle = $bdd->prepare($insertArt);
        return $insertArticle->execute([$numero, $title, $chapo, $content, $datePublication]);
    }
}
