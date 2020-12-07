<?php
if (isset($_POST['ajout_admin_evenenements_submit']))
{
  $id_utilisateur = 3;
  $titre= $_POST['ajout_admin_evenements_titre'];
  $description= $_POST['ajout_admin_evenements_description'];
  $date= $_POST['ajout_admin_evenements_date'];
  $Comm= $_POST['ajout_admin_evenements_comm'];

  $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
  $bdd->exec("SET CHARACTER SET utf8");
  $req = $bdd->prepare('INSERT INTO evenements (nom, prenom, email, role, mdp, verif) VALUES (?, ?, ?, ?, ?, ?);');
  $req->execute(array($nom,$prenom,$email,$role, $mdp,$verif));
  $donnee = $req->fetchall();
  header("Location: ../view/admin/parametres_admin.php");
}
?>
