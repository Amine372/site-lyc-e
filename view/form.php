<?php
          $servername = 'localhost';
          $username = 'root';
          $password = '';

          try{
  $conn = new PDO("mysql:host=$servername;dbname=projet_lycee", $username, $password);
  //On définit le mode d'erreur de PDO sur Exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

/*On capture les exceptions si une exception est lancée et on affiche
*les informations relatives à celle-ci*/
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
$reponse = $bdd->prepare('SELECT * FROM evenements WHERE Comm = :Comm ') ;  //on prepare la requete de php pour accéder aux identifiants et aux mdp dans la base de données en sql
$reponse->execute(array('Comm'=>$Comm)); //on insère sous forme de tableau les données que l'on veut récupérer de la base
$donne = $reponse->fetch(); //on execute finalement la requete
$donne = $Comm;
}
      ?>
