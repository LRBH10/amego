<?php
include_once '../config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="bootstrap-3.0.3/docs-assets/ico/favicon.png">

        <title>AMEGO DEMENAGEMENT</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo RESOURCESITE; ?>css/bootstrap.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <!-- Custom styles for this template -->
        <link href="<?php echo RESOURCESITE; ?>css/carousel.css" rel="stylesheet">
    </head>

    <body role="document">

        <?php
        include INCLUDESITE . '/menu/header.php';
        ?>

        <!-- Carousel
        ================================================== -->
        <section id="myCarousel" class="container carousel slide" data-ride="carousel" role="main">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <!--data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide"-->
                    <img src="<?php echo IMAGESITE; ?>demenageur.jpg"  alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Premiere Image.</h1>
                            <p>Explication sur l'image</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Plus d'information</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo IMAGESITE; ?>no-one.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Dexieme Image.</h1>
                            <p>Explication sur l'image</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Plus d'information</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo IMAGESITE; ?>experience.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Toisieme Image.</h1>
                            <p>Explication sur l'image</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Plus d'information</a></p>            </div>
                    </div>
                </div>


            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

        </section>



        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-circle" src="<?php echo ROOTSITE; ?>images/cerveau.jpg" alt="Generic placeholder image">
                    <h2>Expérience</h2>
                    <p>Quelque Chose de Spécial ( Témoinge, partenaire, Conseil ... ) </p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle" src="<?php echo ROOTSITE; ?>images/no-1.jpg" alt="Generic placeholder image">
                    <h2>Fiabilité</h2>
                    <p>Quelque Chose de Spécial</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle" src="<?php echo ROOTSITE; ?>images/h1.jpg" alt="Generic placeholder image">
                    <h2>Savoir-faire</h2>
                    <p>Quelque Chose de Spécial</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->



            <div class="row">


                <div class="col-md-3 col-md-offset-2">
                    <center>
                        <img class="img-circle" src="<?php echo ROOTSITE; ?>images/conseil.png" alt="Generic placeholder image">
                    </center>
                    <h2>Conseils</h2>
                    <center>
                        <p>Quelque Chose de Spécial</p>
                    </center>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-3 col-md-offset-1">
                    <center><img class="img-circle" src="<?php echo ROOTSITE; ?>images/moving4.jpg" alt="Generic placeholder image">
                    </center><h2>Qualité de service</h2>
                    <center><p>Quelque Chose de Spécial</p>
                    </center><p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div>

            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Video <span class="text-muted">It'll blow your mind.</span></h2>
                    <p class="lead">Votre method de fonctionement ... </p>
                </div>
                <div class="col-md-5">
                    <object type="text/html" data="http://www.youtube.com/embed/6_I70KACh4o" style="width:500px;height:500px;"></object>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-5">
                    <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                </div>
                <div class="col-md-7">
                    <h2 class="featurette-heading">Quelque Chose <span class="text-muted">It'll blow your mind.</span></h2>
                    <p class="lead">Description ... </p>      </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Quelque Chose <span class="text-muted">It'll blow your mind.</span></h2>
                    <p class="lead">Description ... </p>      
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                </div>
            </div>





            <!-- FOOTER -->
            <?php
            include INCLUDESITE . '/menu/footer.php';
            ?>

        </div><!-- /.container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="<?php echo RESOURCESITE; ?>js/bootstrap.min.js"></script>
        <script src="<?php echo RESOURCESITE; ?>js/holder.js"></script>
    </body>
</html>
