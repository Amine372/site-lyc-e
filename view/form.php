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
}
      ?>
