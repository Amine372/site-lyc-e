<?php
require_once(__DIR__.'/../modele/model_job.php');
class manager_job
{

  protected $_id;
  protected $_id_utilisateur;
  protected $_poste;
  protected $_description_poste;
  protected $_nom;

  public function Annonces()
  {

      $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
      $bdd->exec("SET CHARACTER SET utf8");
      // SELECT * FROM Users where 0
      // execute()
      $req = $bdd->prepare('SELECT id, id_utilisateur, poste, description_poste, nom from annonces');
      $req->execute();
      $donnee = $req->fetchall();
      if ($donnee)
      {
        return $donnee;
      }

}
}

 ?>
