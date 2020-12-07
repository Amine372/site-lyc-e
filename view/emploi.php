<?php
session_start();
?>
<?php
 require '../class/Manager/manager_reservation.php';
  ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Offres d'emploi</title>
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


<!-- Modal Ends -->

                    <div >

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
    <div class="demo-area">
    <center><button  type="button"  class="btn btn-dark btn-cta" data-toggle="modal" data-target="#demoModal">
        Ajouter une offre d'emloi
    </button></center>
</div>
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
                    <div class="col-md-6 bg-img rounded-left m-h-60 d-none d-sm-block" style="background-image: url('https://www.cerfal-apprentissage.fr/sites/default/files/ckeditor_files/logo_robert_schuman.jpg')">

                    </div>
                    <div class="col-md-6 py-5 px-sm-5 my-auto ">


 <form action="../class/Manager/manager_reservation.php" method="POST">

    <div class="form-group">
        <label for="exampleInputEmail1">Votre nom et prénom</label>
        <input type="text" name="nom" class="form-control" id="exampleInputEmail1" placeholder="Votre nom" / required>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Adresse mail</label>
        <input type="mail" name="mail" class="form-control" id="exampleInputEmail1" placeholder="Votre adresse email" / required>
    </div>

    <div class="form-group">
        <label for="">Nom du poste</label>
        <input type="text" name="poste" class="form-control" id="exampleInputEmail1" placeholder="Nom du poste"/ required>
    </div>


    <div class="form-group">
        <label for="">Description du poste</label>
        <input type="text" name="description_poste" class="form-control" id="exampleInputEmail1" placeholder="Description du poste" / required>
    </div>

<br>
    <button type="submit" class="btn btn-cstm-dark btn-block btn-cta">Ajouter</button>

</form>
                </div>
            </div>
        </div>
    </div>
</div>

  </div>

      <div class="main-section">
        <div class="container">
          <div class="main-section-data">
            <div class="row">

              <div class="col-lg-8" style="padding-left:20%">

                <div class="main-ws-sec">
                  <div class="posts-section">
                    <?php
                    // on fait une boucle pour afficher tous les évenement
                    $get_event = new manager_annonce;
                      // $donnee doit être le tableau avec tous les evennements
                          $donnee= $get_event->Annonces();
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
                                    <h3> '.$clef['nom'].' '.$clef['poste'].'</h3>
                                    <span><img src="images/clock.png" alt="">'.$clef['mail'].'</span>
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
                                <h3>'.$clef['ville'].'</h3>
                                <p>'.$clef['poste'].'</p>
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

            </div>
          </div><!-- main-section-data end-->
        </div>
      </div>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/popper.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.range-min.js"></script>
<script type="text/javascript" src="../lib/slick/slick.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>
