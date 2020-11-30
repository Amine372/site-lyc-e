<?php
require_once '../site-lyc-e/class/Modele/model_reservation.php';
require_once '../site-lyc-e/traitement/traitement_reservation.php';
class manager_reservation{ //Déclaration de la classe Manager
public function reservation($donnee){

      $bdd=new PDO('mysql:host=localhost;dbname=projet_lycee;charset=utf8', 'root', ''); //Connexion à la BDD
    $req=$bdd->prepare('INSERT into annonces (nom, mail, poste, ville) VALUES(:nom, :mail, :poste, :ville)'); //Préparation de la table réservations avec les valeurs de la table
    $req->execute(array('nom'=>$donnee->getnom(),'mail'=>$donnee->getmail(), 'poste'=>$donnee->getposte(), 'ville'=>$donnee->getville())); //Execution des requêtes
    $a = $req->fetch();
	//Conditions de redirection
    if ($a ==true){
     header("location: index.php");
    }
    else{
     header("location: emploi.php"); //Redirection 
    }

          }
}

?>
