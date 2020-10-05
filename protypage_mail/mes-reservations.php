<?php
require 'inc/bootstrap.php';
require 'inc/header.php'; ?>


    <h1>Bonjour <?= $_SESSION['auth']->username; ?></h1>


	<br>
	<br>
<center><h2>Bienvenue sur votre espace client !</h2></center>
<center>

<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=cinemapoo;charset=utf8', 'root', ''); //Connexion à la BDD avec PDO
  
  
  $bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e) //Message d'erreur
{
        die('Erreur : '.$e->getMessage());
}
//Selectionner les informations d une table à afficher sur cette page
$reponse = $bdd->query(' 
  SELECT id,nom,mail,film,nbplaces 
  FROM reservations
  ORDER BY ID DESC LIMIT 0, 1');
  
  

while ($donnees = $reponse->fetch())
{ //Affichage avec un echo 
  echo '<p><b>N° réservation</b> ' . htmlspecialchars($donnees['id']) .
  '<p> <b>Votre nom </b> : ' . htmlspecialchars($donnees['nom']) .
     '<p> <b>Votre adresse email</b> : ' . htmlspecialchars($donnees['mail']) .
  '<p> <b>Film</b> : ' . htmlspecialchars($donnees['film']) .
    '<p> <b>Places</b> : ' . htmlspecialchars($donnees['nbplaces']) .
 
  '</p>';


}


$reponse->closeCursor();

?>
</center>
<?php require 'inc/footer.php'; ?>
