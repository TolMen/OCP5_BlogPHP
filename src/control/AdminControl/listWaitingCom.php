<?php

/* 
- Inclusion des fichiers nécessaires
*/
require_once '../../control/ComControl/validCom.php';  

/*
- Crée une instance de classe, puis récupère tous les commentaires non validés
*/
$comValidModel = new ComValidModel();
$validCom = $comValidModel->getValidCom($bdd);

/*
- Boucle pour chaque commentaire récupéré afin de les afficher dans une structure HTML
*/
foreach ($validCom as $checkCom) {
?>
    <p class="messageCom"><?= htmlspecialchars($checkCom['pseudo']); ?> -> <?= htmlspecialchars($checkCom['message']); ?> / 
    <a href="../../control/ComControl/validCom.php?id=<?= $checkCom['id']; ?>&action=valid">Valider</a> / 
    <a href="../../control/ComControl/validCom.php?id=<?= $checkCom['id']; ?>&action=delete">Supprimer</a></p>
<?php
}
?>
