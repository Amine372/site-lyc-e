<?php
class Model_Evenements
{
  protected $_id;
  protected $_mail;
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
  public function setdate($date)
  {
    $date = (int) $date;

    if ($date >= 1 && $date <= 100)
    {
      $this->_date = $date;
    }
  }
  public function setComm($Comm)
  {
    $Comm = (int) $Comm;

    if ($Comm >= 1 && $Comm <= 100)
    {
      $this->_Comm = $Comm;
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
