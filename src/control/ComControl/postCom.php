<?php

/* 
- Inclusion des fichiers nécessaire
- Inclusion of necessary files
*/
require_once '../../model/ComModel/postComModel.php';  

/*
- Vérifie si l'id est passé dans l'URL
- Check if id is passed in URL
*/
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $postComId = intval($_GET['id']);
} else {
    throw new Exception("Identifiant du commentaire non spécifié.");
}

/*
- Crée une instance de classe, puis récupère tous les commentaires par l'appel de fonction
- Create an instance of the class, then retrieve all comments by calling the function
*/
$comPostModel = new ComPostModel();
$commentaires = $comPostModel->getPostCom($bdd, $postComId);

/*
- Boucle pour chaque commentaires récupéré afin de les afficher dans une structure HTML
- Loop through each comments retrieved to display them in an HTML structure
*/
foreach ($commentaires as $commentaire) {
?>
    <p class="messageCom"><?= htmlspecialchars($commentaire['pseudo']); ?> -> <?= htmlspecialchars($commentaire['message']); ?></p>
<?php
}
?>
