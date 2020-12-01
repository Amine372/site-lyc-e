<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Evènements</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="../css/animate.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/jquery.range.css">
<link rel="stylesheet" type="text/css" href="../css/line-awesome.css">
<link rel="stylesheet" type="text/css" href="../css/line-awesome-font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../lib/slick/slick.css">
<link rel="stylesheet" type="text/css" href="../lib/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/responsive.css">

<?php
 require '../class/Manager/Manager_Evenements.php';
// require '../class/Modele/Model_Evenements.php';
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

		<div class="search-sec">
			<div class="container">
				<div class="search-box">
					<form>
						<input type="text" name="search" placeholder="Recherche par mots clés">
						<button type="submit">Chercher</button>
					</form>
				</div><!--search-box end-->
			</div>
		</div><!--search-sec end-->

		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">

							<div class="col-lg-8" style="padding-left:20%">

								<div class="main-ws-sec">
									<div class="posts-section">
                    <?php
                    // on fait une boucle pour afficher tous les évenement
                    $get_event = new Manager_Evenements;
                      // $donnee doit être le tableau avec tous les evennements
                          $donnee= $get_event->Evenements();
                          if(is_null($donnee))
                          {
                            echo "Aucun évènement";
                          }
                          else
                          {
                            foreach ($donnee as $clef)
                            {
                              echo '  <div class="post-bar">
        											<div class="post_topbar">
        												<div class="usy-dt">
        													<img src="http://via.placeholder.com/50x50" alt="">
        													<div class="usy-name">
        														<h3> '.$clef['nom'].' '.$clef['prenom'].'</h3>
        														<span><img src="images/clock.png" alt="">'.$clef['date'].'</span>
        													</div>
        												</div>
        											</div>
        											<div class="epi-sec">
        												<ul class="descp">
        													<li><img src="images/icon8.png" alt=""></li>
        												</ul>
        												<ul class="bk-links">
        													<li><a href="messages.html" title=""><i class="la la-envelope"></i></a></li>
        													<li><p title="" class="bid_now">Profil</p></li>
        												</ul>
        											</div>
        											<div class="job_descp">
        												<h3>'.$clef['titre'].'</h3>
        												<p>'.$clef['description'].'</p>
        												<ul class="skill-tags">
        													<li><a href="#" title="">HTML</a></li>
        													<li><a href="#" title="">PHP</a></li>
        													<li><a href="#" title="">CSS</a></li>
        													<li><a href="#" title="">Javascript</a></li>
        													<li><a href="#" title="">Wordpress</a></li>
        													<li><a href="#" title="">Photoshop</a></li>
        													<li><a href="#" title="">Illustrateur</a></li>
        													<li><a href="#" title="">Corel Draw</a></li>
        												</ul>
        											</div>
        										</div><!--post-bar end--> ';
                          }
                        }
                          ?>

									</div><!--posts-section end-->
								</div><!--main-ws-sec end-->
							</div>
							<div class="col-lg-3">
								<div >
										<img src="../images/schuman.PNG" alt="Depuis 1920" height="80%" width="80%">

								</div><!--right-sidebar end-->
							</div>
						</div>
					</div><!-- main-section-data end-->
				</div>
			</div>
		</main>
  </div>

  <footer>
    <div class="footy-sec mn no-margin">
      <div class="container">

        <p><img src="../images/copy-icon2.png" alt="">Copyright 2020</p>
        <img class="fl-rgt" src="../images/logo2.png" alt="">
      </div>
    </div>
  </footer>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/popper.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.range-min.js"></script>
<script type="text/javascript" src="../lib/slick/slick.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>
