<?php

require '../class/Modele/Model_Message.php';
require '../class/Manager/Manager_Message.php';
session_start();

$message = new Manager_Message;
$id_user = $message->getUser_id($_SESSION['email']);


$message->create_discussion($id_user['id'], $_POST['id']);


header('Location: ../view/messages.php');

?>
