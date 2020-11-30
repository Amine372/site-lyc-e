
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Profils</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="../css/animate.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="../css/line-awesome.css">
<link rel="stylesheet" type="text/css" href="../css/line-awesome-font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
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

				<div class="companies-list">
					<div class="row">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="company_profile_info">
								<div class="company-up-info">
									<img src="http://via.placeholder.com/91x91" alt="">
									<h3> '.$clef['nom'].' '.$clef['prenom'].'</h3>
									<h4>Etudiant à l'UFA Robert schuman</h4>
									<ul>>
										<li><a href="messages.html" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
									</ul>
								</div>
							</div><!--company_profile_info end-->
						</div>
					</div>
				</div><!--companies-list end-->
				<div class="process-comm">
					<div class="spinner">
						<div class="bounce1"></div>
						<div class="bounce2"></div>
						<div class="bounce3"></div>
					</div>
				</div>
			</div>
		</section><!--companies-info end-->


	</div><!--theme-layout end-->



<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/popper.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/flatpickr.min.js"></script>
<script type="text/javascript" src="../lib/slick/slick.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>
