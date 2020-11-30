<?php

require '../class/Modele/Model_Message.php';
require '../class/Manager/Manager_Message.php';
session_start();
$_SESSION['discisssion_active'] = $_POST['discussion_id'];
date_default_timezone_set('Europe/Paris');
$date = date("Y-m-d H:i:s");

$message = new Manager_Message;
$id_user = $message->getUser_id($_SESSION['email']);


$message->create_message($_POST['discussion_id'], $id_user['id'], $_POST['message'], $date);

header('Location: ../view/messages.php');

?>
