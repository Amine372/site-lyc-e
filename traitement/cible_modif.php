<?php
//Traitement des données entrées dans le form de modification
require '../class/Modele/User.php';
require '../class/Manager/Manager_User.php';
session_start();
$modif = new User(['nom'=>$_POST['nom'],
'prenom'=>$_POST['prenom']]);

//Modification dans la bdd
$update = new Manager_User;
$update->modification($modif, $_SESSION['email']);

?>
