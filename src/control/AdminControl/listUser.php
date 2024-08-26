<?php

/* 
- Inclusion des fichiers nécessaire
- Inclusion of necessary files
*/
require_once '../../model/AdminModel/listUserModel.php';

/*
- Crée une instance de classe, puis récupère la liste des utilisateurs
- Create an instance of the class, then retrieve the list of users
*/
$listUserModel = new ListUserModel();
$recupListUser = $listUserModel->getListUser();

/*
- Boucle pour chaque utilisateurs récupéré afin de les afficher dans une structure HTML
- Loop to display each user in an HTML structure
*/
foreach ($recupListUser as $user) {
?>
    <p><?= $user['pseudo']; ?> -> <a href="../../control/UserControl/userBan.php?id=<?= $user['id']; ?>">Bannir</a></p>
<?php
}
