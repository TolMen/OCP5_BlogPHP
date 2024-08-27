<?php

/* 
- Inclusion des fichiers nécessaire
- Inclusion of necessary files
*/
require_once '../../control/BDDControl/connectBDD.php';

class UpdateArticleModel {

    /*
    - Cette fonction récupére les information effectue une liaison à la BDD, puis exécute une requête SQL selection
    - This function retrieves the information, links it to the database, then executes an select SQL query
    */
    public function getArticleId($articleId) {
        global $bdd;
        $recupArt = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
        $recupArt->execute([$articleId]);
        return $recupArt->fetch(PDO::FETCH_ASSOC);
    }

    /*
    - Cette fonction récupére les information effectue une liaison à la BDD, puis exécute une requête SQL de mise à jour
    - This function retrieves the information, links it to the database, then executes an update SQL query
    */
    public function updateArticle($articleId, $title, $chapo, $content, $dateUpdate) {
        global $bdd;
        $updateArt = 'UPDATE articles SET title = ?, chapo = ?, content = ?, dateUpdate = ? WHERE id = ?';
        $updateArticle = $bdd->prepare($updateArt);
        return $updateArticle->execute([$title, $chapo, $content, $dateUpdate, $articleId]);
    }
}
