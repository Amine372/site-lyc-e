<?php
  $nom= $_POST['ajout_admin_nom'];
  $prenom= $_POST['ajout_admin_prenom'];
  $email= $_POST['ajout_admin_email'];
  $role= $_POST['ajout_admin_role'];
  $mdp= (SHA1($_POST['ajout_admin_mdp']));
  $verif=0;
  $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
  $bdd->execute(array(':calories' => 150, ':couleur' => 'red'));
  $req = $bdd->prepare('INSERT INTO utilisateur (nom, prenom, email, role, mdp, verif) VALUES (?, ?, ?, NULL, ?, ?);');
  $req->execute();
  $donnee = $req->fetchall();
?>
