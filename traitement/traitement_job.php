<?php
require_once '../class/Modele/model_job.php';
require_once '../class/Manager/manager_job.php';
$reservation = new reservation($_POST["nom"], $_POST["email"], $_POST["poste"], $_POST["description_poste"]);
$co = new Manager();
$co->reservation($reservation);
?>