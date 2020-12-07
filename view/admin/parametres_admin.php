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
<link rel="stylesheet" type="text/css" href="../../css/animate.css">
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../css/line-awesome.css">
<link rel="stylesheet" type="text/css" href="../../css/line-awesome-font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../../css/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" type="text/css" href="../../lib/slick/slick.css">
<link rel="stylesheet" type="text/css" href="../../lib/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="../../css/style.css">
<link rel="stylesheet" type="text/css" href="../../css/responsive.css">
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
            <a href="../../index.php" title=""><img src="../../images/logo.png" alt=""></a>
          </div><!--fin du logotype-->
          <nav>
            <ul>
              <li>
                <a href="../../index.php" title="">
                  <span><img src="../../images/icon1.png" alt=""></span>
                  Accueil
                </a>
              </li>
              <li>
                <a href="../evenements.php" title="">
                  <span><img src="../../images/icon3.png" alt=""></span>
                  Evénements
                </a>
              </li>
              <li>
                <a href="../emploi.php" title="">
                  <span><img src="../../images/icon5.png" alt=""></span>
                  Annonces
                </a>
              </li>
              <li>
                <a href="../contact.php" title="">
                  <span><img src="../../images/icon6.png" alt=""></span>
                  Contact
                </a>
              </li>
              <li>
                <a href="../messages.php" title="">
                  <span><img src="../../images/icon4.png" alt=""></span>
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
                  <li><a href="../parametres_du_compte.php" title="">Paramètre du compte</a></li>
                </ul>
                <h3 class="tc"><a href="../../traitement/deconnexion.php" title="">Se déconnecter</a></h3>
              </div><!--fin des paramètres du compte utilisateur-->';
            }
            else
            {
              echo '<div class="user-info">
                <a href="#" title="">Connectez vous</a>
                <i class="la la-sort-down"></i>
              </div>
              <div class="user-account-settingss">
                <h3><a href="../connexion.php" title="">Connexion</a></h3>

                <h3><a href="../inscription.php" title="">Inscription</a></h3>
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
                     <a class="nav-item nav-link active" id="nav-inscrits-tab1" data-toggle="tab" href="#nav-inscrits1" role="tab" aria-controls="nav-inscrits1" aria-selected="true"><i class="la la-user"></i>Ajouter un utilisateur</a>
                     <a class="nav-item nav-link active" id="nav-inscrits-tab2" data-toggle="tab" href="#nav-inscrits2" role="tab" aria-controls="nav-inscrits2" aria-selected="true"><i class="la la-user"></i>Ajouter un évènement</a>
								  </div>
								  </div>
							</div><!--acc-leftbar end-->
						</div>
						<div class="col-lg-9">
							<div class="tab-content" id="nav-tabContent">
							  	<div class="tab-pane fade show active" id="nav-status" role="tabpanel" aria-labelledby="nav-status-tab">
							  		<div class="acc-setting">
							  			<h3>Inscrits</h3>
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

							  	</div>
                  <div class="tab-pane fade" id="nav-inscrits" role="tabpanel" aria-labelledby="nav-inscrit-tab">
							  		<div class="acc-setting">
										<h3>Inscrits</h3>
										<!--form method="post" action="#"-->
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
                              <label for="prenom">Prenom :</label>
                              <input type="text" id="ajout_admin_prenom" name="ajout_admin_prenom">
                            </div>
                            <div>
                              <label for="mail">Mail :</label>
                              <input type="email" id="ajout_admin_email" name="ajout_admin_email">
                            </div>
                            <div>
                              <label for="role">Role (ADMIN/NULL) :</label>
                              <input type="text" id="ajout_admin_role" name="ajout_admin_role">
                            </div>
                            <div>
                              <label for="mdp">Mot de passe :</label>
                              <input type="password" id="ajout_admin_mdp" name="ajout_admin_mdp">
                            </div>
                            <div>
                              <input type="submit" id="ajout_admin_submit" name="ajout_admin_submit" value="Envoyer le formulaire">
                            </div>
                         </form></p>
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
        <p><img src="../../images/copy-icon2.png" alt="">Copyright 2020</p>
        <img class="fl-rgt" src="../../images/logo2.png" alt="">
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
