<?php
require_once '../class/Modele/model_reservation.php';
require_once '../class/Manager/manager_reservation.php';
$reservation = new reservation($_POST["nom"], $_POST["mail"], $_POST["poste"], $_POST["description_poste"]);

 if(empty($_POST['nom']) && $_POST['mail'] && $_POST['poste'] && $_POST['description_poste']){ //Vérifier si le mot de passe est correct

 	  $nom = $_POST['nom'];
 	  $mail = $_POST['mail'];
 	  $poste = $_POST['poste'];
 	  $description_poste = $_POST['description_poste'];

}

else {

	echo "Mince erreur";
}
$co = new manager_reservation();
$co->reservation($reservation);
