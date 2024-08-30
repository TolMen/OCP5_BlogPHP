<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="mobile-web-app-capable" content="yes" />
        <!-- Useful tag -->
        <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/logo.png" />
        <title>HomeConnect</title>
        <meta
            name="description"
            content="Page d'accueil pour les utilisateurs connecté du site de blog du développeur Jessy Frachisse pour le projet 5 de OpenClassroom."
        />
        <!-- CSS -->
        <link rel="stylesheet" href="../CSS/styleHome/homeConnectStyle.css" />
    </head>
    <body>
        <!-- Page header -->
        <header>
            <div class="boxLogo">
                <img src="../../../assets/img/logo.png" alt="Logo" />
            </div>
            <nav class="navbar">
                <ul>
                    <li><a href="previewArtUser.php">Articles</a></li>
                    <li><a href="#">Soon</a></li>
                    <li><a href="../../control/UserControl/userStop.php">Déconnexion</a></li>
                </ul>
            </nav>
        </header>
        <!-- End of Page Header -->

        <!-- Middle of the page -->
        <section class="infoPage">
            <h2 class="title">Jessy Frachisse</h2>
            <p class="text">
                Suivez mon parcours de formation et découvrez les projets
                passionnants qui me mènent à la réussite chez OpenClassrooms.
            </p>
        </section>
        <!-- End of Middle of Page -->

        <!-- Comment form -->
        <section class="formCom">
            <h2>Laissez un commentaire</h2>
            <form action="../../control/ComControl/addCom.php" method="post">
                <label for="article">Choisissez un article :</label>
                <select name="article" id="article">
                    <?php require_once '../../control/ComControl/dropListTitle.php' ?> 
                </select>
                <label for="commentaire">Votre commentaire :</label>
                <textarea name="message" id="message" rows="5"
                maxlength="1000" autocomplete="off" required></textarea>
                <button type="submit" name="submitCom">Commentez</button>
            </form>
        </section>
        <!-- End of Comment form -->

        <!-- Footer -->
        <footer>
            <div class="boxFooter">
                <nav class="boxNetwork">
                    <ul>
                        <li>
                            <a
                                target="_blank"
                                href="https://www.linkedin.com/in/jessyfrachisse/"
                                ><ion-icon name="logo-linkedin"></ion-icon
                            ></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://github.com/TolMen"
                                ><ion-icon name="logo-github"></ion-icon
                            ></a>
                        </li>
                        <li>
                            <a
                                href="../../../assets/DLs/CV_Jessy.pdf"
                                download="CV_Jessy.pdf"
                                ><ion-icon
                                    name="arrow-down-circle-outline"
                                ></ion-icon
                            ></a>
                        </li>
                        <!-- Add li + a for another network -->
                    </ul>
                </nav>
                <p>©2024 Jessy.F | Tous les droits sont réservés</p>
            </div>
        </footer>
        <!-- End of footer -->

        <!-- Script for icons -->
        <script
            type="module"
            src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
        ></script>
        <script
            nomodule
            src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
        ></script>
    </body>
</html>
