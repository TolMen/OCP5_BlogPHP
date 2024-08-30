<?php

/* 
- Inclusion des fichiers nécessaire
- Inclusion of necessary files
*/
require_once '../../control/BDDControl/connectBDD.php';

class DropListTitleModel {
    public function selectTitleArt(PDO $bdd) {
        $selectTitleArt = 'SELECT id, title FROM articles';
        $sqlTitleArticle = $bdd->prepare($selectTitleArt);
        $sqlTitleArticle->execute();
        return $sqlTitleArticle;
    }
}
