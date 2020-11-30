<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Annonces</title>
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
 <form action="../class/Manager/manager_reservation.php" method="POST">

    <div class="form-group">
        <label for="">Votre nom et prénom</label>
        <input type="text" name="nom" class="form-control"/ required>
    </div>

    <div class="form-group">
        <label for="">Mail</label>
       <input type="mail" name="mail" class="form-control" required placeholder="Adresse éléctronique">
    </div>

    <div class="form-group">
        <label for="">Nom du poste</label>
        <input type="text" name="poste" class="form-control"/ required>
    </div>

    <div class="form-group">
        <label for="">Votre ville</label>
        <input type="text" name="ville" class="form-control"/ required>
    </div>

<br>
    <button type="submit" class="btn btn-primary">Je réserve</button>

</form>

  </div>

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/popper.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.range-min.js"></script>
<script type="text/javascript" src="../lib/slick/slick.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>
