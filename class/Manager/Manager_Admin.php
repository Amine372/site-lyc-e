<?php
require_once(__DIR__.'/../modele/Model_Admin.php');
class Manager_Admin
{

  protected $_id;
  protected $_nom;
  protected $_prenom;

  public function Admin()
  {

      $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','demo','demo');
      $bdd->exec("SET CHARACTER SET utf8");
      $req = $bdd->prepare('SELECT id, nom, prenom from utilisateur ORDER BY `utilisateur`.`prenom` DESC');
      $req->execute();
      $donnee = $req->fetchall();
      if ($donnee)
      {
        return $donnee;
      }

}
}

 ?>
