<?php
include_once './config/config.php';
include_once './menu/navigation.php';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="LRBH10">

        <link rel="shortcut icon" href="./images/logo/logo50x50.png" type="image/x-icon"/> 
        <link rel="icon" href="./images/logo/photo.jpg" type="image/x-icon"/>

        <title>Qui sommes nous</title>

        <!-- Bootstrap core CSS -->
        <link href="dist/css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="dist/css/amego.css" rel="stylesheet">


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
                    <img class="img-responsive" src="<?php echo IMAGESITE; ?>quiSommeNous.jpg">
                </div>
                <div class="col-md-6">
                    <h2>AMEGO déménagement</h2>
                    <p>Bienvenue dans Rue89, un endroit où l'on discute, où l'on se rencontre, où l'on prend l'air. Une nouvelle aventure au cœur de la révolution en cours de l'information. Notre ambition : inventer un média qui marie journalisme professionnel et culture de l'Internet.</p>
                    <p>Créé par des journalistes, dont plusieurs sont issus de Libération, ce site se concentre sur les sujets qui font parler, jaser, débattre, dans tous les domaines, de la politique au sport, en passant par les nouvelles technologies, la culture ou l'environnement.</p>
                    <p>Nous rêvons que Rue89 devienne peu à peu le point de référence obligé pour tous ceux qui ne veulent pas se contenter de « consommer » l'information et se passionnent pour la confrontation d'idées</p>
                    <p>Le site est ouvert sur le reste du monde. Il ne se contente pas de critiquer, il est toujours à la recherche de solutions et se propose d'aider à leur mise en oeuvre. Il fait une large place à la photo et à la vidéo.</p>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-12">
                    <h2 class="page-header">Notre Equipe</h2>
                </div>

                <div class="col-sm-4">
                    <img class="img-responsive" src="<?php echo IMAGESITE; ?>person1.jpg">
                    <h3>Pierre Haski 
                        <small>Président</small>
                    </h3>
                </div>

                <div class="col-sm-4">
                    <img class="img-responsive" src="<?php echo IMAGESITE; ?>person2.jpg">
                    <h3>Laurent Mauriac
                        <small>Vice directeur</small>
                    </h3>
                </div>

                <div class="col-sm-4">
                    <img class="img-responsive" src="<?php echo IMAGESITE; ?>person3.jpg">
                    <h3>Pierre Riché
                        <small>Technicienne</small>
                    </h3>
                </div>

                <div class="col-sm-4">
                    <img class="img-responsive" src="<?php echo IMAGESITE; ?>person4.jpg">
                    <h3>Yann Guégan
                        <small>Permanent</small>
                    </h3>
                </div>

                <div class="col-sm-4">
                    <img class="img-responsive" src="<?php echo IMAGESITE; ?>person5.jpg">
                    <h3>Ramsès Kefi.
                        <small>Permanent</small>
                    </h3>
                </div>

                <div class="col-sm-4">
                    <img class="img-responsive" src="<?php echo IMAGESITE; ?>person6.png">
                    <h3>Clément Guillou
                        <small>Permanent</small>
                    </h3>
                </div>

            </div>



            <?php
            include './menu/footer.php';
            ?>
        </div>
        <!--container -->

        <!-- JavaScript -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="<?php echo RESOURCESITE; ?>js/bootstrap.min.js"></script>
        <script src="<?php echo RESOURCESITE; ?>js/holder.js"></script>

    </body>

</html>