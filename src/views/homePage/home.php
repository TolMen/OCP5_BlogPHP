<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="mobile-web-app-capable" content="yes" />
        <!-- Balise utile -->
        <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/logo.png" />
        <title>HomePage</title>
        <meta
            name="description"
            content="Page d'accueil du site de blog du développeur Jessy Frachisse pour le projet 5 de OpenClassroom."
        />
        <!-- CSS -->
        <link rel="stylesheet" href="homeStyle.css" />
    </head>
    <body>
        <!-- En-tête de page -->
        <header>
            <div class="top-page">
                <img src="../../../assets/img/logo.png" alt="Logo site" />
                <h2>Jessy Frachisse</h2>
                <p class="texte">
                    Suivez mon parcours de formation et découvrez les projets
                    passionnants qui me mènent à la réussite chez
                    OpenClassrooms.
                </p>
            </div>
        </header>

        <!-- Section Choix -->
        <section class="choix">
            <div class="boite">
                <div class="grille-projet">
                    <div class="boite-carte">
                        <a href="#">
                            <div class="carte">
                                <span>01</span>
                                <h2>Articles</h2>
                            </div>
                        </a>
                        <a href="#">
                            <div class="carte">
                                <span>02</span>
                                <h2>Contact</h2>
                            </div>
                        </a>
                        <a href="#">
                            <div class="carte">
                                <span>03</span>
                                <h2>Compte</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pied de page -->
        <footer>
            <div class="boite1">
                <nav class="boite-reseaux">
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
                            <a href="../../../assets/DLs/CV_Jessy.pdf" download="CV_Jessy.pdf"
                                ><ion-icon
                                    name="arrow-down-circle-outline"
                                ></ion-icon
                            ></a>
                        </li>
                        <!-- Rajouter li + a pour un autre réseau  -->
                    </ul>
                </nav>
                <p>©2024 Jessy.F | Tous les droits sont réservés</p>
            </div>
        </footer>

        <!-- Script pour les icônes -->
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
