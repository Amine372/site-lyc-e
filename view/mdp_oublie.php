
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>UFA Robert Schuman | Connexion</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="../css/animate.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/line-awesome.css">
<link rel="stylesheet" type="text/css" href="../css/line-awesome-font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../lib/slick/slick.css">
<link rel="stylesheet" type="text/css" href="../lib/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/responsive.css">
</head>


<body class="sign-in" style="text-align: center;">


	<div class="wrapper">


		<div class="sign-in-page">
			<div class="signin-popup">
        <div class="sign_in_sec current" id="tab-1">

          <div style="float: left; width: 100%; background-color: #fff;border-radius: 4px;">
            <div style="margin-top:25%;margin-bottom:25%; font-size:24px">
							<center>
                <span>Mot de passe oublié</span><br>
								<br>

                <form method="post" action="../traitement/traitement_mdp_oublie.php">
                  <div class="row">
                    <div class="col-lg-12 no-pdd">
                      <div class="sn-field">
                        <input type="mail" name="email" required placeholder="Adresse éléctronique" style="width: 50%;">
												<br>
												<?php
												session_start();
												if(isset($_SESSION['erreur_mail'])){
													if($_SESSION['erreur_mail'] == 1) {
														echo "<div style='color: #e5200f'>E-mail non existant</div>";
														$_SESSION['erreur_mail'] = 0;
													}
												}
												?>
		                      <button type="submit" value="submit">Confirmer</button>
                      </div><!--sn-field end-->

                    </div>
                   </div>
                </form>
								<!--gestion d'erreur-->

              </center>
            </div>
          </div>

          </div>


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
<script type="text/javascript" src="../lib/slick/slick.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>
