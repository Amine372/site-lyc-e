<?php
  $nom= $_POST['ajout_admin_nom'];
  $prenom= $_POST['ajout_admin_prenom'];
  $email= $_POST['ajout_admin_email'];
  $role= $_POST['ajout_admin_role'];
  $mdp= (md5($_POST['ajout_admin_mdp']));
?>
