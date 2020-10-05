<?php
include('')
          $servername = 'localhost';
          $username = 'root';
          $password = '';

          try
          {
            $conn = new PDO("mysql:host=$servername;dbname=projet_lycee", $username, $password);
            //On définit le mode d'erreur de PDO sur Exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          }

$reponse = $bdd->query('SELECT id, id_utilisateur, titre , description , date, Comm FROM evenements');

  while ($donnees = $reponse->fetch())
  { //Affichage avec un echo
    echo '' . htmlspecialchars($donnees['id']) .
    '' . htmlspecialchars($donnees['id_utilisateur']) .
     '' . htmlspecialchars($donnees['titre']) .
     '' . htmlspecialchars($donnees['description']) .
     '' . htmlspecialchars($donnees['date']) .
     '' . htmlspecialchars($donnees['Comm']) .

     '</p>';


  }


$reponse->closeCursor();

      ?>
