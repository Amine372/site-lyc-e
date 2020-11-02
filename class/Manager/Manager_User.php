<?php
//Manager
require_once(__DIR__.'/../modele/User.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Manager_User
{

  private $_nom;
  private $_prenom;
  private $_email;
  private $_mdp;

//Inscription dans la bdd
  public function inscription(User $inscrit)
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
    $req = $bdd->prepare('SELECT * FROM utilisateur WHERE email = :email');
    $req->execute(array('email'=>$inscrit->getEmail()));
    $donnee = $req->fetch();
    if($donnee)
    {
      $_SESSION['erreur_inscr'] = "L'email est déjà utilisé.";
      header('Location: ../view/inscription.php');
    }
    else
    {

      //Envoie de mail
      require '../vendor/PHPMailer/PHPMailer/src/Exception.php';
      require '../vendor/PHPMailer/PHPMailer/src/PHPMailer.php';
      require '../vendor/PHPMailer/PHPMailer/src/SMTP.php';

      $mail = new PHPMailer(); // fondation d'un nouvel objet
      $mail->CharSet = 'UTF-8';
      $mail->IsSMTP(); // activer SMTP
      $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
      $mail->SMTPAuth = true; // authentication activée
      $mail->SMTPSecure = 'ssl'; // transfer sécurisé activé et néscéssaire notement pour gmail
      $mail->Host = "smtp.gmail.com";
      $mail->Port = 465; // or 587
      $mail->IsHTML(true);
      $mail->Username = "quentin.lignani.schuman@gmail.com";
      $mail->Password = "Admwb2000";
      $mail->SetFrom($inscrit->getEmail());
      $mail->Subject = "Création de compte réussi";
      $mail->Body = "<center><b>Lycée Robert Schumann</b><br><p>Bonjour ! Votre compte a été créé.</p></center></html>";
      $mail->AddAddress($inscrit->getEmail());
      if(!$mail->Send())
      {
         echo "Mailer Error: " . $mail->ErrorInfo;
         $_SESSION['mail_error'] = 'Erreur dans l\'email';
         header('Location: ../view/inscription.php');
      }
      else
      {
         echo "Message has been sent";
         $req = $bdd->prepare('INSERT into utilisateur (nom, prenom, email, mdp) value(?,?,?,?)');
         $req -> execute(array($inscrit->getNom(), $inscrit->getPrenom(), $inscrit->getEmail(), SHA1($inscrit->getMdp())));
         header('Location: ../view/confirm_inscription.html');
      }

    }
  }

  // Partie Connexion
  public function connexion(User $connexion) //méthode de connexion de l'uttilisateur, entre parenthèse, il y a les informations saisies par l'uttilisateur
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root',''); //on uttilise PDO, pour faire le pont entre PDO et PHP, on y entre si on veut se connecter en local, en l'occurence oui, le nom de la base de donnée, ainsi que les identifiants avec lesquels on uttilise SQL
    $req = $bdd->prepare('SELECT * from utilisateur where email = ? AND mdp = ?'); // dans la variable req (alias requete), on prépare la requete SQL, littéralement, on demande dans la table 'uttilisateurs' si l'identifiant et le hash du mot de passe entré par l'uttilisateur existent dans la table au travers d'une même ligne
    $req->execute(array($connexion->getEmail(), SHA1($connexion->getMdp())));
    $donnee = $req->fetch();// on demande enfin d'executer la requet qui a été préalablement préparée. Dans la variable donnée, on trouve les informations de la ligne qui correspond à l'uttilisateur entré et le hash du mot de passe entré. Si tant est qu'ils existebt au sein d'une meme ligne. Sinon, la variable donnée n'a pas d'affectation
    if ($donnee) //Si la variable donnee existe, en conséquence, cela signifie que les identifiants sont valides puisque l'identifiant et le hash du mot de passe existent au sein d'une meme ligne.
    {
      $_SESSION['email'] = $donnee['email']; //on insère dans la session l'addresse mail entrée par l'uttilisateur dans le formulaire
      $_SESSION['nom'] = $donnee['nom']; //on insère dans la session le non de l'uttilisateur
      $_SESSION['prenom'] = $donnee['prenom'];
      if ($donnee['role'] == "admin")
      {
        $_SESSION['role'] = $donnee['role'];
      }
      if ($donnee['verif'] == 0) {
        header('location: ../view/recup_mdp.php');
        exit();
      }
      header('location: ../index.php');
    }
    else
    {
      $_SESSION['erreur_co'] = true;
      header('location: ../view/connexion.php');
    }
  }


  //Update des données utilisateur dans la bdd
  public function modification(User $modif, $email)
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
    $req = $bdd->prepare('UPDATE utilisateur SET nom = ?, prenom = ? WHERE email = ?');
    $req->execute(array($modif->getNom(), $modif->getPrenom(), $email));
    $_SESSION['succes_modif'] = 'Modification enregistré';
    header('location: ../view/parametres_du_compte.php#nav-statue');
    //actualisation du nom de l'utilisateur dans les pages
    $req = $bdd->prepare('SELECT * from utilisateur where email = ?');
    $req->execute(array($email));
    $donnee = $req->fetch();
    $_SESSION['nom'] = $donnee['nom'];
    $_SESSION['prenom'] = $donnee['prenom'];
  }

  //Update des données utilisateur dans la bdd
  public function modif_mdp(User $verif, $mdp, $email)
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
    $req = $bdd->prepare('SELECT * from utilisateur where email = ? AND mdp = ?');
    $req->execute(array($email, SHA1($verif->getMdp())));
    $donnee = $req->fetch();
    if ($donnee)
    {
      $req = $bdd->prepare('UPDATE utilisateur SET mdp = ? WHERE email = ?');
      $req->execute(array(SHA1($mdp), $email));
      header('location: ../view/parametres_du_compte.php#nav-password');
      $_SESSION['message_mdp'] = 'Modification enregistré';
      echo '<scrip>$(document).ready(function()){
        $("nav").toggleClass("active");
        return false;
      });</script>';
    }
    else {
      $_SESSION['message_mdp'] = 'Mauvais mot de passe';
      header('location: ../view/parametres_du_compte.php#nav-password');
      echo '<scrip>$(document).ready(function(){
        console.log( "ready!" );
      });</script>';
    }


  }

  //Update des données utilisateur dans la bdd
  public function recup_mdp(User $change, $email)
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
    $req = $bdd->prepare('UPDATE utilisateur SET mdp = ?, verif = 1 WHERE email = ?');
    $req->execute(array(SHA1($change->getMdp()), $email));
    header('location: ../index.php');
  }


  //inscription d'un compte admin
  public function inscrip_admin(User $inscription)
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
    $req = $bdd->prepare('SELECT * FROM utilisateur WHERE email = :email');
    $req->execute(array('email'=>$inscription->getEmail()));
    $donnee = $req->fetch();
    if($donnee)
    {
      $_SESSION['erreur_add_admin'] = "L'identifiant est déjà utilisé.";
      header('Location: ../view/ajout_admin.php');
    }
    else
    {
      $req = $bdd->prepare('INSERT into utilisateur (nom, prenom, email, mdp, role) value(?,?,?,?, "admin")');
      $req -> execute(array($inscription->getNom(), $inscription->getPrenom(), $inscription->getEmail(), SHA1($inscription->getMdp())));

      $_SESSION['add_admin'] = "Un compte administrateur a été ajouter avec succès.";
      header('Location: ../view/ajout_admin.php');
    }
  }

  //récupération des données utilisateur pour un affichage
  public function recup_user()
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
    $req = $bdd->query('SELECT * FROM utilisateur');
    $donnee = $req->fetchall();
    return $donnee;
  }

}
?>
