<?php
session_start();

//Code pour utiliser des fichier Excel
$excel = "";
$excel .=  "NOM\tPRENOM\tEMAIL\tDATE CONNEXION\t\n";

//ALIMENTATION DE L'EXCEL AVEC LES DONNEES DE LA TABLE
$bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','demo','demo');
$response = $bdd->prepare('SELECT id, nom, prenom, email, date_connexion from utilisateur');
$response->execute();
$donnee = $response->fetchall();
foreach ($donnee as $row)
{
    $excel .= "$row[nom]\t$row[prenom]\t$row[email]\t$row[date_connexion]\n";
}

header("Content-type: application/vnd.ms-excel");
header("Content-disposition: attachment; filename=export_user.xls");

print $excel;
exit;

?>
