<?php
session_start();

//Code pour utiliser des fichier Excel
require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;



//Setup des titres de la page Inscrit dans le fichier Excel
$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet('export_user.xlsx');
$sheet = $spreadsheet->getActiveSheet();
$sheet->setTitle("User");
$sheet->setCellValue('A1', 'NOM');
$sheet->setCellValue('B1', 'PRENOM');
$sheet->setCellValue('C1', 'EMAIL');
$sheet->setCellValue('D1', 'DATE CONNEXION');

$writer = new Xlsx($spreadsheet);
$writer->save('export_user.xlsx');


function insert($ligne, $id, $nom, $prenom, $email, $date_connexion){
  $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('export_user.xlsx');
  $sheet = $spreadsheet->getSheet(0);

  $sheet->setCellValue('A'.$ligne, $id);

  $sheet->setCellValue('B'.$ligne, $nom);

  $sheet->setCellValue('C'.$ligne, $prenom);

  $sheet->setCellValue('D'.$ligne, $email);

  $sheet->setCellValue('E'.$ligne, $date_connexion);

  $writer = new Xlsx($spreadsheet);
  $writer->save('export_user.xlsx');
}

//Compteur de ligne et récupération des données
function donnee()
{
  $ligne = 1;
  $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
  $response = $bdd->prepare('SELECT id, nom, prenom, email, date_connexion from utilisateur');
  $response->execute();
  $donnee = $response->fetchall();
  foreach ($donnee as $value)
  {
    $ligne++;
    $id = $value['id'];
    $nom = $value['nom'];
    $prenom = $value['prenom'];
    $email = $value['email'];
    $date_connexion = $value['date_connexion'];

    insert($ligne, $id, $nom, $prenom, $email, $date_connexion);
  }
}
donnee();

header("Content-type: application/vnd.ms-excel");
header("Content-disposition: attachment; filename=export_user.xls");

?>
