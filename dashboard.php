<?php

$email = $_POST["email"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wilco van Dijk - Portfolio</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>


</head>
<body>

<header>
    <nav>
        <div class="nav-wrapper">
            <a href="./" class="brand-logo center">Cabalaco</a>
        </div>
    </nav>
</header>

<div class="row">

    <div class="col s12 center-align">

        <br />

        Welkom: <?= $email ?>

        <hr />

        <a class="waves-effect waves-light btn" href="#">Voeg vlucht toe</a>

    </div>
</div>



<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>
