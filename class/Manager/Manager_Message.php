<?php
//Manager
require_once(__DIR__.'/../Modele/Model_Message.php');


class Manager_Message
{

  private $_discussion;
  private $_user;
  private $_message;
  private $_date;


  public function create_discussion($user1, $user2)
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','demo','demo');
    $req = $bdd->prepare('INSERT into discussion (id_user1, id_user2) value(?, ?)');
    $req->execute(array($user1, $user2));
  }

  public function create_message($discussion_id, $id_user, $message, $date)
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','demo','demo');
    $req = $bdd->prepare('INSERT into messages (id_discussion, id_utilisateur, message, date) value(?, ?, ?, ?)');
    $req->execute(array($discussion_id, $id_user, $message, $date));
  }

  public function get_discussion_list($email)
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','demo','demo');
    $req = $bdd->prepare('SELECT discussion.id from utilisateur inner join discussion on utilisateur.id = id_user1 where id_user1 = (SELECT id from utilisateur WHERE email = :email) or id_user2 = (SELECT id from utilisateur WHERE email = :email) group by discussion.id');
    $req->execute(array('email'=>$email));
    $donnees = $req->fetchall();
    return $donnees;
  }

  public function get_discussion($email)
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','demo','demo');
    $req = $bdd->prepare('SELECT discussion.id_user1, discussion.id_user2 from utilisateur join discussion on utilisateur.id = id_user1 where id_user1 = (SELECT id from utilisateur WHERE email = :email) or id_user2 = (SELECT id from utilisateur WHERE email = :email) group by discussion.id');
    $req->execute(array('email'=>$email));
    $donnees = $req->fetchall();
    $discussion = [];

    foreach ($donnees as $key) {
      $req = $bdd->prepare('SELECT id, nom, prenom from utilisateur where id = :id and email <> :email');
      $req->execute(array('id'=>$key['id_user1'], 'email'=>$email));
      $result = $req->fetchall();
      if($result) {
        $discussion[] = $result;
      }
    }

    foreach ($donnees as $key) {
        $req = $bdd->prepare('SELECT id, nom, prenom from utilisateur where id = :id and email <> :email');
        $req->execute(array('id'=>$key['id_user2'], 'email'=>$email));
        $result = $req->fetchall();
        if($result) {
          $discussion[] = $result;
        }
      }
      return $discussion;

  }

  public function get_messages($discussion)
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','demo','demo');
    $req = $bdd->prepare('SELECT * from messages where id_discussion = ? order by date asc');
    $req->execute(array($discussion));
    $donnees = $req->fetchall();
    return $donnees;
  }

  public function get_liste_user($email)
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','demo','demo');
    $req = $bdd->prepare('SELECT id, nom, prenom from utilisateur WHERE email <> ? order by nom');
    $req->execute(array($email));
    $donnees = $req->fetchall();
    return $donnees;
  }

  public function getUser_id($email)
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','demo','demo');
    $req = $bdd->prepare('SELECT id from utilisateur WHERE email = ?');
    $req->execute(array($email));
    $donnee = $req->fetch();
    return $donnee;
  }
}
?>
