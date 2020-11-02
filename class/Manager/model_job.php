<?php
require_once 'manager_job.php';
require_once 'traitement_job.php';
class job { //Déclaration de la classe réservation
//Déclaration des attributs
  private $_nom;
  private $_email;
  private $_poste;
  private $_description_poste;

  public function __construct($nom, $email, $poste, $description_poste){
//Partie SET
      $this->setNom($nom);
      $this->setemail($email);
      $this->setemail($poste);
      $this->setdescription_poste($description_poste);
}

public function setnom($nom){
  if(empty($nom)){
    trigger_error('la variable doit etre un caractere');
    return;
  }
  $this->_nom = $nom;
}
public function setemail($email){
  if(empty($email)){
    trigger_error('la variable doit etre un caractere');
    return;
  }
  $this->_email = $email;
}
public function setposte($poste){
  if(empty($poste)){
    trigger_error('la variable doit etre un caractere');
    return;
  }
  $this->_poste = $poste;
}
public function setdescription_poste($description_poste){
  if(empty($description_poste)){
    trigger_error('la variable doit etre un caractere');
    return;
  }
  $this->_description_poste = $description_poste;
}
//Partie Get
public function getnom(){
  return $this->_nom;
}
public function getmail(){
  return $this->_email;
}
public function getemail(){
  return $this->_poste;
}
public function getdescription_poste(){
  return $this->_description_poste;

}
}
?>