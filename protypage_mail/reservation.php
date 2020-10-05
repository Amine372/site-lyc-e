<?php
require 'inc/bootstrap.php';?>
<?php require 'inc/header.php'; ?>
<h1>Je réserve ! </h1>
<br>
<form action="/Film-Review-Movie-Database/membre/class/manager_reservation.php" method="POST">

    <div class="form-group">
        <label for="">Votre nom et prénom</label>
        <input type="text" name="nom" class="form-control"/ required>
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="mail" class="form-control"/ required>
    </div>

    <div class="form-group">
        <label for="">Nom du film</label>
        <input type="text" name="film" class="form-control"/ required>
    </div>

    <div class="form-group">
        <label for="">Nombre de places</label>
        <input type="text" name="nbplaces" class="form-control"/ required>
    </div>

<br>
    <button type="submit" class="btn btn-primary">Je réserve</button>

</form>

<?php require 'inc/footer.php'; ?>
