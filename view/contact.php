<!DOCTYPE html>
<?php
    session_start();

?>
<html>
<head>
<meta charset="UTF-8">
<title>Contact</title>
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


</head>


<body>
<div class="wrapper">
  <header>
    <div class="container">
      <div class="header-data">
        <div class="logo">
          <a href="../.html" title=""><img src="../images/logo.png" alt=""></a>
        </div><!--fin du logotype-->
        <div class="search-bar">
          <form>
            <input type="text" name="search" placeholder="Recherchez...">
            <button type="submit"><i class="la la-search"></i></button>
          </form>
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
              <a href="profils.php" title="">
                <span><img src="../images/icon4.png" alt=""></span>
                Profils
              </a>
              <ul>
                <li><a href="profil_utilisateur.php" title="">Nom d'uttilisateur</a></li>
                <li><a href="my-profile-feed.html" title="">L'alimentation de mon profil</a></li>
              </ul>
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

          </ul>
        </nav><!--fin de la barre de navigation-->
        <div class="menu-btn">
          <a href="#" title=""><i class="fa fa-bars"></i></a>
        </div><!--fin du menu bouton-->
        <div class="user-account">
          <?php
          if (isset($_SESSION['nom'])) {
            echo '<div class="user-info">
              <img src="http://via.placeholder.com/30x30" alt="">
              <a href="#" title="">'.$_SESSION['nom'].'</a>
              <i class="la la-sort-down"></i>
            </div>
            <div class="user-account-settingss">
              <h3>Mon Compte</h3>
              <ul class="us-links">
                <li><a href="parametres_du_compte.php" title="">Paramètre du compte</a></li>
              </ul>
              <h3 class="tc"><a href="../traitement/deconnexion.php" title="">Se déconnecter</a></h3>
            </div><!--fin des paramètres du compte utilisateur-->';
          }
          else {
            echo '<div class="user-info">
              <a href="#" title="">Connectez vous</a>
              <i class="la la-sort-down"></i>
            </div>
            <div class="user-account-settingss">
              <h3><a href="connexion.php" title="">Connexion</a></h3>
              <ul class="us-links">
                <li><a href="inscription.php" title="">Inscription</a></li
              </ul>
            </div><!--fin des paramètres du compte utilisateur-->';
          }
          ?>
        </div>
      </div><!--fin des données d'en-tête-->
    </div>
  </header><!--fin d'en-tête-->
<section class="cover-sec">
			<img src="../images/couverture.jpg" alt="" width="auto" height="280px">
		</section><!--cover-sec end-->
		<div class="suggestions full-width">
										<div class="sd-title">




											<div class="view-more">
												<a title="">Mail :</a>

												<u><a href="mailto:administration@lyceerobertschuman.com">administration@lyceerobertschuman.com</u>
												<br>
												<br>
												<a title="">Tel :</a>
									<u><a href="tel:+331 48 37 74 26" > 01 48 37 74 26</a></u>
									<br>
												<br>
												<a title="">Adresse :</a>
												<u><a href="https://www.google.fr/maps/place/5+Avenue+du+G%C3%A9n%C3%A9ral+de+Gaulle,+93440+Dugny/@48.9493039,2.4132023,17z/data=!3m1!4b1!4m5!3m4!1s0x47e66b9c6b0800f7:0x2ea7ca67c7f41e11!8m2!3d48.9493004!4d2.415391">5 avenue du Général de Gaulle - 93440 Dugny</a></u>
											</div>
										</div><!--suggestions-list end-->
									</div><!--suggestions end-->

		<main>
			<center><div class="main-section">
				<div class="container">
					<center><div class="main-section-data">


                      <form id="contact_form" class="contact-form" action="../phpmailer/cible_contact.php" method="post">

                        <div class="messages"></div>

                        <div class="controls two-columns">
                          <div class="fields clearfix">
                            <div class="left-column">
                              <div class="form-group form-group-with-icon">
                                <input id="form_name" type="text" name="nom" class="form-control" placeholder="Nom" required="required" data-error="Nom obligatoire">
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Adresse email" required="required" data-error="Email non valide">
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_subject" type="text" name="sujet" class="form-control" placeholder="Sujet" required="required" data-error="Le sujet est requis">
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                            <div class="right-column">
                              <div class="form-group form-group-with-icon">
                                <textarea id="form_message" name="message" class="form-control" placeholder="Votre message" rows="6" required="required" data-error="Merci de bien vouloir écrire votre message"></textarea>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          </div>

                          <input type="submit" class="buttonsend" value="Envoyer le message">
                        </div>
                      </form>



					</div></center><!-- main-section-data end-->
				</div>
			</div>
		</main>

		<div class="container">
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2620.219618889888!2d2.4132023156387215!3d48.94930390225513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66b9c6b0800f7%3A0xa35833adc1739e08!2sLyc%C3%A9e%20Robert%20Schuman!5e0!3m2!1sfr!2sfr!4v1603789401466!5m2!1sfr!2sfr" width="700" height="350" frameborder="0" style="border:5;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></center>
</div>
		<footer>
			<div class="footy-sec mn no-margin">
				<div class="container">
					<p><img src="images/copy-icon2.png" alt="">Copyright 2020</p>
					<img class="fl-rgt" src="images/logo2.png" alt="">
				</div>
			</div>
		</footer><!--footer end-->


<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/popper.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.range-min.js"></script>
<script type="text/javascript" src="../lib/slick/slick.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>
