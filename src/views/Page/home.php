<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="mobile-web-app-capable" content="yes" />
        <!-- Useful tag -->
        <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/logo.png" />
        <title>HomePage</title>
        <meta
            name="description"
            content="Page d'accueil du site de blog du développeur Jessy Frachisse pour le projet 5 de OpenClassroom."
        />
        <!-- CSS -->
        <link rel="stylesheet" href="../CSS/styleHome/homeStyle.css" />
    </head>
    <body>
        <!-- Page header -->
        <header>
            <div class="topPage">
                <img src="../../../assets/img/logo.png" alt="Logo site" />
                <h2>Jessy Frachisse</h2>
                <p class="text">
                    Suivez mon parcours de formation et découvrez les projets
                    passionnants qui me mènent à la réussite chez
                    OpenClassrooms.
                </p>
            </div>
        </header>
        <!-- End of Page Header -->

        <!-- Middle of the page -->
        <section class="choice">
            <div class="box">
                <div class="projectGrid">
                    <div class="boxCard">
                        <a href="#">
                            <div class="card">
                                <span>01</span>
                                <h2>Articles</h2>
                            </div>
                        </a>
                        <a href="#">
                            <div class="card">
                                <span>02</span>
                                <h2>Contact</h2>
                            </div>
                        </a>
                        <a href="../Form/loginForm.php">
                            <div class="card">
                                <span>03</span>
                                <h2>Compte</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Middle of Page -->

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
                            <a href="../../../assets/DLs/CV_Jessy.pdf" download="CV_Jessy.pdf"
                                ><ion-icon
                                    name="arrow-down-circle-outline"
                                ></ion-icon
                            ></a>
                        </li>
                        <!-- Add li + a for another network  -->
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
