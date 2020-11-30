<?php
require_once '../site-lyc-e/class/Modele/model_reservation.php';
require_once '../site-lyc-e/class/Manager/manager_reservation.php';
$reservation = new reservation($_POST["nom"], $_POST["mail"], $_POST["poste"], $_POST["ville"]);
$co = new manager_reservation();
$co->reservation($reservation);
?>

