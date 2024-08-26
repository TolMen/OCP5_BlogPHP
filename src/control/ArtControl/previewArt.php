<?php

/* 
- Inclusion des fichiers nécessaire
- Inclusion of necessary files
*/
require_once '../../model/ArtModel/previewArtModel.php';  

/*
- Crée une instance de classe, puis récupère tous les articles par l'appel de fonction
- Create an instance of the class, then retrieve all articles by calling the function
*/
$artPreviewModel = new ArtPreviewModel();
$articles = $artPreviewModel->getPreviewArt();

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
    <div class="card">

        <span><?= sprintf("%02d", $article['numero']); ?></span>

        <h2 class="titleArt"><?= htmlspecialchars($article['title']); ?></h2>

        <p class="dateArt"><?= date("d/m/Y", strtotime($dateToShow)); ?></p>
        <div class="information">

            <p class="chapoArt">
                <?= htmlspecialchars($article['chapo']); ?>
            </p>

            <a href="../../views/Page/templateArt.php?id=<?= urlencode($article['id']); ?>" class="moreArt">En savoir plus...</a>
        </div>
    </div>
<?php
}
?>
