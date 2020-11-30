<?php
require_once 'model_reservation.php';
require_once 'manager_reservation.php';
$reservation = new reservation($_POST["nom"], $_POST["mail"], $_POST["poste"], $_POST["ville"]);
$co = new manager_reservation();
$co->reservation($reservation);
?>

