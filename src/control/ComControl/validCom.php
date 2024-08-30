<?php

/* 
- Inclusion des fichiers nécessaire
- Inclusion of necessary files
*/
require_once '../../model/ComModel/validComModel.php';

/*
- Verifie les paramétres de l'URL, les stock, puis crée une nouvelle instance de classe
- Verifies the URL parameters, stores them, then creates a new instance of the class
*/
if (isset($_GET['id']) && isset($_GET['action'])) {
    $comId = intval($_GET['id']);
    $action = $_GET['action'];

    $comValidModel = new ComValidModel();

    /*
    - Vérification de l'action et appel de la fonction correspondante
    - Check the action and call the corresponding function
    */
    if ($action == 'valid') {
        $comValidModel->validCom($bdd, $comId);
    } elseif ($action == 'delete') {
        $comValidModel->deleteCom($bdd, $comId);
    }

    /*
    - Redirection vers le tableau de bord
    - Redirect to the dashboard
    */
    header('Location: ../../views/Page/listCom.php');
    throw new Exception("Redirection vers le tableau de bord");
}
