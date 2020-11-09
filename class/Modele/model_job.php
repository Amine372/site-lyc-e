<?php
require '../class/traitement/traitement_job.php';
require '../class/Manager/manager_job.php';
class Model_Job
{
  private $_id;
  private $_id_utilisateur;
  private $_nom;
  private $_poste;
  private $_description_poste;
  // Liste des getters

  public function id()
  {
    return $this->_id;
  }

  public function id_utilisateur()
  {
    return $this->_id_utilisateur;
  }
  public function nom()
  {
    return $this->_nom;
  }
  public function poste()
  {
    return $this->_poste;
  }
  public function description_poste()
  {
    return $this->_description_poste;
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
  public function setnom($nom)
  {
    $nom = (int) $nom;

    if ($nom >= 1 && $nom <= 100)
    {
      $this->_nom = $nom;
    }
  }
  public function setposte($poste)
  {
    $poste = (int) $poste;

    if ($poste >= 1 && $poste <= 100)
    {
      $this->_poste = $poste;
    }
  }
  public function setdescription_poste($description_poste)
  {
    $description_poste = (int) $description_poste;

    if ($description_poste >= 1 && $description_poste <= 100)
    {
      $this->_description_poste = $description_poste;
    }
  }
}
?>
