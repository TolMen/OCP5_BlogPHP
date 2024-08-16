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
        <link rel="stylesheet" href="../CSS/styleHome/formStyle.css">
    </head>
    <body>
        <!-- Page header -->
        <header>
            <div class="boxLogo">
                <img src="../../../assets/img/logo.png" alt="Logo" />
            </div>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Articles</a></li>
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

        <!-- Form box -->
        <section class="formContact">
            <div class="box">
                <span class="borderLine"></span>
                <!-- Form -->
                <form
                    method="POST"
                    action=""
                >
                    <h2 class="titleForm">Contact</h2>
                    <!-- Input fields -->
                    <div class="inputBox">
                        <input
                            type="text"
                            name="firstName"
                            autocomplete="off"
                            required="required"
                        />
                        <span>Prénom</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input
                            type="text"
                            name="name"
                            autocomplete="off"
                            required="required"
                        />
                        <span>Nom</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input
                            type="mail"
                            name="email"
                            autocomplete="off"
                            required="required"
                        />
                        <span>Adresse E-Mail</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input
                            type="text"
                            name="message"
                            autocomplete="off"
                            required="required"
                        />
                        <span>Message</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input
                            type="checkbox"
                            name="check"
                            required="required"
                        />
                        <label for="check"
                            >J'autorise la collecte de mes informations.</label
                        >
                    </div>
                    <!-- End of Input fields -->
                    <input type="submit" name="envoi" value="Envoyer" />
                </form>
                <!-- End of Form -->
            </div>
            <!-- End of Form box -->
        </section>

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
