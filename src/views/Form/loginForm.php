<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Useful tag -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/logo.png" />
    <title>Connexion</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../CSS/styleAccount/styleIdemAccountForm.css">
    <link rel="stylesheet" href="../CSS/styleAccount/styleLoginForm.css">
</head>
<body>
    <!-- Form box -->
    <div class="box">
        <span class="borderLine"></span>
        <!-- Form -->
        <form method="POST" action="../../control/UserControl/userAuth.php">
            <h2>Connexion</h2>
            <!-- Input fields -->
            <div class="inputBox">
                <input type="text" name="pseudo" pattern="[A-Za-zÀ-ÿ0-9_\-.]+" maxlength="26" title="Le pseudo peut contenir des lettres, des chiffres et les symboles .-_" autocomplete="off" required>
                <span>Pseudo</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="mdp" pattern="[A-Za-zÀ-ÿ0-9.]+" maxlength="15" title="Le mot de passe doit contenir des lettres, des chiffres et uniquement le symboles POINT" autocomplete="off" required>
                <span>Mot de passe</span>
                <i></i>
            </div>
            <!-- End of Input fields -->
            <div class="links">
                <!-- <a href="#">Forgotten password</a> -->
                <a href="../Page/home.php">Accueil</a>
                <a href="registForm.php">Inscription</a>
            </div>
            <input type="submit" name="connexion" value="Se connecter">
        </form>
        <!-- End of Form -->
    </div>
    <!-- End of Form box -->
</body>
</html>
