<?php
echo "test";
if (isset($_POST['ajout_admin_submit']))
{
  $nom= $_POST['ajout_admin_nom'];
  $prenom= $_POST['ajout_admin_prenom'];
  $email= $_POST['ajout_admin_email'];
  $role= $_POST['ajout_admin_role'];
  $mdp= (SHA1($_POST['ajout_admin_mdp']));
  $verif=0;
  $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','demo','demo');
  $bdd->exec("SET CHARACTER SET utf8");
  $req = $bdd->prepare('INSERT INTO utilisateur (nom, prenom, email, role, mdp, verif) VALUES (?, ?, ?, ?, ?, ?);');
  $req->execute(array($nom,$prenom,$email,$role, $mdp,$verif));
  $donnee = $req->fetchall();
  header("Location: ../view/admin/parametres_admin.php");
}
?>
