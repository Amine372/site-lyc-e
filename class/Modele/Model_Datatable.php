<?php
class Model_Evenements
{
  protected $_id;
  protected $_email;
  protected $_nom;
  protected $_prenom;
  protected $_role;
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
  public function role()
  {
    return $this->_role;
  }
  public function email()
  {
    return $this->_email;
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
  public function setrole($role)
  {
    $role = (int) $role;

    if ($role >= 1 && $role <= 100)
    {
      $this->_role = $role;
    }
  }
  public function setemail($email)
  {
    $email = (int) $email;

    if ($email >= 1 && $email <= 100)
    {
      $this->_email = $email;
    }
  }
}
?>
