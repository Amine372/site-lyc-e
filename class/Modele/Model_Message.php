<?php
//Modèle
class Message
{

  private $_discussion;
  private $_user;
  private $_message;
  private $_date;

  public function __construct(array $donnees)
  {
    $this->hydrate($donnees);
  }

  public function hydrate(array $donnees)
  {
    foreach ($donnees as $key => $value)
    {
      $method = 'set'.ucfirst($key);

      if (method_exists($this, $method))
      {
  	// On appelle le setter.
        	$this->$method($value);
      }
    }
  }

  //setter
  public function setDiscution($discussion)
  {
    $this->_discussion = $discussion;
  }
  public function setUser($user)
  {
    $this->_user = $user;
  }
  public function setMessage($message)
  {
    $this->_message = $message;
  }
  public function setDate($date)
  {
    $this->_date = $date;
  }
  //getter
  public function getDiscussion()
  {
    return $this->_discussion;
  }
  public function getUser()
  {
    return $this->_user;
  }
  public function getMessage()
  {
    return $this->_message;
  }
  public function getDate()
  {
    return $this->_date;
  }
}
?>
