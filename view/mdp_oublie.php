
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
							<CENTER>
                <span>Mot de passe oublié</span><br>
								<br>

                <form method="post" action="../traitement/traitement_mdp_oublie.php">
                  <div class="row">
                    <div class="col-lg-12 no-pdd">
                      <div class="sn-field">
                        <input type="text" name="email" required placeholder="Adresse éléctronique" style="width: 50%;">
												<br>
		                      <button type="submit" value="submit">Se connecter</button>
                      </div><!--sn-field end-->
                    </div>
                   </div>
                </form>
              </CENTER>
            </div>
          </div>

          </div>

                            <!--gestion d'erreur-->
                            <?php
                            session_start();
                            if(isset($_SESSION['erreur_mail'])){
                              if($_SESSION['erreur_mail'] == 1) {
                                echo "E-mail non existant";
                                $_SESSION['erreur_mail'] = 0;
                              }
                            }
                            ?>


			</div><!--signin-popup end-->
			<div class="footy-sec">
				<div class="container">


					<p><img src="../images/copy-icon.png" alt="">Copyright 2020.</p>
				</div>
			</div><!--footy-sec end-->
		</div><!--sign-in-page end-->


	</div><!--theme-layout end-->



<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/popper.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../lib/slick/slick.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>