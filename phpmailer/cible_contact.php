<?php
//require './PHPMailer/src/Exception.php';
//require './PHPMailer/src/PHPMailer.php';
//require './PHPMailer/src/SMTP.php';
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

	$from = $_REQUEST['email'];
    $nom = $_REQUEST['nom'];
    $sujet = $_REQUEST['sujet'];
    $message = $_REQUEST['message'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$mail = new PHPMailer(); // fondation d'un nouvel objet
$mail->CharSet = 'UTF-8';
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // ou 587
$mail->IsHTML(true);
$mail->Username = "quentin.lignani.schuman@gmail.com";
$mail->Password = "Admwb2000";
$mail->SetFrom("q.lignani@lprs.fr");
$mail->Subject = "[Robert Schuman] : R�servation au Snack";
$mail->Body = "<tr><td style='border:none;'><strong>Subject:</strong> {$nom}, <strong>Email:</strong> {$email},<strong>Sujet:</strong> {$sujet},<strong>Message:</strong> {$message}</td></tr>";
$mail->AddAddress("q.lignani@lprs.fr");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    header("Location: ../traitement/validatemail.php");
 }
 ?>
