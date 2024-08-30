<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="mobile-web-app-capable" content="yes" />
    <!-- Useful tag -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/logo.png" />
    <title>Liste des commentaires en attente</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../CSS/styleCom/listComStyle.css">
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

    <!-- List Comments -->
    <section class="secCom">
        <h2 class="titleCom">Commentaires en attente de modération</h2>
        <div>
            <?php include '../../control/AdminControl/listWaitingCom.php'; ?>
        </div>
    </section>
    <!-- End of List Comments -->
</body>
</html>