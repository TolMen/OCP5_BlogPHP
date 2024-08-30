<?php

/* 
- Inclusion des fichiers nécessaire
- Inclusion of necessary files
*/
require_once '../../control/BDDControl/connectBDD.php';

class AddArticleModel {

    /*
    - Cette fonction insére les informations des articles
    - This function inserts the article information
    */
    public function insertArticle(PDO $bdd, $numero, $title, $chapo, $content, $datePublication) {
        $insertArt = 'INSERT INTO articles (numero, title, chapo, content, datePublication) VALUES (?, ?, ?, ?, ?)';
        $insertArticle = $bdd->prepare($insertArt);
        return $insertArticle->execute([$numero, $title, $chapo, $content, $datePublication]);
    }
}
