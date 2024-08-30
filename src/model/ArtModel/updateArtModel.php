<?php

/* 
- Inclusion des fichiers nécessaire
- Inclusion of necessary files
*/
require_once '../../control/BDDControl/connectBDD.php';

class UpdateArticleModel {

    /*
    - Cette fonction récupére les informations des articles
    - This function retrieves information from articles
    */
    public function getArticleId(PDO $bdd, $articleId) {
        $recupArt = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
        $recupArt->execute([$articleId]);
        return $recupArt->fetch(PDO::FETCH_ASSOC);
    }

    /*
    - Fonction pour mettre à jour les informations de l'article
    - Function to update item information
    */
    public function updateArticle(PDO $bdd, $articleId, $title, $chapo, $content, $dateUpdate) {
        $updateArt = 'UPDATE articles SET title = ?, chapo = ?, content = ?, dateUpdate = ? WHERE id = ?';
        $updateArticle = $bdd->prepare($updateArt);
        return $updateArticle->execute([$title, $chapo, $content, $dateUpdate, $articleId]);
    }
}
