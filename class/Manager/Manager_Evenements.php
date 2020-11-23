<?php
require_once(__DIR__.'/../modele/Model_Evenements.php');
class Manager_Evenements
{

  protected $_id;
  protected $_id_utilisateur;
  protected $_description;
  protected $_date;
  protected $_Comm;
  protected $_nom;
  protected $_prenom;

  public function Evenements()
  {

      $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
      $bdd->exec("SET CHARACTER SET utf8");
      // SELECT * FROM Users where 0
      // execute()
      $req = $bdd->prepare('SELECT titre, description, date, Comm, utilisateur.nom, utilisateur.prenom from evenements INNER JOIN utilisateur ON evenements.id_utilisateur = utilisateur.id ORDER BY `evenements`.`id` DESC');
      $req->execute();
      $donnee = $req->fetchall();
      if ($donnee)
      {
        return $donnee;
      }

}
public function Admin()
{

    $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
    $bdd->exec("SET CHARACTER SET utf8");
    $req = $bdd->prepare('SELECT nom, prenom, id from utilisateur');
    $req->execute();
    $donnee = $req->fetchall();
    if ($donnee)
    {
      return $donnee;
    }
    else
    {
      echo " erreur, contactez Amine, Loic ou Quentin";
    }

    public function Admin_ajout($nomprenometid)
    {

        $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
        $bdd->exec("SET CHARACTER SET utf8");
        $req = $bdd->prepare('UPDATE utilisateur SET role = "ADMIN" WHERE id=:id;');
        $req->execute();
        $donnee = $req->fetchall();
        if ($donnee)
        {
          return $donnee;
        }
        else
        {
          echo " erreur, contactez Amine, Loic ou Quentin";
        }

}
}

 ?>
