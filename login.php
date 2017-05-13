<?php

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

<div class="section whitesmoke">
    <div class="row container">
        <h2 class="header">Inloggen</h2>
        <div class="row">
            <form class="col s12" action="dashboard.php" method="post">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" name="email" class="validate">
                        <label for="email" data-error="wrong" data-success="right">Email</label>
                    </div>

                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                    <div class="input-field col s12 center-align">

                        <button class="btn waves-effect waves-light" type="submit" name="action">Inloggen
                            <i class="material-icons left">trending_flat</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>







<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>
