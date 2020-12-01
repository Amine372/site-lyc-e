<?php
require '../class/Modele/Model_Message.php';
require '../class/Manager/Manager_Message.php';
session_start();
if(!isset($_SESSION['email']))
{
	header('location: ../view/connexion.php');
}
if(isset($_SESSION['discisssion_active'])){
	$_POST['discussion_active'] = $_SESSION['discisssion_active'];
	unset($_SESSION['discisssion_active']);
}
$first = true;
$manager = new Manager_Message;

$discussion_list = $manager->get_discussion_list($_SESSION['email']);


$discussion = $manager->get_discussion($_SESSION['email']);

$liste_user = $manager->get_liste_user($_SESSION['email']);

if(isset($_POST['discussion_active']))
{
	$discussion_id = $_POST['discussion_active'];
	$first = false;
	$messages = $manager->get_messages($discussion_id);
}
else
{
	$discussion_id = $discussion_list[0]['id'];
	$messages = $manager->get_messages($discussion_id);
}
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Vos messages</title>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>

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



		<section style="padding-bottom: 20px;" class="messasign-in.php">
			<div class="container">
				<div class="messages-sec">
					<div class="row">
						<div class="col-lg-3 col-md-12 no-pdd">
							<div class="msgs-list">
								<div class="msg-title">
									<h3>Messages</h3>

								</div><!--msg-title end-->
								<div class="messages-list">
									<ul>
										<form method="post" action="">
										<?php
										$i = 0;
										if(!is_null($discussion))
										{
											foreach ($discussion as $key_disc)
											{
												if($first == true)
												{
													echo '
														<li class="active">
															<button class="button-discussion" type="submit" value="'.$discussion_list[$i]['id'].'" name="discussion_active">
																<div class="usr-msg-details">
																	<h3>'.$key_disc[0]['nom'].' '.$key_disc[0]['prenom'].'</h3>
																</div><!--usr-msg-details end-->
															</button>
														</li>';
													$nom_interloq = $key_disc[0]['nom'];
													$prenom_interloq = $key_disc[0]['prenom'];
													$id_interloq = $key_disc[0]['id'];
													$first = false;
												}
												elseif(isset($_POST['discussion_active']) AND $discussion_list[$i]['id'] == $_POST['discussion_active'])
												{
													echo '
														<li class="active">
															<button class="button-discussion" type="submit" value="'.$discussion_list[$i]['id'].'" name="discussion_active">
																<div class="usr-msg-details">
																	<h3>'.$key_disc[0]['nom'].' '.$key_disc[0]['prenom'].'</h3>
																</div><!--usr-msg-details end-->
															</button>
														</li>';
													$nom_interloq = $key_disc[0]['nom'];
													$prenom_interloq = $key_disc[0]['prenom'];
													$id_interloq = $key_disc[0]['id'];
												}
												else
												{
													echo '
													<li>
														<button class="button-discussion" type="submit" value="'.$discussion_list[$i]['id'].'" name="discussion_active">
															<div class="usr-msg-details">
																<h3>'.$key_disc[0]['nom'].' '.$key_disc[0]['prenom'].'</h3>
															</div><!--usr-msg-details end-->
														</button>
													</li>';
												}
												$i = $i + 1;
											}
										}

										 ?>

									 </form>

									 <li>
											 <div class="usr-msg-details" style="padding: 10px;">
												 <div class="usr-mg-info">
													 <p>Nouvelle discussion avec :</p>
													 <form method="post" action="../traitement/traitement_discussion.php">
														<select id="select-state"  placeholder="Nom prénom" name="id">
															<option value="">Nom prénom</option>
															<?php
																if(!is_null($liste_user))
																{
																	foreach ($liste_user as $user)
																	{
																		echo '<option value="'.$user['id'].'">'.$user['nom'].' '.$user['prenom'].'</option>' ;
																	}
																}

															 ?>
														</select>
														<div class="mf-field">
															<button style="width: 80px; height: 34px; margin-left: 0px;" type="submit">Créer</button>
														</div>
													</form>
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
										<div class="usr-mg-info">
											<h3>
											<?php
												if(isset($nom_interloq)){
													echo $nom_interloq.' '.$prenom_interloq;
												};
											 ?>
										 	</h3>
										</div><!--usr-mg-info end-->
									</div>
								</div><!--message-bar-head end-->

								<div class="messages-line">
								<?php
								if(!is_null($messages))
								{
									foreach ($messages as $key)
									{
										if($key['id_utilisateur'] == $id_interloq)
										{
											echo
											'<div class="main-message-box st3">
												<div class="message-dt st3">
													<div class="message-inner-dt">
														<p>'.$key['message'].'</p>
													</div><!--message-inner-dt end-->
													<span>'.$key['date'].'</span>
												</div><!--message-dt end-->
												<div class="messg-usr-img">
													'.$nom_interloq.'
												</div><!--messg-usr-img end-->
											</div>';
										}

										else
										{
											echo
											'<div class="main-message-box ta-right">
												<div class="message-dt">
													<div class="message-inner-dt">
														<p>'.$key['message'].'</p>
													</div><!--message-inner-dt end-->
													<span>'.$key['date'].'</span>
												</div><!--message-dt end-->
												<div class="messg-usr-img">
													'.$_SESSION['nom'].'
												</div><!--messg-usr-img end-->
											</div><!--main-message-box end-->';
										}
									}
								}

								 ?>


								</div><!--messages-line end-->
								<div class="message-send-area">
									<form method="post" action="../traitement/traitement_message.php">
										<div class="mf-field">
											<input type="hidden" name="discussion_id" value="<?php echo $discussion_id; ?>">
											<input type="text" name="message" placeholder="Votre message" required>
											<button type="submit">Envoyer</button>
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

					<p><img src="../images/copy-icon2.png" alt="">Copyright 2020</p>
					<img class="fl-rgt" src="../images/logo2.png" alt="">
				</div>
			</div>
		</footer>

	</div><!--theme-layout end-->


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="../js/popper.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="../lib/slick/slick.min.js"></script>
<script type="text/javascript" src="../js/scrollbar.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script>
$(document).ready(function ()
{
		$('select').selectize({
				sortField: 'text'
		});
});
</script>

</body>
</html>
