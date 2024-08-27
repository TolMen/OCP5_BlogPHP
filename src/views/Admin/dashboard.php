<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="mobile-web-app-capable" content="yes" />
        <!-- Useful tag -->
        <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/logo.png" />
        <title>Dashboard</title>
        <!-- CSS -->
        <link rel="stylesheet" href="../CSS/styleAdmin/dashboardStyle.css">
    </head>
    <body>
        <!-- Page header -->
        <header>
            <div class="boxLogo">
                <img src="../../../assets/img/logo.png" alt="Logo" />
            </div>
            <nav class="navbar">
                <ul>
                    <li><a href="../../control/UserControl/userStop.php">Déconnexion</a></li>
                </ul>
            </nav>
        </header>
        <!-- End of Page Header -->

        <!-- Section to publish an article -->
        <section class="addArt">
            <h2>
                Publier un article
            </h2>
            <div class="formAddArt">
                <form method="POST" action="../../control/ArtControl/addArt.php">
                    <div class="inputBox">
                        <span>Numéro</span>
                        <input type="number" name="numero" autocomplete="off" required>
                    </div>
                    <div class="inputBox">
                        <span>Titre</span>
                        <input type="text" name="title" autocomplete="off" required>
                    </div>
                    <div class="inputBox">
                        <span>Chapô</span>
                        <input type="text" name="chapo" autocomplete="off" required>
                    </div>
                    <div class="inputBox">
                        <span>Contenu</span>
                        <textarea name="content" autocomplete="off" required></textarea>
                    </div>
                    <div class="inputBox">
                        <span>Date de publication</span>
                        <input type="date" name="datePublication" autocomplete="off" required>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="publishArticle" value="Publier l'article">
                    </div>
                </form>
            </div>
        </section>
        <!-- End of Section to publish an article -->

        <!-- List Articles -->
        <section class="listArt">
            <h2>
                Liste des Articles
            </h2>
            <div>
                <!-- Include the controller and avoid logic in the view -->
                <?php include '../../control/AdminControl/listArt.php'; ?>
            </div>
        </section>
        <!-- End of List Articles -->
        
        <!-- List Users -->
        <section class="listUsers">
            <h2>
                Liste des Membres
            </h2>
            <div>
                <!-- Include the controller and avoid logic in the view -->
                <?php include '../../control/AdminControl/listUser.php'; ?>
            </div>
        </section>
        <!-- End of List Users -->
    </body>
    </html>