<?php
require_once(__DIR__.'/../modele/Model_Evenements.php');
class Manager_Evenements
{

  protected $_id;
  protected $_id_utilisateur;
  protected $_description;
  protected $_date;
  protected $_Comm;

  public function Evenements(Evenements $Evenements)
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
    $req = $bdd->prepare('SELECT * from evenements ORDER BY `evenements`.`id` DESC');
    $req->execute(array($connexion->getEmail(), SHA1($connexion->getMdp())));
    $donnee = $req->fetch();
    if ($donnee)
    {
      $_SESSION['email'] = $donnee['email'];
      $_SESSION['nom'] = $donnee['nom'];
      if ($donnee['role'] == "admin")
      {
        $_SESSION['role'] = $donnee['role'];
      }
      header('location: ../index.php');
    }
    else
    {
      $_SESSION['erreur_co'] = true;
      header('location: ../view/sign-in.php');
    }
  }



 ?>
