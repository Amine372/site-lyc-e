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
  public function setid_utilisateur($id_utilisateur)
  {
    $id_utilisateur = (int) $id_utilisateur;

    if ($id_utilisateur >= 1 && $id_utilisateur <= 100)
    {
      $this->_id_utilisateur = $id_utilisateur;
    }
  }
  public function setdescription($description)
  {
    $description = (int) $description;

    if ($description >= 1 && $description <= 100)
    {
      $this->_description = $description;
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
}
?>
