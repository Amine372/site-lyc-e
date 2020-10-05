<?php

require_once 'class/traitement_login.php'; //lien vers le traitement de la connexion
?>
<?php require 'inc/header.php'; ?>

    <h1>Se connecter</h1>

    <form action="" method="POST">

        <div class="form-group">
            <label for="">Pseudo ou email</label>
            <input type="text" name="username" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="">Mot de passe <a href="forget.php">(J'ai oubliĂ© mon mot de passe)</a></label>
            <input type="password" name="password" class="form-control"/>
        </div>

        <div class="form-group">
            <label>
                <input type="checkbox" name="remember" value="1"/> Se souvenir de moi
            </label>
        </div>

        <button type="submit" class="button">Se connecter</button><a href="http://localhost/Film-Review-Movie-Database/membre/admin/index.php?p=login" class="button1">Espace Admin </a>

    </form>

<?php require 'inc/footer.php'; ?>