<?php
require_once '../class/Modele/model_reservation.php';
require_once '../traitement/traitement_reservation.php';
class manager_reservation{ //Déclaration de la classe Manager
public function reservation($donnee){

      $bdd=new PDO('mysql:host=localhost;dbname=projet_lycee;charset=utf8', 'root', ''); //Connexion à la BDD
    $req=$bdd->prepare('INSERT into annonces (nom, mail, film, ville) VALUES(:nom, :mail, :film, :ville)'); //Préparation de la table réservations avec les valeurs de la table
    $req->execute(array('nom'=>$donnee->getnom(),'mail'=>$donnee->getmail(), 'film'=>$donnee->getfilm(), 'ville'=>$donnee->getville())); //Execution des requêtes
    $a = $req->fetch();
	//Conditions de redirection
    if ($a ==true){
     header("location: index.php");
    }
    else{
     header("location: https://www.paypal.com/fr/signin"); //Redirection vers le lien de la page de paiement
    }

          }
}

?>

