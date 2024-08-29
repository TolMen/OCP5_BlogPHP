<?php

/* 
- Inclusion des fichiers nécessaire
- Inclusion of necessary files
*/
require_once '../../model/AdminModel/listArtModel.php';

/*
- Crée une instance de classe, puis récupère la liste des articles
- Create an instance of the class, then retrieve the list of articles
*/
$listArtModel = new ListArtModel();
$recupListArt = $listArtModel->getListArt();

/*
- Boucle pour chaque articles récupéré afin de les afficher dans une structure HTML
- Loop to display each article in an HTML structure
*/
foreach ($recupListArt as $arts) {
?>
    <p><?= $arts['title']; ?> -> <a href="../../control/ArtControl/deletArt.php?id=<?= $arts['id']; ?>">Supprimer</a> / <a href="../../control/ArtControl/updateArt.php?id=<?= $arts['id']; ?>">Modifier</a></p>
<?php
}
