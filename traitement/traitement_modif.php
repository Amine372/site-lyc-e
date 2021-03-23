<?php
//Traitement des données entrées dans le form d'inscription
require '../class/Modele/User.php';
require '../class/Manager/Manager_User.php';
session_start();


$user = new User(['nom'=>$_POST['nom'],
'prenom'=>$_POST['prenom']]);
$modif = new Manager_User;
$modif->modification($user, $_SESSION['email']);
?>
