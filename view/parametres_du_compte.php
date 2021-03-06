<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Paramètres du compte</title>
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


    <section class="profile-account-setting">
      <div class="container">
        <div class="account-tabs-setting">
          <div class="row">
            <div class="col-lg-3">
              <div class="acc-leftbar">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-status-tab" data-toggle="tab" href="#nav-status" role="tab" aria-controls="nav-status" aria-selected="true"><i class="la la-user"></i>Modifier son profil</a>
                  <a class="nav-item nav-link" id="nav-password-tab" data-toggle="tab" href="#nav-password" role="tab" aria-controls="nav-password" aria-selected="false"><i class="fa fa-lock"></i>Modifier son mot de passe</a>
                </div>
              </div><!--acc-leftbar end-->
            </div>
            <div class="col-lg-9">
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-status" role="tabpanel" aria-labelledby="nav-status-tab">
                  <div class="acc-setting">
                    <h3>Mon Compte</h3>
                    <form method="post" action="../traitement/traitement_modif.php">
                      <div class="cp-field">
                        <h5>Nom</h5>
                        <div class="cpp-fiel">
                          <input type="text" name="nom" placeholder="Nom" value="<?php echo $_SESSION['nom']; ?>" required>
                        </div>
                      </div>
                      <div class="cp-field">
                        <h5>Prénom</h5>
                        <div class="cpp-fiel">
                          <input type="text" name="prenom" placeholder="Prénom" value="<?php echo $_SESSION['prenom']; ?>" required>
                        </div>
                      </div>
                      <div class="save-stngs pd2">
                        <ul>
                          <li><button type="submit">Sauvegarder</button></li>

                          <?php if(isset($_SESSION['succes_modif']))
                          {
                            echo $_SESSION['succes_modif'];
                            unset($_SESSION['succes_modif']);
                          } ?>

                        </ul>
                      </div><!--save-stngs end-->
                    </form>
                  </div><!--acc-setting end-->
                </div>
                <div class="tab-pane fade" id="nav-password" role="tabpanel" aria-labelledby="nav-password-tab">
                  <div class="acc-setting">
                    <h3>Changement de mot de passe</h3>
                    <form method="post" action="../traitement/traitement_modif_mdp.php">
                      <div class="cp-field">
                        <h5>Ancien mot de passe</h5>
                        <div class="cpp-fiel">
                          <input type="password" name="amdp" placeholder="" required>
                          <i class="fa fa-lock"></i>
                        </div>
                      </div>
                      <div class="cp-field">
                        <h5>Nouveau mot de passe</h5>
                        <div class="cpp-fiel">
                          <input type="password" name="mdp" placeholder="" required>
                          <i class="fa fa-lock"></i>
                        </div>
                      </div>
                      <div class="cp-field">
                        <h5>Retapez le mot de passe</h5>
                        <div class="cpp-fiel">
                          <input type="password" name="confirmmdp" placeholder="" required>
                          <i class="fa fa-lock"></i>
                        </div>
                      </div>
                      <div class="save-stngs pd2">
                        <ul>
                          <li><button type="submit">Enregistrer</button></li>
                          <?php if(isset($_SESSION['message_mdp']))
                          {
                            echo $_SESSION['message_mdp'];
                            unset($_SESSION['message_mdp']);
                          } ?>
                        </ul>
                      </div><!--save-stngs end-->
                    </form>
                  </div><!--acc-setting end-->
                </div>
              </div>
            </div>
          </div>
        </div><!--account-tabs-setting end-->
      </div>
    </section>

  </div><!--theme-layout end-->


  <footer>
    <div class="footy-sec mn no-margin">
      <div class="container">

        <p><img src="../images/copy-icon2.png" alt="">Copyright 2020</p>
        <img class="fl-rgt" src="../images/logo2.png" alt="">
      </div>
    </div>
  </footer>
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/popper.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/jquery.mCustomScrollbar.js"></script>
  <script type="text/javascript" src="../lib/slick/slick.min.js"></script>
  <script type="text/javascript" src="../js/script.js"></script>


</body>
</html>
