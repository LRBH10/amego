<?php
include_once './config/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Conseil</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo RESOURCESITE;?>css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?php echo RESOURCESITE;?>css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    
    <?php
        include './menu/header.php';
     ?>

    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Qui
                    <small>sommes nous ?</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Accueil</a>
                    </li>
                    <li class="active">Qui Sommes Nous</li>
                </ol>
            </div>

        </div>

        <div class="row">

            <div class="col-md-6">
                <img class="img-responsive" src="<?php echo IMAGESITE;?>quiSommeNous.jpg">
            </div>
            <div class="col-md-6">
                <h2>AMEGO déménagement</h2>
                <p>Bienvenue dans Rue89, un endroit où l'on discute, où l'on se rencontre, où l'on prend l'air. Une nouvelle aventure au cœur de la révolution en cours de l'information. Notre ambition : inventer un média qui marie journalisme professionnel et culture de l'Internet.</p>
                <p>Créé par des journalistes, dont plusieurs sont issus de Libération, ce site se concentre sur les sujets qui font parler, jaser, débattre, dans tous les domaines, de la politique au sport, en passant par les nouvelles technologies, la culture ou l'environnement.</p>
                <p>Nous rêvons que Rue89 devienne peu à peu le point de référence obligé pour tous ceux qui ne veulent pas se contenter de « consommer » l'information et se passionnent pour la confrontation d'idées</p>
                <p>Le site est ouvert sur le reste du monde. Il ne se contente pas de critiquer, il est toujours à la recherche de solutions et se propose d'aider à leur mise en oeuvre. Il fait une large place à la photo et à la vidéo.</p>
            </div>

        </div>

        <!-- Team Member Profiles -->

        <div class="row">

            <div class="col-lg-12">
                <h2 class="page-header">Notre Equipe</h2>
            </div>

            <div class="col-sm-4">
                <img class="img-responsive" src="<?php echo IMAGESITE;?>personne1.jpg">
                <h3>Pierre Haski 
                    <small>Président</small>
                </h3>
                <p>Qu'est-ce qu'il fait? En quelques mots! Ajouter des liens facebook etc!</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li class="tooltip-social facebook-link"><a href="#facebook-profile" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social linkedin-link"><a href="#linkedin-profile" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social google-plus-link"><a href="#google-plus-profile" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-4">
                <img class="img-responsive" src="<?php echo IMAGESITE;?>personne2.jpg">
                <h3>Laurent Mauriac
                    <small>Vice directeur</small>
                </h3>
                <p>Qu'est-ce qu'il fait? En quelques mots! Ajouter des liens facebook etc!</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li class="tooltip-social facebook-link"><a href="#facebook-profile" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social linkedin-link"><a href="#linkedin-profile" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social google-plus-link"><a href="#google-plus-profile" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-4">
                <img class="img-responsive" src="<?php echo IMAGESITE;?>personne3.jpg">
                <h3>Marianne Riché
                    <small>Technicienne</small>
                </h3>
                <p>Qu'est-ce qu'il fait? En quelques mots! Ajouter des liens facebook etc!</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li class="tooltip-social facebook-link"><a href="#facebook-profile" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social linkedin-link"><a href="#linkedin-profile" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social google-plus-link"><a href="#google-plus-profile" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-4">
                <img class="img-responsive" src="<?php echo IMAGESITE;?>personne4.jpg">
                <h3>Yann Guégan
                    <small>Permanent</small>
                </h3>
                <p>Qu'est-ce qu'il fait? En quelques mots! Ajouter des liens facebook etc!</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li class="tooltip-social facebook-link"><a href="#facebook-profile" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social linkedin-link"><a href="#linkedin-profile" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social google-plus-link"><a href="#google-plus-profile" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-4">
                <img class="img-responsive" src="<?php echo IMAGESITE;?>personne5.jpg">
                <h3>Ramsès Kefi.
                    <small>Permanent</small>
                </h3>
                <p>Qu'est-ce qu'il fait? En quelques mots! Ajouter des liens facebook etc!</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li class="tooltip-social facebook-link"><a href="#facebook-profile" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social linkedin-link"><a href="#linkedin-profile" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social google-plus-link"><a href="#google-plus-profile" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-4">
                <img class="img-responsive" src="<?php echo IMAGESITE;?>personne6.jpg">
                <h3>Clément Guillou
                    <small>Permanent</small>
                </h3>
                <p>Qu'est-ce qu'il fait? En quelques mots! Ajouter des liens facebook etc!</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li class="tooltip-social facebook-link"><a href="#facebook-profile" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social linkedin-link"><a href="#linkedin-profile" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social google-plus-link"><a href="#google-plus-profile" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>

        </div>

<!--         Our Customers 

        <div class="row">

            <div class="col-lg-12">
                <h2 class="page-header">Our Customers</h2>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive img-customer" src="http://placehold.it/500x300">
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive img-customer" src="http://placehold.it/500x300">
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive img-customer" src="http://placehold.it/500x300">
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive img-customer" src="http://placehold.it/500x300">
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive img-customer" src="http://placehold.it/500x300">
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive img-customer" src="http://placehold.it/500x300">
            </div>

        </div>

    </div>-->
    <!-- /.container -->

    <div class="container">

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Company 2013</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>

</body>

</html>