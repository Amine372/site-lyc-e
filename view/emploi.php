
<!DOCTYPE html>
<?php
    session_start();

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
                    <div class="col-md-6 bg-img rounded-left m-h-60 d-none d-sm-block" style="background-image: url('https://images.unsplash.com/photo-1538943963832-856b555cd29b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80')">

                    </div>
                    <div class="col-md-6 py-5 px-sm-5 my-auto ">

                        <h2 class="pt-sm-3">Ajouter une annonce</h2>
                        <br>
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Entrer votre nom">
								<br>
							 <input type="text" class="form-control"   placeholder="Entrer votre adresse mail">
							 <br>
                                <input type="text" class="form-control"  a placeholder="Entrer le nom de poste">
								<br>
								          <input type="text" rows="6" class="form-control"  placeholder="Description de l'annonce">

                            </div>

                            <button type="submit" class="btn btn-cstm-dark btn-block btn-cta" data-dismiss="modal" aria-label="Close">Ajouter une annonce</button>
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
										<h3>Annonces</h3></div>
										<div><center><a  class="ajouteremploi" data-toggle="modal" data-target="#demoModal" >Ajouter une annonce</a></center>
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
												<h3>Développeur Wordpress</h3>
												<ul class="job-dt">
													<li><a><b>Temps partiel</b></a></li>
												</ul>
												<p>Bonjour, je suis à la recherche d'une entreprise dans le secteur informatique qui puisse m'accueillir pour un contrat d'apprentissage ou de professionnalisation</p>
												<hr>
												<center><ul class="skill-tags">
													<li><p>HTML</p></li>
													<li><p>PHP</p></li>
													<li><p>CSS</p></li>
													<li><p>Javascript</p></li>
													<li><p>Wordpress</p></li>
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
			</div>
		</main>




		<div class="post-popup pst-pj">
			<div class="post-project">
				<h3>Post a project</h3>
				<div class="post-project-fields">
					<form>
						<div class="row">
							<div class="col-lg-12">
								<input type="text" name="title" placeholder="Title">
							</div>
							<div class="col-lg-12">
								<div class="inp-field">
									<select>
										<option>Category</option>
										<option>Category 1</option>
										<option>Category 2</option>
										<option>Category 3</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<input type="text" name="skills" placeholder="Skills">
							</div>
							<div class="col-lg-12">
								<div class="price-sec">
									<div class="price-br">
										<input type="text" name="price1" placeholder="Price">
										<i class="la la-dollar"></i>
									</div>
									<span>To</span>
									<div class="price-br">
										<input type="text" name="price1" placeholder="Price">
										<i class="la la-dollar"></i>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<textarea name="description" placeholder="Description"></textarea>
							</div>
							<div class="col-lg-12">
								<ul>
									<li><button class="active" type="submit" value="post">Post</button></li>
									<li><a href="#" title="">Cancel</a></li>
								</ul>
							</div>
						</div>
					</form>
				</div><!--post-project-fields end-->
				<a href="#" title=""><i class="la la-times-circle-o"></i></a>
			</div><!--post-project end-->
		</div><!--post-project-popup end-->

		<div class="post-popup job_post">
			<div class="post-project">
				<h3>Post a job</h3>
				<div class="post-project-fields">
					<form>
						<div class="row">
							<div class="col-lg-12">
								<input type="text" name="title" placeholder="Title">
							</div>
							<div class="col-lg-12">
								<div class="inp-field">
									<select>
										<option>Category</option>
										<option>Category 1</option>
										<option>Category 2</option>
										<option>Category 3</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<input type="text" name="skills" placeholder="Skills">
							</div>
							<div class="col-lg-6">
								<div class="price-br">
									<input type="text" name="price1" placeholder="Price">
									<i class="la la-dollar"></i>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="inp-field">
									<select>
										<option>Full Time</option>
										<option>Half time</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<textarea name="description" placeholder="Description"></textarea>
							</div>
							<div class="col-lg-12">
								<ul>
									<li><button class="active" type="submit" value="post">Post</button></li>
									<li><a href="#" title="">Cancel</a></li>
								</ul>
							</div>
						</div>
					</form>
				</div><!--post-project-fields end-->
				<a href="#" title=""><i class="la la-times-circle-o"></i></a>
			</div><!--post-project end-->
		</div><!--post-project-popup end-->


	</div><!--theme-layout end-->



<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/popper.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.range-min.js"></script>
<script type="text/javascript" src="../lib/slick/slick.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/lunar.js"></script>

<script src="assets/js/demo.js"></script>
</body>
</html>
