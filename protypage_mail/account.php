<?php
require_once 'class/traitement_account.php'; //lien vers le traitement
?>

    <h1>Bonjour <?= $_SESSION['auth']->username; ?></h1>

    <form action="" method="post">
        <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Changer de mot de passe"/>
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password_confirm" placeholder="Confirmation du mot de passe"/>
        </div>
        <button class="btn btn-primary">Changer mon mot de passe</button>
    </form>
	<br>
	<br>
<center><h2>Bienvenue sur votre espace client !</h2></center>
<center>
<?php //Affichage des informations de l'utilisateur
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=cinemapoo;charset=utf8', 'root', ''); //Connexion à la BDD avec PDO
  
  
  $bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e) //Message d'erreur
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('
  SELECT username, email
  FROM users
  ORDER BY ID DESC LIMIT 0, 1');
  
  

while ($donnees = $reponse->fetch())
{
  echo '<p><b>Votre login</b> ' . htmlspecialchars($donnees['username']) . //Afficher le login de l'utilisateur
  '<p> <b>Votre adresse email</b> : ' . htmlspecialchars($donnees['email']) . //Afficher l'adresse mail de l'utilisateur
      
  '</p>';


}


$reponse->closeCursor();

?>
</center>
<?php require 'inc/footer.php'; ?>
