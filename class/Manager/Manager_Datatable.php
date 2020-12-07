<?php
require_once(__DIR__.'/../modele/Model_Datatable.php');
class Manager_Datatable
{

  protected $_id;
  protected $_mail;
  protected $_nom;
  protected $_prenom;

  public function Datatable()
  {

      $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
      $bdd->exec("SET CHARACTER SET utf8");
      $req = $bdd->prepare('SELECT nom, prenom, id, mail from  utilisateur;');
      $req->execute();
      $donnee = $req->fetchall();
      if ($donnee)
      {
        return $donnee;
      }

}


}

 ?>
