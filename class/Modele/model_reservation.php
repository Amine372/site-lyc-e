<?php
require_once '../class/Manager/manager_reservation.php';
require_once '../traitement/traitement_reservation.php';
class reservation { //Déclaration de la classe réservation
//Déclaration des attributs
  private $_nom;
  private $_mail;
  private $_poste;
  private $_ville;

  public function __construct($nom, $mail, $poste, $ville){
//Partie SET
      $this->setnom($nom);
      $this->setmail($mail);
      $this->setposte($poste);
      $this->setville($ville);
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
public function setville($ville){
  if(empty($ville)){
    trigger_error('la variable doit etre un caractere');
    return;
  }
  $this->_ville = $ville;
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
public function getville(){
  return $this->_ville;

}
}
?>
