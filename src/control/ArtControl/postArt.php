<?php

/* 
- Inclusion des fichiers nécessaire
- Inclusion of necessary files
*/
require_once '../../model/ArtModel/postArtModel.php';  

/*
- Vérifie si l'id est passé dans l'URL
- Check if id is passed in URL
*/
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $postArtId = intval($_GET['id']);
} else {
    throw new Exception("Identifiant de l'article non spécifié.");
}

/*
- Crée une instance de classe, puis récupère tous les articles par l'appel de fonction
- Create an instance of the class, then retrieve all articles by calling the function
*/
$artPostModel = new ArtPostModel();
$articles = $artPostModel->getPostArt($bdd, $postArtId);

/*
- Boucle pour chaque article récupéré afin de les afficher dans une structure HTML
- Loop through each article retrieved to display them in an HTML structure
*/
foreach ($articles as $article) {
/*
- Vérifier si dateUpdate est null, pour choisir la date à affiché
- Check if dateUpdate is null, to choose the date to be displayed
*/
$dateToShow = !empty($article['dateUpdate']) ? $article['dateUpdate'] : $article['datePublication'];
?>
    <h2 class="title"><?= htmlspecialchars($article['title']); ?></h2>
    <p class="chapo"><?= htmlspecialchars($article['chapo']); ?></p>
    <i class="separator"></i>
    <div class="littleInfo">
        <p class="author">Ecrit par TolMen Jy</p>
        <p class="date"><?= date("d/m/Y", strtotime($dateToShow)); ?></p>
    </div>
    <i class="separator"></i>
    <p class="text"><?= htmlspecialchars($article['content']); ?></p>
<?php
}
?>
