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


<!-- Modal Ends -->

                    <div >

    
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


 <form action="../traitement/traitement_reservation.php" method="POST">

    <div class="form-group">
        <label for="exampleInputEmail1">Votre nom</label>
        <input type="text" name="nom" value="<?php if(isset($_SESSION['nom'])){
                                                      echo $_SESSION['nom'];
                                                   }?>"
         class="form-control" id="exampleInputEmail1" placeholder="Votre nom" / required>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Adresse mail</label>
        <input type="mail" name="mail" value="<?php if(isset($_SESSION['email'])){
                                                echo $_SESSION['email'];
                                              }?>"
        class="form-control" id="exampleInputEmail1" placeholder="Votre adresse email" / required>
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

<div class="demo-area">

    <center><button style="margin-top: 10px;" type="button"  class="btn btn-dark btn-cta" data-toggle="modal" data-target="#demoModal">
        Ajouter une offre d'emloi
    </button></center>
</div>
<br>
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
                            echo "0 annonces disponibles";
                          }
                          else
                          {
                            foreach ($donnee as $clef)
                            {
                              echo '  <div class="post-bar">
                              <div class="post_topbar">
                                <div class="usy-dt">
                                  <img src="../images/logoschuman.png" width="50px" height="50px" alt="">
                                  <div class="usy-name">
                                    <h3> '.$clef['nom'].'</h3>
                                    <span><img src="images/clock.png" alt="">'.$clef['mail'].'</span>
                                  </div>
                                </div>
                              </div>
                            <div class="epi-sec">
                                <ul class="descp">
                                  <li><img src="images/icon8.png" alt=""></li>
                                </ul>
                                <ul class="bk-links">
                                  <li><a href="messages.php" title=""><i class="la la-envelope"></i></a></li>
                                
                                </ul>
                              </div>
                              <div class="job_descp">
                               <h4><b>'.$clef['poste'].'</b></h4>
                               <br>
                                <p>'.$clef['description_poste'].'</p>
                               
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
        <footer>
  <div class="footy-sec mn no-margin">
    <div class="container">

      <p><img src="../images/copy-icon2.png" alt="">Copyright 2020</p>
      <img class="fl-rgt" src="../images/logo2.png" alt="">
    </div>
  </div>
</footer>
      </div>

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/popper.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.range-min.js"></script>
<script type="text/javascript" src="../lib/slick/slick.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>
