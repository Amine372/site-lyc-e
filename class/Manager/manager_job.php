<?php
require_once(__DIR__.'/../modele/model_job.php');
class manager_job
{

  protected $_poste;
  protected $_description_poste;

  public function Annonces()
  {

      $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
      $bdd->exec("SET CHARACTER SET utf8");
      // SELECT * FROM Users where 0
      // execute()
      $req = $bdd->prepare('SELECT poste, description_poste from annonces');
      $req->execute();
      $donnee = $req->fetchall();
      if ($donnee)
      {
        return $donnee;
      }

}
}

 ?>
