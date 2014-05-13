<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<link href="./dist/css/amego.css" rel="stylesheet">

<header class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./index.php">AMEGO DEMENAGEMENT
                <?php
                if (isset($_GET['where'])) {
                    $var = $_GET['where'];
                    echo ' sur <span class="badgesize badge">' . $var . ' </span>';
                }
                ?>

            </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Les formules <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="./formules.php#formule_eco">Formule économique</a></li>
                        <li><a href="./formules.php#formule_standard">Formule standard</a></li>
                        <li><a href="./formules.php#formule_luxe">Formule luxe</a></li>
                        <li><a href="./formules.php#comparaisons">Comparaisons</a></li>
                    </ul>
                </li>  

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Déménager <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="./devis.php">Devis déménagement</a></li>
                        <li><a href="./volume.php">Calcule du Volume</a></li>
                        <li><a href="./conseils.php">Conseils</a></li>
                        <!--li><a href="./nosmoyens.php">Nos Moyens</a></li-->
                    </ul>
                </li>           

                <li><a href="./garantie.php">Garanties</a></li>
                <!--li><a href="./nous.php">Qui Somme Nous</a></li-->
                <li><a href="./contact.php">Nous Contactez</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>

</header>