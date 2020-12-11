<?php
require_once (__DIR__.'/../class/Modele/model_reservation.php');
require_once (__DIR__.'/../class/Manager/manager_reservation.php');


if(isset($_POST['nom']) && $_POST['mail'] && $_POST['poste'] && $_POST['description_poste']){ //Vérifier si le mot de passe est correct

  $reservation = new reservation($_POST["nom"], $_POST["mail"], $_POST["poste"], $_POST["description_poste"]);
  $co = new manager_reservation();
  $co->reservation($reservation);
}
