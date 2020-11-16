<?php

require_once '../class/Modele/model_job.php';

require_once '../class/Manager/manager_job.php';

$annonces = new annonces($_POST["poste"]);

$co = new Annonces();

$co->annonces($annonces);

?>