<?php
require (__DIR__.'/../modele/model_job.php');
class Manager_Annonces
{

  protected $_id;
  protected $_id_utilisateur;
  protected $_nom;
  protected $_poste;
  protected $_description_poste;

  public function Annonces()
  {

      $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
      $bdd->exec("SET CHARACTER SET utf8");
      // SELECT * FROM annonces
      //execute()
      $req = $bdd->prepare('SELECT id, id_utilisateur, nom, poste, description_poste');
      $req->execute();
      $donnee = $req->fetchall();
      if ($donnee)
      {
        return $donnee;
      }

}
}

 ?>
