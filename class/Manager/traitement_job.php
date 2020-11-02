<?php
require_once 'model_job.php';
require_once 'manager_job.php';
$jobannonce = new jobannonce($_POST["nom"], $_POST["email"], $_POST["poste"], $_POST["description_poste"]);
$co = new jobannonce();
$co->jobannonce($jobannonce);
?>