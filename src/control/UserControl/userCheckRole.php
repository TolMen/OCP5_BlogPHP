<?php
session_start();
require_once '../../model/UserModel/userCheckRoleModel.php';

$userId = $_SESSION['id'];
$userCheckRole = new CheckUserRole();
$userRole = $userCheckRole->getCheckRole($bdd, $userId);

// Redirection en fonction du rôle
if ($userRole === 'Modérateur') {
    header('Location: ../../views/Page/listCom.php'); // Redirection pour les modérateurs
} else {
    header('Location: ../../views/Page/homeConnect.php'); // Redirection pour les autres
}
exit();
