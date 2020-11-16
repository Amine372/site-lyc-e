<?php
class Model_Admin
{
  protected $_id;
  protected $_nom;
  protected $_prenom;
  // Liste des getters

  public function id()
  {
    return $this->_id;
  }
  public function nom()
  {
    return $this->_nom;
  }
  public function prenom()
  {
    return $this->_prenom;
  }
  //Partie Setter
  public function setid($id)
  {
    $id = (int) $id;

    if ($id >= 1 && $id <= 100)
    {
      $this->_id = $id;
    }
  }
  public function setnom($nom)
  {
    $nom = (int) $nom;

    if ($nom >= 1 && $nom <= 100)
    {
      $this->_nom = $nom;
    }
  }
  public function setprenom($prenom)
  {
    $prenom = (int) $prenom;

    if ($prenom >= 1 && $prenom <= 100)
    {
      $this->_prenom = $prenom;
    }
  }
}
?>
