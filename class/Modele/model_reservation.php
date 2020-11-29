<?php
require_once '../class/Manager/manager_reservation.php';
require_once '../traitement/traitement_reservation.php';
class reservation { //Déclaration de la classe réservation
//Déclaration des attributs
  private $_nom;
  private $_mail;
  private $_film;
  private $_ville;

  public function __construct($nom, $mail, $film, $ville){
//Partie SET
      $this->setnom($nom);
      $this->setmail($mail);
      $this->setfilm($film);
      $this->setnbplaces($ville);
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
public function setfilm($film){
  if(empty($film)){
    trigger_error('la variable doit etre un caractere');
    return;
  }
  $this->_film = $film;
}
public function setnbplaces($ville){
  if(empty($ville)){
    trigger_error('la variable doit etre un caractere');
    return;
  }
  $this->_nbplaces = $nbplaces;
}
//Partie Get
public function getnom(){
  return $this->_nom;
}
public function getmail(){
  return $this->_mail;
}
public function getfilm(){
  return $this->_film;
}
public function getville(){
  return $this->_ville;

}
}
?>
