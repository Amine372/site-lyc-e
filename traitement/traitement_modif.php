 <?php
  //Traitement des données entrées dans le form d'inscription
  require '../class/modele/User.php';
  require '../class/manager/Manager_User.php';
  session_start();


  $user = new User(['nom'=>$_POST['nom'],
                    'prenom'=>$_POST['prenom']]);
  $modif = new Manager_User;
  $modif->modification($user, $_SESSION['email']);


 ?>
