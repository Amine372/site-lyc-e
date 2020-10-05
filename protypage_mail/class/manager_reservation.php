<?php
$name = $_POST['name'];
echo("<center><h2><font color=black>Bonjour <u>$name </u></h2></center>");
echo("<center><p>Vous allez être redirigé vers le formulaire </p></center>");
?>
<html>
<head>
<meta charset="UTF-8">
</head>
<meta http-equiv="refresh" content="5; url=https://www.example.com/" />
</html>