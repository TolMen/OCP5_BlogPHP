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
        <title>HomePage</title>
        <meta
            name="description"
            content="Page d'accueil du site de blog du développeur Jessy Frachisse pour le projet 5 de OpenClassroom."
        />
        <!-- CSS -->
        <link rel="stylesheet" href="../CSS/styleHome/homeBaseStyle.css">
        <link rel="stylesheet" href="../CSS/styleHome/formStyle.css">
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
                    OpenClassrooms.</p>
            </div>
        </header>
        <!-- End of Page Header -->

        <!-- Middle of the page -->
        <section class="choice">
            <div class="boxChoise">
                <div class="projectGrid">
                    <div class="boxCard">
                        <a href="previewArtVisitor.php">
                            <div class="card">
                                <span>01</span>
                                <h2>Aperçu Art.</h2>
                            </div>
                        </a>
                        <a href="../Form/loginForm.php">
                            <div class="card">
                                <span>02</span>
                                <h2>Compte</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Middle of Page -->

        <!-- Form box -->
        <section class="formContact">
            <div class="box">
                <span class="borderLine"></span>
                <!-- Form -->
                <form
                    method="POST"
                    action="../../control/ContactControl/contactControl.php"
                >
                    <h2 class="titleForm">Contact</h2>
                    <!-- Input fields -->
                    <div class="inputBox">
                        <input
                            type="text"
                            name="firstName"
                            pattern="[A-Za-zÀ-ÿ\s\-]+"
                            maxlength="26"
                            title="Veuillez entrer uniquement des lettres"
                            autocomplete="off"
                            required
                        />
                        <span>Prénom</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input
                            type="text"
                            name="name"
                            pattern="[A-Za-zÀ-ÿ\s\-]+"
                            maxlength="30"
                            title="Veuillez entrer uniquement des lettres"
                            autocomplete="off"
                            required
                        />
                        <span>Nom</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input
                            type="email"
                            name="email"
                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                            maxlength="100"
                            title="Veuillez entrer une adresse mail valide, par exemple nom@example.com"
                            autocomplete="off"
                            required
                        />
                        <span>Adresse E-Mail</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input
                            type="text"
                            name="message"
                            maxlength="1000"
                            autocomplete="off"
                            required
                        />
                        <span>Message</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input
                            type="checkbox"
                            name="check"
                            id="check"
                            required
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
                                ><ion-icon name="logo-linkedin"></ion-icon></a>
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
