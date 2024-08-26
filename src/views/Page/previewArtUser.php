<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="mobile-web-app-capable" content="yes" />
        <!-- Useful tag -->
        <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/logo.png" />
        <title>Liste des articles</title>
        <meta
            name="description"
            content="Vous trouverez sur cette page, la liste des articles du site de blog de Jessy"
        />
        <!-- CSS -->
        <link rel="stylesheet" href="../CSS/styleArticles/previewArtBaseStyle.css" />
        <link rel="stylesheet" href="../CSS/styleArticles/previewArtUserStyle.css" />
    </head>
    <body>
        <!-- Page header -->
        <header>
            <div class="boxLogo">
                <img src="../../../assets/img/logo.png" alt="Logo" />
            </div>
            <nav class="navbar">
                <ul>
                    <li><a href="homeConnect.php">Accueil</a></li>
                    <li><a href="../../control/UserControl/userStop.php">Déconnexion</a></li>
                </ul>
            </nav>
        </header>
        <!-- End of Page Header -->

        <!-- Middle of the page -->
        <section class="infoPage">
            <h2 class="title">Liste des articles</h2>
            <p class="text">
                Tu souhaite lire les articles ? <br />
                Clique sur les articles pour en savoir plus.
            </p>
        </section>
        <!-- End of Middle of Page -->

        <!-- Article preview section -->
        <section class="secArticle">
            <div class="boxCard">
                <!-- Include the controller and avoid logic in the view -->
                <?php include '../../control/ArtControl/postArt.php'; ?>
            </div>
        </section>
        <!-- End of section for article preview -->

        <!-- Footer -->
        <footer>
            <div class="boxFooter">
                <p>©2024 Jessy | Tous les droits sont réservés</p>
            </div>
        </footer>
        <!-- End of footer -->
    </body>
</html>
