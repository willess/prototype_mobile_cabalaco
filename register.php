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
        <h2 class="header">Registereren</h2>

        <div class="row">
            <div class="col s12 center-align">
                <div class="hideText">
                    <p class="grey-text text-darken-3 lighten-3">Om gebruik te maken van Cabalaco vragen wij je paspoortgegevens in te vullen. Het is ook mogelijk om je paspoort te scannen, dit scheelt een hoop tijd.</p>

                    <!-- Modal Trigger -->
                    <a class="waves-effect waves-light btn" href="#modal1">Paspoort scannen</a>
                </div>

                <!-- Modal Structure -->
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <h4>Scan je paspoort</h4>
                        <p>Het scannen van je paspoort verloopt via de scanApp. Wij zijn niet verantwoordelijk voor foutmeldingen.</p>
                        <p>Leg je mobiel op je paspoort en klik op 'Scannen'.</p>
                        <p>Als je op scannen klikt ga je akkoord met de voorwaarden</p>

                    </div>
                    <div class="modal-footer">
                        <a id="scanRegister" href="#modal2" class="modal-action modal-close waves-effect waves-green btn-flat">Scannen</a>
                    </div>
                </div>
            </div>

            <div class="col s12 center-align">
                <!-- Modal Trigger -->
<!--                <a class="waves-effect waves-light btn" href="#modal2">Paspoort scannen</a>-->

                <!-- Modal Structure -->
                <div id="modal2" class="modal">
                    <div class="modal-content">
                        <h4>Scanning...</h4>
                        <p class="scanP">Dit ken enkele seconden duren.</p>
                        <div class="progress">
                            <div class="indeterminate"></div>
                        </div>
                        <div hidden class="hiddenElement"><i hidden class="material-icons">done_all</i></div>

                    </div>
                    <div class="modal-footer">
                        <div hidden class="hiddenElement"><a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat registerScan" hidden="hidden">Ga door</a></div>
                    </div>
                </div>
            </div>

            <hr />


            <div class="emptyForm">
                <form class="col s12" action="dashboard.php" method="post">
                    <div class="row">
                        <p class="grey-text text-darken-3 lighten-3">Formulier handmatig invullen.</p>

                        <div class="input-field col s12">
                            <input id="first_name" name="first_name" type="text" class="validate">
                            <label for="first_name">Voornaam</label>
                        </div>

                        <div class="input-field col s12">
                            <input id="first_name" name="surname" type="text" class="validate">
                            <label for="first_name">Achternaam</label>
                        </div>

                        <div class="input-field col s12">
                            <input type="date" class="datepicker">
                        </div>

                        <div class="input-field col s12">
                            <input id="first_name" name="pob" type="text" class="validate">
                            <label for="first_name">Geboorteplaats</label>
                        </div>

<!--                        <div class="input-field col s12">-->
<!--                            <select>-->
<!--                                <option value="" disabled selected>Kies geslacht</option>-->
<!--                                <option value="man">Man</option>-->
<!--                                <option value="vrouw">vrouw</option>-->
<!--                            </select>-->
<!--                        </div>-->

                        <div class="input-field col s12">
                            <input id="first_name" name="docunr" type="text" class="validate">
                            <label for="first_name">DocumentNummer</label>
                        </div>

                        <div class="input-field col s12">
                            <input id="first_name" name="bsn" type="text" class="validate">
                            <label for="first_name">BSN</label>
                        </div>

                        <p>Inloggegevens</p>


                        <div class="input-field col s12">
                            <input id="email" type="email" name="email" class="validate">
                            <label for="email" data-error="wrong" data-success="right">Email</label>
                        </div>

                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Wachtwoord</label>
                        </div>

                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Herhaal wachtwoord</label>
                        </div>

                        <div class="input-field col s12 center-align">

                            <button class="btn waves-effect waves-light" type="submit" name="action">Registeren
                                <i class="material-icons left">trending_flat</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div hidden class="prefilledForm">
                <form class="col s12" action="dashboard.php" method="post">
                    <div class="row">
                        <p class="grey-text text-darken-3 lighten-3">Paspoortgegevens zijn ingevuld. Stel je e-mail en wachtwoord in en klik op registreren.</p>

                        <div class="input-field col s12">
                            <input value="Richard" id="first_name" name="first_name" type="text" class="validate">
                            <label for="first_name">Voornaam</label>
                        </div>

                        <div class="input-field col s12">
                            <input value="van der Velden" id="first_name" name="surname" type="text" class="validate">
                            <label for="first_name">Achternaam</label>
                        </div>

                        <div class="input-field col s12">
                            <input type="date" class="datepicker">
                        </div>

                        <div class="input-field col s12">
                            <input value="Rotterdam" id="first_name" name="pob" type="text" class="validate">
                            <label for="first_name">Geboorteplaats</label>
                        </div>

                        <!--                        <div class="input-field col s12">-->
                        <!--                            <select>-->
                        <!--                                <option value="" disabled selected>Kies geslacht</option>-->
                        <!--                                <option value="man">Man</option>-->
                        <!--                                <option value="vrouw">vrouw</option>-->
                        <!--                            </select>-->
                        <!--                        </div>-->

                        <div class="input-field col s12">
                            <input value="Dd34023Dlf322" id="first_name" name="docunr" type="text" class="validate">
                            <label for="first_name">DocumentNummer</label>
                        </div>

                        <div class="input-field col s12">
                            <input value="43888239" id="first_name" name="bsn" type="text" class="validate">
                            <label for="first_name">BSN</label>
                        </div>

                        <p>Inloggegevens</p>


                        <div class="input-field col s12">
                            <input id="email" type="email" name="email" class="validate">
                            <label for="email" data-error="wrong" data-success="right">Email</label>
                        </div>

                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Wachtwoord</label>
                        </div>

                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Herhaal wachtwoord</label>
                        </div>

                        <div class="input-field col s12 center-align">

                            <button class="btn waves-effect waves-light" type="submit" name="action">Registeren
                                <i class="material-icons left">trending_flat</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>
