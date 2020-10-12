<?php
require_once(__DIR__.'/../modele/Model_Evenements.php');
class Manager_Evenements
{

  protected $_id;
  protected $_id_utilisateur;
  protected $_description;
  protected $_date;
  protected $_Comm;

  public function Evenements()
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
    $req = $bdd->prepare('SELECT * from evenements ORDER BY `evenements`.`id` DESC');
    $req->execute(array($Evenements->getid(), $Evenements->getid_utilisateur(), $Evenements->getdescription(), $Evenements->getdate(),$Evenements->getComm()));
    $donnee = $req->fetchall();
    if ($donnee)
    {
      return $donnee;
    }
    else
    {
      $_SESSION['erreur_co'] = true;
      header('location: ../view/projects.php');
    }
  }
}


 ?>
