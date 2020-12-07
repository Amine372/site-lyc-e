<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Paramètres Administrateur</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="../css/animate.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/line-awesome.css">
<link rel="stylesheet" type="text/css" href="../css/line-awesome-font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" type="text/css" href="../lib/slick/slick.css">
<link rel="stylesheet" type="text/css" href="../lib/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/responsive.css">
</head>


<body>


	<div class="wrapper">


    <header>
			<div class="container">
				<div class="header-data">
					<div class="logo">
						<a href="index.php" title=""><img src="images/logo.png" alt=""></a>
					</div><!--fin du logotype-->
					<nav>
						<ul>
							<li>
								<a href="index.php" title="">
									<span><img src="images/icon1.png" alt=""></span>
									Accueil
								</a>
							</li>
							<li>
								<a href="view/evenements.php" title="">
									<span><img src="images/icon3.png" alt=""></span>
									Evénements
								</a>
							</li>
							<li>
								<a href="view/emploi.php" title="">
									<span><img src="images/icon5.png" alt=""></span>
									Annonces
								</a>
							</li>
              <li>
								<a href="view/contact.php" title="">
									<span><img src="images/icon6.png" alt=""></span>
									Contact
								</a>
							</li>
              <li>
								<a href="view/messages.php" title="">
									<span><img src="images/icon4.png" alt=""></span>
									Messages
								</a>
							</li>
						</ul>
					</nav><!--fin de la barre de navigation-->
					<div class="menu-btn">
						<a href="#" title=""><i class="fa fa-bars"></i></a>
					</div><!--fin du menu bouton-->
					<div class="user-account">
            <?php
						if (isset($_SESSION['nom']))
            {
              echo '<div class="user-info">
  							<img src="http://via.placeholder.com/30x30" alt="">
  							<a href="#" title="">'.$_SESSION['nom'].'</a>
  							<i class="la la-sort-down"></i>
  						</div>
  						<div class="user-account-settingss">
  							<h3>Mon Compte</h3>
  							<ul class="us-links">
  								<li><a href="view/parametres_du_compte.php" title="">Paramètre du compte</a></li>
  							</ul>
  							<h3 class="tc"><a href="traitement/deconnexion.php" title="">Se déconnecter</a></h3>
  						</div><!--fin des paramètres du compte utilisateur-->';
            }
            else
            {
              echo '<div class="user-info">
  							<a href="#" title="">Connectez vous</a>
  							<i class="la la-sort-down"></i>
  						</div>
  						<div class="user-account-settingss">
  							<h3><a href="view/connexion.php" title="">Connexion</a></h3>

  							<h3><a href="view/inscription.php" title="">Inscription</a></h3>

  						</div><!--fin des paramètres du compte utilisateur-->';
            }
            ?>
          </div>
				</div><!--fin des données d'en-tête-->
			</div>
		</header><!--fin d'en-tête-->


		<section class="profile-account-setting">
			<div class="container">
				<div class="account-tabs-setting">
					<div class="row">
						<div class="col-lg-3">
							<div class="acc-leftbar">
								<div class="nav nav-tabs" id="nav-tab" role="tablist">
								    <a class="nav-item nav-link active"  data-toggle="tab" href="#nav-status" role="tab" aria-controls="nav-status" aria-selected="true"><i class="la la-user"></i>Inscrits</a>
								    <a class="nav-item nav-link"  data-toggle="tab" href="#nav-status-tab2" role="tab" aria-controls="nav-status-tab2" aria-selected="false"><i class="fa fa-lock"></i>Messages Inscrits</a>
								  </div>
							</div><!--acc-leftbar end-->
						</div>
						<div class="col-lg-9">
							<div class="tab-content" id="nav-tabContent">
							  	<div class="tab-pane fade show active" id="nav-status" role="tabpanel" aria-labelledby="nav-status-tab">
							  		<div class="acc-setting">
							  			<h3>Inscrits</h3>
											<form method="post" action="../traitement/traitement_admin.php">
												<div class="cp-field">
													<h5>Nom</h5>
													<div class="cpp-fiel">
														<input type="text" name="nom" placeholder="Nom" value="<?php echo $_SESSION['nom']; ?>" required>
													</div>
												</div>
												<div class="cp-field">
													<h5>Prénom</h5>
													<div class="cpp-fiel">
														<input type="text" name="prenom" placeholder="Prénom" value="<?php echo $_SESSION['prenom']; ?>" required>
													</div>
												</div>
												<div class="save-stngs pd2">
													<ul>
														<li><button type="submit">Sauvegarder</button></li>

                              <?php if(isset($_SESSION['succes_modif']))
                              {
                                echo $_SESSION['succes_modif'];
                                unset($_SESSION['succes_modif']);
                              } ?>

													</ul>
												</div><!--save-stngs end-->
											</form>
							  		</div><!--acc-setting end-->
							  	</div>
							  	<div class="tab-pane fade" id="nav-status-tab2" role="tabpanel" aria-labelledby="nav-status-tab2">
							  		<div class="acc-setting">
										<h3>Messages Utilisateurs</h3>
										<form method="post" action="../class/Modele/traitement_admin.php">
											</div>
											<div class="cp-field">
												<h5>A qui voulez vous avoir affaire ?</h5>
												<div class="cpp-fiel">
                          <?php
                          // on renseigne la classe que l'on veut uttiliser
                          $get_event = new Manager_Datatable;
                            // $donnee doit être le tableau avec tous les uttilisateurs, il est issu de la méthode "Admin" de la classe Manager_Evenements
                                $donnee= $get_event->Datatable();
                                if(is_null($donnee))
                                {
                                  echo "Aucun Inscrit";
                                }
                                else
                                {
                                  foreach ($donnee as $clef)
                                  {
                                    echo '<option value=$id '.((isset($_POST['form']) &&  $_POST['form'] == $id )? ' selected="selected" '  :  '' ) .'>'.$id. ". " .$nom. "</option>";
                                  }
                                }
                                    echo "</optgroup>
                                    <select name='nomprenometid'></select>";
                                ?>
												</div>
											</div>
											<div class="cp-field">
												<h5>Que voulez vous faire ?</h5>
												<div class="cpp-fiel">
                          <div>
                            <form>
													<input type="radio" name="mettre_en_admin" id="mettre_en_admin" value="Mettre en Admin<" required>
                          <label for="mettre_en_admin">Mettre en Admin</label>
												</div>
                        <div>
                        <input type="radio" name="supprimer_les_droits_admin" id="supprimer_les_droits_admin" value="Supprimer les droits Admin" required>
                        <label for="supprimer_les_droits_admin">Supprimer les droits Admin</label>
                      </div>
                      <div>
                      <input type="radio" name="envoyer_un_message" id="envoyer_un_message" value="Envoyer un Message" required>
                      <label for="envoyer_un_message">Envoyer un Message</label>
                    </div>
                    <div>
                    <input type="radio" name="envoyer_un_mail" id="envoyer_un_mail" value="Envoyer un Mail" required>
                    <label for="envoyer_un_mail">Envoyer un Mail</label>


                    </form>
                    </div>
											</div>
											<div class="save-stngs pd2">
												<ul>
													<li><button name="xcv" type="submit">Continuer</button></li>
                          <?php
                          if(isset($_POST['xcv']))
                          {
                            if(isset($_POST['mettre_en_admin']))
                            {
                              $nomprenometid = $this->nomprenometid;
                              // on renseigne la classe que l'on veut uttiliser
                              $get_event = new Manager_Evenements;
                              // $donnee doit être le tableau avec tous les uttilisateurs, il est issu de la méthode "Admin" de la classe Manager_Evenements
                              $donnee= $get_event->Admin_ajout($nomprenometid);
                            }
                            elseif (isset($_POST['supprimer_les_droits_admin']))
                            {

                            }
                            elseif (isset($_POST['envoyer_un_message']))
                            {

                            }
                            elseif (isset($_POST['envoyer_un_mail']))
                            {

                            }
                          }
                          ?>
												</ul>
											</div><!--save-stngs end-->
										</form>
									</div><!--acc-setting end-->
							  	</div>
							</div>
						</div>
					</div>
				</div><!--account-tabs-setting end-->
			</div>
		</section>



		<footer>
			<div class="footy-sec mn no-margin">
				<div class="container">
					<p><img src="../images/copy-icon2.png" alt="">Copyright 2020</p>
					<img class="fl-rgt" src="../images/logo2.png" alt="">
				</div>
			</div>
		</footer>

	</div><!--theme-layout end-->

  <footer><!--début du pied de page-->
    <div class="footy-sec mn no-margin">
      <div class="container">
        <ul>
          <li><a href="#" title="">Centre d'aide</a></li>
          <li><a href="#" title="">Politique de confidentialité</a></li>
          <li><a href="#" title="">Règles de la communauté</a></li>
          <li><a href="#" title="">Politique de Cookies</a></li>
          <li><a href="#" title="">Carières</a></li>
          <li><a href="#" title="">Forum</a></li>
          <li><a href="#" title="">Langage</a></li>
          <li><a href="#" title="">Politique de Cookies</a></li>
        </ul>
        <p><img src="images/copy-icon2.png" alt="">Copyright 2020</p>
        <img class="fl-rgt" src="images/logo2.png" alt="">
      </div>
    </div>
  </footer><!--fin du pied de page-->

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/popper.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="../lib/slick/slick.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>


</body>
</html>
