<?php
require '../class/Modele/model_job.php';
require '../class/Manager/manager_job.php';
$Annonces = new Annonces($_POST["id"], $_POST["nom"], $_POST["poste"], $_POST["description_poste"]);
$co = new Manager();
$co->Annonces($Annonces);
?>