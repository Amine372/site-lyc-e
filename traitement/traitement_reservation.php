<?php
require_once '../Modele/model_reservation.php';
require_once '../Manager/manager_reservation.php';
$reservation = new reservation($_POST["nom"], $_POST["mail"], $_POST["film"], $_POST["ville"]);
$co = new manager_reservation();
$co->reservation($reservation);
?>
