<?php

/* 
- Inclusion des fichiers nécessaire
- Inclusion of necessary files
*/
require_once '../../control/ComControl/validCom.php';  

/*
- Nouvelle instance de la classe de sécurité, puis appel de fonction
- New instance of the security class, then function call
*/
$comValidModel = new ComValidModel();
$validCom = $comValidModel->getValidCom($bdd);

/*
- Boucle pour chaque commentaire récupéré afin de les afficher dans une structure HTML
- Loop for each retrieved comment to display them in an HTML structure
*/
foreach ($validCom as $checkCom) {
?>
    <p class="messageCom"><?= htmlspecialchars($checkCom['pseudo']); ?> -> <?= htmlspecialchars($checkCom['message']); ?> / 
    <a href="../../control/ComControl/validCom.php?id=<?= $checkCom['id']; ?>&action=valid">Valider</a> / 
    <a href="../../control/ComControl/validCom.php?id=<?= $checkCom['id']; ?>&action=delete">Supprimer</a></p>
<?php
}
?>
