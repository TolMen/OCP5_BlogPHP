<?php

require_once '../../model/ComModel/dropListTitleModel.php';

$dropListTitle = new DropListTitleModel();
$dropList = $dropListTitle->selectTitleArt($bdd);

if ($dropList->rowCount() > 0) {
    while ($row = $dropList->fetch(PDO::FETCH_ASSOC)) {
        echo "<option value='" . $row['id'] . "'>" . $row['title'] . "</option>";
    }
} else {
    echo "<option value=''>Aucun article disponible</option>";
}
