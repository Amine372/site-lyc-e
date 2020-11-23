<?php
//Manager
require_once(__DIR__.'/../modele/Model_Message.php');


class Manager_Message
{

  private $_discussion;
  private $_user;
  private $_message;
  private $_date;


  public function create_discussion($user1, $user2)
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
    $req = $bdd->prepare('INSERT into discussion (id_user1, id_user2) value(?, ?)');
    $req->execute(array($user1, $user2));
  }

  public function create_message(Message $message)
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
    $req = $bdd->prepare('INSERT into messages (id_discussion, id_utilisateur, message, date) value(?, ?, ?, ?)');
    $req->execute(array($message->getDiscussion(), $message->getUser(), $message->getMessage(),$message->getDate()));
  }

  public function get_discussion_list($email)
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
    $req = $bdd->prepare('SELECT discussion.id from utilisateur inner join discussion on utilisateur.id = id_user1 inner join messages on discussion.id = id_discussion where id_user1 = (SELECT id from utilisateur WHERE email = :email) or id_user2 = (SELECT id from utilisateur WHERE email = :email) order by date desc');
    $req->execute(array('email'=>$email));
    $donnees = $req->fetchall();
    return $donnees;
  }

  public function get_discussion($email)
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
    $req = $bdd->prepare('SELECT discussion.id_user1, discussion.id_user2 from utilisateur inner join discussion on utilisateur.id = id_user1 inner join messages on discussion.id = id_discussion where id_user1 = (SELECT id from utilisateur WHERE email = :email) or id_user2 = (SELECT id from utilisateur WHERE email = :email) group by discussion.id order by date desc');
    $req->execute(array('email'=>$email));
    $donnees = $req->fetchall();
    $discussion = [];

    foreach ($donnees as $key) {
      $req = $bdd->prepare('SELECT id, nom from utilisateur where id = :id and email <> :email');
      $req->execute(array('id'=>$key['id_user1'], 'email'=>$email));
      $result = $req->fetchall();
      if ($result) {
        $discussion[] = $req->fetchall();
      }
    }

    if($discussion){
      return $discussion;
    }
    else{
      foreach ($donnees as $key) {
        $req = $bdd->prepare('SELECT id, nom from utilisateur where id = :id and email <> :email');
        $req->execute(array('id'=>$key['id_user2'], 'email'=>$email));
        $discussion[] = $req->fetchall();
      }
      return $discussion;
      }

    return $donnees;
  }

  public function get_messages($discussion)
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
    $req = $bdd->prepare('SELECT * from messages where id_discussion = ? order by date asc');
    $req->execute(array($discussion));
    $donnees = $req->fetchall();
    return $donnees;
  }

  public function get_liste_user()
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
    $req = $bdd->prepare('SELECT id, nom, prenom from utilisateur order by nom');
    $req->execute();
    $donnees = $req->fetchall();
    return $donnees;
  }
}
?>
