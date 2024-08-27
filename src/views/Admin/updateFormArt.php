<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l'Article</title>
</head>
<body>
    <!-- Section to edit an article -->
    <section class="editArt">
        <h2>Modifier l'article</h2>
        <div class="formeditArt">
            <form method="POST" action="../../control/ArtControl/updateArt.php?id=<?php echo $article['id']; ?>">
                <div class="inputBox">
                    <span>Titre</span>
                    <input type="text" name="title" value="<?php echo $article['title']; ?>" autocomplete="off" required>
                </div>
                <div class="inputBox">
                    <span>Chapô</span>
                    <input type="text" name="chapo" value="<?php echo $article['chapo']; ?>" autocomplete="off" required>
                </div>
                <div class="inputBox">
                    <span>Contenu</span>
                    <textarea name="content" autocomplete="off" required><?php echo $article['content']; ?></textarea>
                </div>
                <div class="inputBox">
                    <span>Date de Mise à jour</span>
                    <input type="date" name="dateUpdate" autocomplete="off" required>
                </div>
                <div class="inputBox">
                    <input type="submit" name="updateArticle" value="Valider les modifications">
                </div>
            </form>
        </div>
    </section>
    <!-- End of Section to edit an article -->
</body>
</html>
