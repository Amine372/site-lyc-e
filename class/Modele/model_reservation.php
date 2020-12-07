<?php
require_once(__DIR__.'/../Manager/manager_reservation.php');
require_once(__DIR__.'/../../traitement/traitement_reservation.php');
class reservation { //Déclaration de la classe réservation
//Déclaration des attributs
  private $_nom;
  private $_mail;
  private $_poste;
  private $_description_poste;

  public function __construct($nom, $mail, $poste, $description_poste){
//Partie SET
      $this->setnom($nom);
      $this->setmail($mail);
      $this->setposte($poste);
      $this->setdescription_poste($description_poste);
}

public function setnom($nom){
  if(empty($nom)){
    trigger_error('la variable doit etre un caractere');
    return;
  }
  $this->_nom = $nom;
}
public function setmail($mail){
  if(empty($mail)){
    trigger_error('la variable doit etre un caractere');
    return;
  }
  $this->_mail = $mail;
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
  return $this->_mail;
}
public function getposte(){
  return $this->_poste;
}
public function getdescription_poste(){
  return $this->_description_poste;

}
}
?>
