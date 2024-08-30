<?php

/* 
- Inclusion des fichiers nécessaire
- Inclusion of necessary files
*/
require_once '../../model/ComModel/dropListTitleModel.php';

/*
- Nouvelle instance de classe, puis appelle la fonction
- New class instance, then calls function
*/
$dropListTitle = new DropListTitleModel();
$dropList = $dropListTitle->selectTitleArt($bdd);

/*
- Boucle pour chaque titre d'articles à afficher dans le Select
- Loop for each article title to display in the Select
*/
if ($dropList->rowCount() > 0) {
    while ($row = $dropList->fetch(PDO::FETCH_ASSOC)) {
        echo "<option value='" . $row['id'] . "'>" . $row['title'] . "</option>";
    }
} else {
    echo "<option value=''>Aucun article disponible</option>";
}
