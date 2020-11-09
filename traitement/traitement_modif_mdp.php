<?php
	//Traitement des données entrées dans le form d'inscription
	require '../class/modele/User.php';
	require '../class/manager/Manager_User.php';
	session_start();
	//Vérification du mdp
	if($_POST['mdp'] != $_POST['confirmmdp']){
		$_SESSION['message_mdp'] = "Erreur dans le mot de passe.";
		header('Location: ../view/parametres_du_compte.php');
		exit();
	}

	$donnee = new User(['mdp'=>$_POST['amdp']]);

	$verif = new Manager_User;
	$verif->modif_mdp($donnee, $_POST['mdp'], $_SESSION['email']);

?>
