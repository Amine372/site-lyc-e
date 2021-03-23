<?php
include('../view/evenements.php');

          try
          {
            $conn = new PDO("mysql:host=localhost;dbname=projet_lycee", "demo", "demo");
            //On définit le mode d'erreur de PDO sur Exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          }
          catch( PDOException $Exception )
           {
               //PHP Fatal Error. Second Argument Has To Be An Integer, But PDOException::getCode Returns A String.
                  throw new MyDatabaseException( $Exception->getMessage( ) , $Exception->getCode( ) );
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
