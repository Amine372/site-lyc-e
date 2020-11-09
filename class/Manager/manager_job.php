<?php
require_once 'model_job.php';
require_once 'traitement_job.php';
class Manager{ //Déclaration de la classe Manager
public function job($donnee){

      $bdd=new PDO('mysql:host=localhost;dbname=projet_lycee;charset=utf8', 'root', ''); //Connexion à la BDD
    $req=$bdd->prepare('INSERT into job (nom, email, poste, description_poste) VALUES(:nom, :email, :poste, :description_poste)'); //Préparation de la table réservations avec les valeurs de la table
    $req->execute(array('nom'=>$donnee->getnom(),'email'=>$donnee->getemail(), 'poste'=>$donnee->getposte(), 'description_poste'=>$donnee->getdescription_poste())); //Execution des requêtes
    $a = $req->fetch();
	//Conditions de redirection
    if ($a ==true)
    {
     header("location: index.php");
    }
    else
    {
     header("location: https://www.paypal.com/fr/signin"); //Redirection vers le lien de la page de paiement
    }

          }
}

?>
