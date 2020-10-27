 <?php
   //Traitement des données entrées dans le form d'inscription
   require '../class/modele/User.php';
   require '../class/manager/Manager_User.php';
   session_start();
   //Vérification du mdp

   if($_POST['mdp'] != $_POST['confirmmdp']){
     $_SESSION['erreur_change'] = "Erreur dans le mot de passe.";
     header('Location: ../view/changement_mdp.php');
   }
   //ajout dans la bdd
   else{
     $change = new User(['email'=>$_POST['email'],
                          'mdp'=>$_POST['mdp']]);
     $inscrit = new Manager_User;
     $inscrit->change_mdp($change);
   }

 ?>
