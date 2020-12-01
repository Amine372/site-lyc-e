<?php
require_once 'model_reservation.php';
require_once 'traitement_reservation.php';
class manager_reservation{ //Déclaration de la classe Manager
public function reservation($donnee){

      $bdd=new PDO('mysql:host=localhost;dbname=projet_lycee;charset=utf8', 'root', ''); //Connexion à la BDD
    $req=$bdd->prepare('INSERT into annonces (nom, mail, poste, ville) VALUES(:nom, :mail, :poste, :ville)'); //Préparation de la table réservations avec les valeurs de la table
    $req->execute(array('nom'=>$donnee->getnom(),'mail'=>$donnee->getmail(), 'poste'=>$donnee->getposte(), 'ville'=>$donnee->getville())); //Execution des requêtes
    $donnee = $req->fetch();
	//Conditions de redirection
    if ($donnee ==true){
     header("location: index.php");
    }
    else{
     header("location: emploi.php"); //Redirection vers le lien de la page de paiement
    }

          }

}

class manager_annonce
{

  protected $_nom;
  protected $_mail;
  protected $_poste;
  protected $_ville;

  public function Annonces()
  {

      $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
      $bdd->exec("SET CHARACTER SET utf8");
      // SELECT * FROM Users where 0
      // execute()
      $req = $bdd->prepare('SELECT nom, mail, poste, ville from annonces ');
      $req->execute();
      $donnee = $req->fetchall();
      if ($donnee)
      {
        return $donnee;
      }

}

}


?>
