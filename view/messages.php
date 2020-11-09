<?php
session_start();
if(!isset($_SESSION['email'])){
	header('location: ../view/connexion.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>WorkWise Html Template</title>
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
						<a href="../index.php" title=""><img src="../images/logo.png" alt=""></a>
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
						if (isset($_SESSION['nom'])) {
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
						else {
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



		<section class="messasign-in.php">
			<div class="container">
				<div class="messages-sec">
					<div class="row">
						<div class="col-lg-4 col-md-12 no-pdd">
							<div class="msgs-list">
								<div class="msg-title">
									<h3>Messages</h3>

								</div><!--msg-title end-->
								<div class="messages-list">
									<ul>
										<li class="active">
											<div class="usr-msg-details">
												<div class="usr-ms-img">
													<img src="http://via.placeholder.com/50x50" alt="">
												</div>
												<div class="usr-mg-info">
													<h3>John Doe</h3>
													<p></p>
												</div><!--usr-mg-info end-->
											</div><!--usr-msg-details end-->
										</li>
										<li>
											<div class="usr-msg-details">
												<div class="usr-ms-img">
													<img src="http://via.placeholder.com/50x50" alt="">
												</div>
												<div class="usr-mg-info">
													<h3>John Doe</h3>
													<p></p>
												</div><!--usr-mg-info end-->
											</div><!--usr-msg-details end-->
										</li>
									</ul>
								</div><!--messages-list end-->
							</div><!--msgs-list end-->
						</div>
						<div class="col-lg-8 col-md-12 pd-right-none pd-left-none">
							<div class="main-conversation-box">
								<div class="message-bar-head" style="position:static;">
									<div class="usr-msg-details">
										<div class="usr-ms-img">
											<img src="http://via.placeholder.com/50x50" alt="">
										</div>
										<div class="usr-mg-info">
											<h3>John Doe</h3>
										</div><!--usr-mg-info end-->
									</div>
									<a href="#" title=""><i class="fa fa-ellipsis-v"></i></a>
								</div><!--message-bar-head end-->
								<div class="messages-line">
									<div class="main-message-box ta-right">
										<div class="message-dt">
											<div class="message-inner-dt">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
											</div><!--message-inner-dt end-->
											<span>Sat, Aug 23, 1:08 PM</span>
										</div><!--message-dt end-->
										<div class="messg-usr-img">
											John
										</div><!--messg-usr-img end-->
									</div><!--main-message-box end-->
									<div class="main-message-box st3">
										<div class="message-dt st3">
											<div class="message-inner-dt">
												<p>Cras ultricies ligula.<img src="../images/smley.png" alt=""></p>
											</div><!--message-inner-dt end-->
											<span>5 minutes ago</span>
										</div><!--message-dt end-->
										<div class="messg-usr-img">
											John
										</div><!--messg-usr-img end-->
									</div>
									<div class="main-message-box ta-right">
										<div class="message-dt">
											<div class="message-inner-dt">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
											</div><!--message-inner-dt end-->
											<span>Sat, Aug 23, 1:08 PM</span>
										</div><!--message-dt end-->
										<div class="messg-usr-img">
											<img src="http://via.placeholder.com/50x50" alt="">
										</div><!--messg-usr-img end-->
									</div><!--main-message-box end-->
									<div class="main-message-box st3">
										<div class="message-dt st3">
											<div class="message-inner-dt">
												<p>Cras ultricies ligula.<img src="../images/smley.png" alt=""></p>
											</div><!--message-inner-dt end-->
											<span>5 minutes ago</span>
										</div><!--message-dt end-->
									</div>
									<div class="main-message-box ta-right">
										<div class="message-dt">
											<div class="message-inner-dt">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
											</div><!--message-inner-dt end-->
											<span>Sat, Aug 23, 1:08 PM</span>
										</div><!--message-dt end-->
										<div class="messg-usr-img">
											<img src="http://via.placeholder.com/50x50" alt="">
										</div><!--messg-usr-img end-->
									</div><!--main-message-box end-->
									<div class="main-message-box st3">
										<div class="message-dt st3">
											<div class="message-inner-dt">
												<p>Cras ultricies ligula.<img src="../images/smley.png" alt=""></p>
											</div><!--message-inner-dt end-->
											<span>5 minutes ago</span>
										</div><!--message-dt end-->
									</div>
									<div class="main-message-box ta-right">
										<div class="message-dt">
											<div class="message-inner-dt">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
											</div><!--message-inner-dt end-->
											<span>Sat, Aug 23, 1:08 PM</span>
										</div><!--message-dt end-->
										<div class="messg-usr-img">
											<img src="http://via.placeholder.com/50x50" alt="">
										</div><!--messg-usr-img end-->
									</div><!--main-message-box end-->
									<div class="main-message-box st3">
										<div class="message-dt st3">
											<div class="message-inner-dt">
												<p>Cras ultricies ligula.<img src="../images/smley.png" alt=""></p>
											</div><!--message-inner-dt end-->
											<span>5 minutes ago</span>
										</div><!--message-dt end-->
									</div>
									<div class="main-message-box ta-right">
										<div class="message-dt">
											<div class="message-inner-dt">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
											</div><!--message-inner-dt end-->
											<span>Sat, Aug 23, 1:08 PM</span>
										</div><!--message-dt end-->
										<div class="messg-usr-img">
											<img src="http://via.placeholder.com/50x50" alt="">
										</div><!--messg-usr-img end-->
									</div><!--main-message-box end-->
									<div class="main-message-box st3">
										<div class="message-dt st3">
											<div class="message-inner-dt">
												<p>Cras ultricies ligula.<img src="../images/smley.png" alt=""></p>
											</div><!--message-inner-dt end-->
											<span>5 minutes ago</span>
										</div><!--message-dt end-->
									</div>

								</div><!--messages-line end-->
								<div class="message-send-area">
									<form>
										<div class="mf-field">
											<input type="text" name="message" placeholder="Type a message here">
											<button type="submit">Send</button>
										</div>
									</form>
								</div><!--message-send-area end-->
							</div><!--main-conversation-box end-->
						</div>
					</div>
				</div><!--messages-sec end-->
			</div>
		</section><!--messages-page end-->



		<footer>
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
					<p><img src="../images/copy-icon2.png" alt="">Copyright 2018</p>
					<img class="fl-rgt" src="../images/logo2.png" alt="">
				</div>
			</div>
		</footer>

	</div><!--theme-layout end-->



<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/popper.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="../lib/slick/slick.min.js"></script>
<script type="text/javascript" src="../js/scrollbar.js"></script>
<script type="text/javascript" src="../js/script.js"></script>

</body>
</html>
