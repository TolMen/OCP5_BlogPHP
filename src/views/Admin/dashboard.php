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
                    <li><a href="previewArtUser.php">Articles</a></li>
                    <li><a href="#">Soon</a></li>
                    <li><a href="../../control/UserControl/userStop.php">Déconnexion</a></li>
                </ul>
            </nav>
        </header>
        <!-- End of Page Header -->

        <!-- Middle of the page -->
        <section class="listMembres">
            <h2>
                Liste des Membres
            </h2>
            <div>
                <!-- Include the controller and avoid logic in the view -->
                <?php include '../../control/AdminControl/listUser.php'; ?>
            </div>
        </section>
        <!-- End of Middle of Page -->



    </body>
</html>