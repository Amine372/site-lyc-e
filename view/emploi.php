
<!DOCTYPE html>
<?php
    session_start();
	require_once '../bdd/connexion.php';
?>

<html>
<head>
<meta charset="UTF-8">
<title>Emplois</title>
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
    <!-- Lunar CSS -->
    <link rel="stylesheet" href="assets/css/lunar.css">
    <link rel="stylesheet" href="assets/css/demo.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,600,700,800,900" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/img/lunar.png"/>
    <link rel="icon" href="assets/img/lunar.png" type="image/png" sizes="16x16">
</head>
<!-- Modal -->
<div class="modal fade   "  id="demoModal"  tabindex="-1" role="dialog"
     aria-labelledby="demoModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg  " role="document">
        <div class="modal-content">

            <div class="container-fluid">
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="row">
                    <div class="col-md-6 bg-img rounded-left m-h-60 d-none d-sm-block" style="">

                    </div>
                    <div class="col-md-6 py-5 px-sm-5 my-auto ">

                        <h2 class="pt-sm-3">Ajouter une annonce</h2>
                        <br>
                        <form action="../class/Manager/manager_job.php" method="POST">
                            <div class="form-group">
                                <input type="text" name="nom" class="form-control"  placeholder="Entrer votre nom" required>
								<br>
							 <input type="email" name="email" class="form-control"   placeholder="Entrer votre adresse éléctronique" required>
							 <br>
                                <input type="text" name="poste" class="form-control"  placeholder="Entrer le nom de poste" required>
								<br>
							 <textarea name="description_poste" class="form-control"  placeholder="Description de l'annonce" required ></textarea>

                            </div>

                            <button type="submit" class="btn btn-cstm-dark btn-block btn-cta" >Ajouter une annonce</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Ends -->



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
								<a href="profils.php" title="">
									<span><img src="../images/icon4.png" alt=""></span>
									Profils
								</a>
								<ul>
									<li><a href="profil_utilisateur.php" title="">Nom d'utilisateur</a></li>
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
  							<h3><a href="#" title="">Mon Compte</a></h3>
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

		<div class="search-sec">
			<div class="container">

			</div>
		</div><!--search-sec end-->


		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3">
								<div class="filter-secs">
									<div class="filter-heading">
										<h3>Annonces</h3>
											</div>
										<div >
										<center><a href="" class="ajouteremploi" data-toggle="modal" data-target="#demoModal" >Ajouter une annonce</a></center>
										<br>
										<br>
										</div>



								</div><!--filter-secs end-->
							</div>
							<div class="col-lg-8">
								<div class="main-ws-sec">
									<div class="posts-section">
										<div class="post-bar">
											<div class="post_topbar">
												<div class="usy-dt">
													<img src="https://media-exp1.licdn.com/dms/image/C4D03AQGpcnm7VM_HFA/profile-displayphoto-shrink_400_400/0?e=1609372800&v=beta&t=F_FqQysnYDYm6NoLFSVpZb9JIHil4Mu3Jm6GwOlXIrY" width="50px" height="50px" alt="">
													<div class="usy-name">
														<h3>Quentin Lignani</h3>
													</div>
												</div>

											</div>
											<div class="epi-sec">
												<ul class="descp">
													<li><img src="../images/icon9.png" alt=""><span>Paris</span></li>
												</ul>

											</div>
											
											<div class="job_descp">
												<ul class="job-dt">
													 <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
													<h3><td><?php echo htmlspecialchars($row['nom']); ?></td></h3>
													<li><a><b>Temps partiel</b></a></li>
												</ul>
												    <?php
                    // on fait une boucle pour afficher tous les évenement
                    $get_event = new Manager_Evenements;
                      // $donnee doit être le tableau avec tous les evennements
                          $donnee= $get_event->Evenements();
                          if(is_null($donnee)){
                            echo "Aucun évènement";
                          }
                          else{
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

										  		 <hr>
												<center><ul class="skill-tags">
													<li>HTML</li>
													<li>PHP</li>
													<li>CSS</li>
													<li>Javascript</li>
													<li>Wordpress</li>
												</ul></center>

											</div>

										</div><!--post-bar end-->

										</div><!--process-comm end-->
									</div><!--posts-section end-->
								</div><!--main-ws-sec end-->
							</div>

						</div>
					</div><!-- main-section-data end-->
				</div>
		</main>



	</div><!--theme-layout end-->

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
