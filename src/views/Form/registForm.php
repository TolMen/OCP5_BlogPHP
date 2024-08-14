<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Balise utile -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/logo.png" />
    <title>Inscription</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../CSS/styleAccount/styleIdemAccountForm.css">
    <link rel="stylesheet" href="../CSS/styleAccount/styleRegistForm.css">
</head>
<body>
    <div class="box">
        <span class="borderLine"></span>
        <form method="POST" action="../../control/UserControl/userRegist.php">
            <h2>Inscription</h2>
            <div class="inputBox">
                <input type="text" name="pseudo" autocomplete="off" required="required">
                <span>Pseudo</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="mdp" autocomplete="off" required="required">
                <span>Mot de passe</span>
                <i></i>
            </div>
            <div class="links">
                <a href="../Page/home.php">Accueil</a>
                <a href="loginForm.php">Connexion</a>
            </div>
            <input type="submit" name="envoi" value="S'inscrire">
        </form>
    </div>
</body>
</html>