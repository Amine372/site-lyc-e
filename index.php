
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lycée privé et UFA Robert Schuman</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="css/line-awesome.css">
<link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
<link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>


<body>


	<div class="wrapper">



		<header>
			<div class="container">
				<div class="header-data">
					<div class="logo">
						<a href="index.php" title=""><img src="images/logo.png" alt=""></a>
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
								<a href="index.php" title="">
									<span><img src="images/icon1.png" alt=""></span>
									Accueil
								</a>
							</li>
							<li>
								<a href="view/projects.html" title="">
									<span><img src="images/icon3.png" alt=""></span>
									Evénements
								</a>
							</li>
							<li>
								<a href="view/profiles.html" title="">
									<span><img src="images/icon4.png" alt=""></span>
									Profils
								</a>
								<ul>
									<li><a href="view/user-profile.html" title="">Nom d'uttilisateur</a></li>
									<li><a href="view/my-profile-feed.html" title="">L'alimentation de mon profil</a></li>
								</ul>
							</li>
							<li>
								<a href="view/jobs.html" title="">
									<span><img src="images/icon5.png" alt=""></span>
									Annonces
								</a>
							</li>

						</ul>
					</nav><!--fin de la barre de navigation-->
					<div class="menu-btn">
						<i class="fa fa-bars"></i></a>
					</div><!--fin du menu bouton-->
					<div class="user-account">
						<?php
						echo '
						<div class="user-info">
							<img src="http://via.placeholder.com/30x30" alt="">
							<a href="" title="">John</a>
							<i class="la la-sort-down"></i>
						</div>
						<div class="user-account-settingss">
							<h3><a href="#" title="">Mon Compte</a></h3>
							<ul class="us-links">
								<li><a href="view/profile-account-setting.html" title="">Paramètre du compte</a></li>
							</ul>
							<h3 class="tc"><a href="view/sign-in.html" title="">Se déconnecter</a></h3>
						</div><!--fin des paramètres du compte utilisateur-->';
						?>
					</div>
				</div><!--fin des données d'en-tête-->
			</div>
		</header><!--fin d'en-tête-->


		<section class="cover-sec">
			<img src="images/couverture.jpg" alt="" width="auto" height="280px">
		</section><!--cover-sec end-->


		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3">
								<div class="main-left-sidebar">
									<div class="user_profile">
										<div class="user-pro-img">
											<img src="images/logoschuman.png" alt="" width="130px" height="100px">
										</div><!--user-pro-img end-->




										<ul class="social_links">
											<li><a href="http://www.lyceerobertschuman.com" title=""><i class="la la-globe"></i> Site internet</a></li>
											<li><a href="https://www.facebook.com/pages/Lyc%C3%A9e-Priv%C3%A9-Robert-Schuman-%C3%A0-Dugny/388750161192043" title=""><i class="fa fa-facebook-square"></i> Page Facebook</a></li>

											<li><a href="https://www.youtube.com/watch?v=5fQu2KygRL0&feature=youtu.be" title=""><i class="fa fa-youtube"></i> YouTube</a></li>
										</ul>
									</div><!--user_profile end-->
									<div class="suggestions full-width">
										<div class="sd-title">



											<div class="suggestion-usd">
												<img src="images/pronote.png" alt="" width="30px" height="30px">
												<div class="sgt-text">
													<h4>Pronote</h4>
													<span>Logiciel</span>
												</div>

											</div>
											<div class="view-more">
												<a href="https://0931573e.index-education.net/pronote/" title="">Accéder</a>
											</div>
										</div><!--suggestions-list end-->
									</div><!--suggestions end-->
								</div><!--main-left-sidebar end-->
							</div>
							<div class="col-lg-6">
								<div class="main-ws-sec">
									<div class="user-tab-sec">
										<h3>Lycée privé et UFA Robert Schuman</h3>
										<div class="star-descp">
											<span>Depuis 1920 !</span>

										</div><!--star-descp end-->
										<div class="tab-feed">
											<ul>
												<li data-tab="feed-dd" class="active">
													<a href="#" title="">
														<img src="images/ic1.png" alt="">
														<span>Actualités</span>
													</a>
												</li>
												<li data-tab="info-dd">
													<a href="#" title="">
														<img src="images/ic2.png" alt="">
														<span>Présentation</span>
													</a>
												</li>
												<li data-tab="portfolio-dd">
													<a href="#" title="">
														<img src="images/ic3.png" alt="">
														<span>Images</span>
													</a>
												</li>
											</ul>
										</div><!-- tab-feed end-->
									</div><!--user-tab-sec end-->
									<div class="product-feed-tab current" id="feed-dd">
										<div class="posts-section">







											<div class="process-comm">

											</div><!--process-comm end-->
										</div><!--posts-section end-->
									</div><!--product-feed-tab end-->
									<div class="product-feed-tab" id="info-dd">
										<div class="user-profile-ov">
											<h3><a href="#" title="" class="overview-open">Notre Histoire</a> <a href="#" title="" class="overview-open"></a></h3>
											<p>L’établissement a été créé en 1920 par quelques ingénieurs centraliens chrétiens qui fondèrent une association pour alphabétiser des jeunes gens en difficultés : c’était la naissance de « l’Entraide Éducative ». Plus tard, s’ajouteront différentes formations professionnelles pour devenir le Lycée privé Robert Schuman (Sous contrat d’association avec l’État).</p>
										</div><!--user-profile-ov end-->

										<div class="user-profile-ov st2">
											<h3><a href="#" title="" class="esp-bx-open">Formations</a><a href="#" title="" class="esp-bx-open"></a></h3>
											<span><center><u>Aujourd’hui le lycée Robert SCHUMAN propose des formations diverses : </u></center></center><span>
												<br>
												<br>
												<center><li>3e Prépa-Pro (Découverte Professionnelle)</li>
													<br>
												<li>Bac Professionnel 3 ans Technicien d’Usinage</li>
												<br>
												<li>Bac Professionnel 3 ans Maintenance des Equipements Industriels (MEI)</li>
												<br>
													<li>Bac Professionnel 3 ans Systèmes Electroniques Numériques (SEN), option Télécommunications et réseaux informatiques</li>
													<br>
													<li>Bac Technologique STI2D options SIN et ITEC </li>
													<br>
													<li>BTS Services Informatiques aux Organisations (SIO) (Alternance uniquement la 2ème année)</li>
													<br>
												<li>BTS Conception des Processus de Réalisation de Produits (CPRP) (Ouverture rentrée 2016) (Contrat de professionnalisation sur les 2 ans)</li></center>
												<br>
												<br>
												<center><p>Soit actuellement 300 élèves, guidés par une équipe exigeante dont l’objectif est  non seulement de donner une formation professionnelle et une formation générale, mais aussi une formation humaine fondée sur la ponctualité, l’assiduité, la rigueur, le respect de soi et des autres ainsi que le sens de l’effort.</p></center>
										</div><!--user-profile-ov end-->
										<div class="user-profile-ov">
											<h3><a href="#" title="" class="emp-open">Employés</a> <a href="#" title="" class="emp-open"></a></h3>
											<span>50 employés</span>
										</div><!--user-profile-ov end-->
										<div class="user-profile-ov">
											<h3><a href="#" title="" class="lct-box-open">Adresse</a> <a href="#" title="" class="lct-box-open"></a></h3>
											<h4>France</h4>
											<p> 5 Avenue du Général de Gaulle, 93440 Dugny</p>
										</div><!--user-profile-ov end-->
									</div><!--product-feed-tab end-->
									<div class="product-feed-tab" id="portfolio-dd">
										<div class="portfolio-gallery-sec">
											<h3>Gallerie</h3>
											<div class="gallery_pf">
												<div class="row">
													<div class="col-lg-4 col-md-4 col-sm-4 col-6">
														<div class="gallery_pt">
															<img src="images/1.jpg" alt="">

														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-6">
														<div class="gallery_pt">
															<img src="images/2.jpg" alt="">

														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-6">
														<div class="gallery_pt">
															<img src="images/3.jpg" alt="">

														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-6">
														<div class="gallery_pt">
															<img src="images/4.jpg" alt="">

														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-6">
														<div class="gallery_pt">
															<img src="images/5.jpg" alt="">

														</div><!--gallery_pt end-->
													</div>

												</div>
											</div><!--gallery_pf end-->
										</div><!--portfolio-gallery-sec end-->
									</div><!--product-feed-tab end-->
								</div><!--main-ws-sec end-->
							</div>
							<div class="col-lg-3">
								<div class="right-sidebar">
									<div class="message-btn">
										<a href="#" title=""><i class="fa fa-envelope"></i> Contactez-nous</a>
									</div>
									<div class="widget widget-portfolio">
										<div class="wd-heady">
											<h3>Portfolio</h3>
											<img src="images/photo-icon.png" alt="">
										</div>
										<div class="pf-gallery">
											<ul>
												<li><a href="#" title=""><img src="images/1.jpg" alt=""></a></li>
												<li><a href="#" title=""><img src="images/2.jpg" alt=""></a></li>
												<li><a href="#" title=""><img src="images/3.jpg" alt=""></a></li>
												<li><a href="#" title=""><img src="images/4.jpg" alt=""></a></li>
												<li><a href="#" title=""><img src="images/5.jpg" alt=""></a></li>

											</ul>
										</div><!--pf-gallery end-->
									</div><!--widget-portfolio end-->
								</div><!--right-sidebar end-->
							</div>
						</div>
					</div><!-- main-section-data end-->
				</div>
			</div>
		</main>


		<footer>
			<div class="footy-sec mn no-margin">
				<div class="container">
					<ul>
						<li><a href="#" title="">Annonces</a></li>
						<li><a href="#" title="">Evenements</a></li>
						<li><a href="#" title="">Copyright Policy</a></li>
					</ul>
					<p><img src="images/copy-icon2.png" alt="">Copyright 2020</p>
					<img class="fl-rgt" src="images/logo2.png" alt="">
				</div>
			</div>
		</footer><!--footer end-->


		<div class="overview-box" id="overview-box">
			<div class="overview-edit">
				<h3>Overview</h3>
				<span>5000 character left</span>
				<form>
					<textarea></textarea>
					<button type="submit" class="save">Save</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->


		<div class="overview-box" id="experience-box">
			<div class="overview-edit">
				<h3>Experience</h3>
				<form>
					<input type="text" name="subject" placeholder="Subject">
					<textarea></textarea>
					<button type="submit" class="save">Save</button>
					<button type="submit" class="save-add">Save & Add More</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

		<div class="overview-box" id="education-box">
			<div class="overview-edit">
				<h3>Education</h3>
				<form>
					<input type="text" name="school" placeholder="School / University">
					<div class="datepicky">
						<div class="row">
							<div class="col-lg-6 no-left-pd">
								<div class="datefm">
									<input type="text" name="from" placeholder="From" class="datepicker">
									<i class="fa fa-calendar"></i>
								</div>
							</div>
							<div class="col-lg-6 no-righ-pd">
								<div class="datefm">
									<input type="text" name="to" placeholder="To" class="datepicker">
									<i class="fa fa-calendar"></i>
								</div>
							</div>
						</div>
					</div>
					<input type="text" name="degree" placeholder="Degree">
					<textarea placeholder="Description"></textarea>
					<button type="submit" class="save">Save</button>
					<button type="submit" class="save-add">Save & Add More</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

		<div class="overview-box" id="location-box">
			<div class="overview-edit">
				<h3>Location</h3>
				<form>
					<div class="datefm">
						<select>
							<option>Country</option>
							<option value="pakistan">Pakistan</option>
							<option value="england">England</option>
							<option value="india">India</option>
							<option value="usa">United Sates</option>
						</select>
						<i class="fa fa-globe"></i>
					</div>
					<div class="datefm">
						<select>
							<option>City</option>
							<option value="london">London</option>
							<option value="new-york">New York</option>
							<option value="sydney">Sydney</option>
							<option value="chicago">Chicago</option>
						</select>
						<i class="fa fa-map-marker"></i>
					</div>
					<button type="submit" class="save">Save</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

		<div class="overview-box" id="skills-box">
			<div class="overview-edit">
				<h3>Skills</h3>
				<ul>
					<li><a href="#" title="" class="skl-name">HTML</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
					<li><a href="#" title="" class="skl-name">php</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
					<li><a href="#" title="" class="skl-name">css</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
				</ul>
				<form>
					<input type="text" name="skills" placeholder="Skills">
					<button type="submit" class="save">Save</button>
					<button type="submit" class="save-add">Save & Add More</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

		<div class="overview-box" id="create-portfolio">
			<div class="overview-edit">
				<h3>Create Portfolio</h3>
				<form>
					<input type="text" name="pf-name" placeholder="Portfolio Name">
					<div class="file-submit nomg">
						<input type="file" name="file">
					</div>
					<div class="pf-img">
						<img src="http://via.placeholder.com/60x60" alt="">
					</div>
					<input type="text" name="website-url" placeholder="htp://www.example.com">
					<button type="submit" class="save">Save</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

		<div class="overview-box" id="establish-box">
			<div class="overview-edit">
				<h3>Establish Since</h3>
				<form>
					<div class="daty">
						<input type="text" name="establish" placeholder="Select Date" class="datepicker">
						<i class="fa fa-calendar"></i>
					</div>
					<button type="submit" class="save">Save</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->


		<div class="overview-box" id="total-employes">
			<div class="overview-edit">
				<h3>Total Employees</h3>
				<form>
					<input type="text" name="employes" placeholder="Type in numbers">
					<button type="submit" class="save">Save</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->



	</div><!--theme-layout end-->



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/flatpickr.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
