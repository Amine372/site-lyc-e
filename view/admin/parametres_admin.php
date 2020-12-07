<?php
    session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>UFA Robert Schuman | Paramètres Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="/site-lyc-e/css/animate.css">
<link rel="stylesheet" type="text/css" href="/site-lyc-e/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/site-lyc-e/css/line-awesome.css">
<link rel="stylesheet" type="text/css" href="/site-lyc-e/css/line-awesome-font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/site-lyc-e/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/site-lyc-e/css/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" type="text/css" href="/site-lyc-e/lib/slick/slick.css">
<link rel="stylesheet" type="text/css" href="/site-lyc-e/lib/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="/site-lyc-e/css/style.css">
<link rel="stylesheet" type="text/css" href="/site-lyc-e/css/responsive.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
<?php
 require '../../class/Manager/Manager_Datatable.php';
// require '../class/Modele/Model_Datatable.php';
  ?>
</head>


<body>


	<div class="wrapper">


    <header>
      <div class="container">
        <div class="header-data">
          <div class="logo">
            <a href="../index.php" title=""><img src="../images/logo.png" alt=""></a>
          </div><!--fin du logotype-->
          <div class="search-bar">

          </div><!--fin de la barre de recherche-->
          <nav>
            <ul>
              <li>
                <a href="../index.php" title="">
                  <span><img src="../images/icon1.png" alt=""></span>
                  Accueil
                </a>
              </li>
              <li>
                <a href="evenements.php" title="">
                  <span><img src="../images/icon3.png" alt=""></span>
                  Evénements
                </a>
              </li>
              <li>
                <a href="emploi.php" title="">
                  <span><img src="../images/icon5.png" alt=""></span>
                  Annonces
                </a>
              </li>
              <li>
                <a href="contact.php" title="">
                  <span><img src="../images/icon6.png" alt=""></span>
                  Contact
                </a>
              </li>
              <li>
                <a href="messages.php" title="">
                  <span><img src="../images/icon4.png" alt=""></span>
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
              <div class="user-account-settingss" style=";">
                <h3>Mon Compte</h3>
                <ul class="us-links">
                  <li><a href="parametres_du_compte.php" title="">Paramètre du compte</a></li>
                </ul>
                <h3 class="tc"><a href="../traitement/deconnexion.php" title="">Se déconnecter</a></h3>
              </div><!--fin des paramètres du compte utilisateur-->';
            }
            else
            {
              echo '<div class="user-info">
                <a href="#" title="">Connectez vous</a>
                <i class="la la-sort-down"></i>
              </div>
              <div class="user-account-settingss">
                <h3><a href="connexion.php" title="">Connexion</a></h3>

                <h3><a href="inscription.php" title="">Inscription</a></h3>
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
								    <a class="nav-item nav-link active" id="nav-status-tab" data-toggle="tab" href="#nav-status" role="tab" aria-controls="nav-status" aria-selected="true"><i class="la la-user"></i>Les évenements</a>
								    <a class="nav-item nav-link" id="nav-password-tab" data-toggle="tab" href="#nav-password" role="tab" aria-controls="nav-password" aria-selected="false"><i class="fa fa-lock"></i>Modifier son mot de passe</a>
                     <a class="nav-item nav-link active" id="nav-emplois-tab" data-toggle="tab" href="#nav-emplois" role="tab" aria-controls="nav-emplois" aria-selected="true"><i class="la la-user"></i>Emplois</a>
                     <a class="nav-item nav-link active" id="nav-inscrits-tab" data-toggle="tab" href="#nav-inscrits" role="tab" aria-controls="nav-inscrits" aria-selected="true"><i class="la la-user"></i>Inscrits</a>
								  </div>
							</div><!--acc-leftbar end-->
						</div>
						<div class="col-lg-9">
							<div class="tab-content" id="nav-tabContent">
							  	<div class="tab-pane fade show active" id="nav-status" role="tabpanel" aria-labelledby="nav-status-tab">
							  		<div class="acc-setting">
							  			<h3>Mon Compte</h3>
										<table id="evenements" class="display responsive nowrap" style="width:100%">
        <thead>
            <tr>
                <th><b>Nom</b></th>
                <th><b>Prénom</b></th>
                <th><b>Rôle</b></th>
                <th><b>Mail</b></th>
            </tr>
        </thead>
        <tbody>
          <?php
                              // on fait une boucle pour afficher tous les eleves
                              $get_event = new Manager_Datatable;
                                // $donnee doit être le tableau avec tous les eleves
                                    $donnee= $get_event->Datatable();
                                    if(is_null($donnee))
                                    {
                                      echo "Aucun Eleve";
                                    }
                                    else
                                    {
                                      foreach ($donnee as $clef)
                                      {
                                        echo '  <tr>
                                            <td>'.$clef['nom'].'</td>
                                            <td>'.$clef['prenom'].'</td>
                                            <td>'.$clef['role'].'</td>
                                            <td>'.$clef['email'].'</td>
                                        </tr> ';
                                    }
                                  }
                                    ?>
        </tbody>
        <tfoot>
            <tr>
              <th><b>Nom</b></th>
              <th><b>Prénom</b></th>
              <th><b>Rôle</b></th>
              <th><b>Mail</b></th>
            </tr>
        </tfoot>
    </table>
      <div class="tab-content" id="nav-tabEmplois">
          <div class="tab-pane fade show active" id="nav-emplois" role="tabpanel" aria-labelledby="nav-emplois-tab">
            <div class="acc-setting">
              <h3>Emplois</h3>

            </div><!--acc-setting end-->
          </div>
							  		</div><!--acc-setting end-->
							  	</div>
							  	<div class="tab-pane fade" id="nav-password" role="tabpanel" aria-labelledby="nav-password-tab">
							  		<div class="acc-setting">
										<h3>Changement de mot de passe</h3>
										<form method="post" action="../traitement/traitement_modif_mdp.php">
											<div class="cp-field">
												<h5>Ancien mot de passe</h5>
												<div class="cpp-fiel">
													<input type="password" name="amdp" placeholder="" required>
													<i class="fa fa-lock"></i>
												</div>
											</div>
											<div class="cp-field">
												<h5>Nouveau mot de passe</h5>
												<div class="cpp-fiel">
													<input type="password" name="mdp" placeholder="" required>
													<i class="fa fa-lock"></i>
												</div>
											</div>
											<div class="cp-field">
												<h5>Retapez le mot de passe</h5>
												<div class="cpp-fiel">
													<input type="password" name="confirmmdp" placeholder="" required>
													<i class="fa fa-lock"></i>
												</div>
											</div>
											<div class="save-stngs pd2">
												<ul>
													<li><button type="submit">Enregistrer</button></li>
                          <?php if(isset($_SESSION['message_mdp']))
                          {
                            echo $_SESSION['message_mdp'];
                            unset($_SESSION['message_mdp']);
                          }
                          ?>
												</ul>
											</div><!--save-stngs end-->
										</form>
									</div><!--acc-setting end-->
							  	</div>
                  <div class="tab-pane fade" id="nav-inscrits" role="tabpanel" aria-labelledby="nav-inscrit-tab">
							  		<div class="acc-setting">
										<h3>Inscrits</h3>
										<form method="post" action="#">
											<div class="cp-field">
												<h5>Ajouter un uttilisateur</h5>
                        <div class="cpp-fiel">
                          <p lang="fr" name="ajouter_utilisateur" id="ajouter_utilisateur" >
                            <form action="../../traitement/traitement_ajout_admin.php" method="post">
                            <div>
                              <label for="nom">Nom :</label>
                              <input type="text" id="ajout_admin_nom" name="ajout_admin_nom">
                            </div>
                            <div>
                              <label for="mail">Mail :</label>
                              <input type="email" id="ajout_admin_email" name="ajout_admin_email">
                            </div>
                            <div>
                              <label for="role">Role :</label>
                              <input type="text" id="ajout_admin_role" name="ajout_admin_role">
                            </div>
                            <div>
                              <label for="mdp">Mot de passe :</label>
                              <input type="text" id="ajout_admin_mdp" name="ajout_admin_mdp">
                            </div>
<                         </form></p>
                        </div>
                      </div>
                      <div class="cp-field">
												<h5>Actifs et Inactifs</h5>
                        <div class="cpp-fiel">
                          <p lang="fr" name="actifs_et_inactifs" id="actifs_et_inactifs" ><?php
                          $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
                          $bdd->exec("SET CHARACTER SET utf8");
                          $req = $bdd->prepare('SELECT * FROM utilisateur WHERE date_connexion');
                          $req->execute();
                          $donnee = $req->fetchall();
                          echo $donnee; ?></p>
                        </div>
                      </div>

										</form>
									</div><!--acc-setting end-->
							  	</div>
							</div>
						</div>
					</div>
				</div><!--account-tabs-setting end-->
			</div>
		</section>

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

<script type="text/javascript" src="/site-lyc-e/js/jquery.min.js"></script>
<script type="text/javascript" src="/site-lyc-e/js/popper.js"></script>
<script type="text/javascript" src="/site-lyc-e/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/site-lyc-e/js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="/site-lyc-e/lib/slick/slick.min.js"></script>
<script type="text/javascript" src="/site-lyc-e/js/script.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>


</body>
</html>
