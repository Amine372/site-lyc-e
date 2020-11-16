<?php
class Model_Job
{
  private $_id;
  private $_poste;
  private $_description_poste;
  
  // Liste des getters

  public function id()
  {
    return $this->_id;
  }

  public function poste()
  {
    return $this->_poste;
  }
  
public function description_poste()
  {
    return $this->_description_posteposte;
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
