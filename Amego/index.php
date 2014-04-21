<?php
include_once 'config/config.php';
include_once './menu/navigation.php';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Amego Demenagement">
        <meta name="author" content="LAOUADI Rabah">

        <title> 
            <?php
            if (isset($_GET['where'])) {
                $var = $_GET['where'];
                echo $var . ' DEMENAGEMENT';
            } else {
                echo 'AMEGO DEMENAGEMENT';
            }
            ?>
        </title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo RESOURCESITE; ?>css/bootstrap.css" rel="stylesheet">


        <!-- Add custom CSS here -->
        <link href="<?php echo RESOURCESITE; ?>css/modern-business.css" rel="stylesheet">
        <link href="<?php echo RESOURCESITE; ?>css/animated.css" rel="stylesheet">
        <link href="<?php echo RESOURCESITE; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet">

    </head>

    <body role="document">

        <?php
        include INCLUDESITE . '/menu/header.php';
        ?>

        <div id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item ">
                    <div  class="row container top-buffer">
                        <div class="col-lg-offset-1 col-lg-6 col-md-offset-1 col-md-6 ">
                            <div class=" animated slideInDown delay-2">
                                <h3> Vous voulez  déménager ?   </h3>
                                <h4> Vous chercher le déménageur qui offre meilleur  <span class="label label-default">qualité / prix</span>    </h4>
                                <h4> Simulez combien ça vous coûtera ou demander un devis gratuit </h4>
                            </div>
                            <div class=" animated slideInLeft delay-3">
                                <a href="volume.php" class="btn  btn-primary "> Simuler Votre déménegament et Demander un devis </a> 
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <img class=" animated slideInRight delay-4" width="400px" height="200px" src="./images/index/camion.png" />
                        </div>
                    </div>
                </div>
                <div class="item active"> 
                    <div  class="row ">
                        <div class=" col-md-offset-1 col-md-6 top-buffer ">
                            <div class=" animated slideInDown delay-2">
                                <h3> Vous avez des  suggestions precises pour votre déménegement   </h3>
                                <h4> Nous mettrons toutes <span class="label label-default">notre experience et notre savoir faire </span> pour vous satisfaire  </h4>
                                <h4> Vous pouvez  demander un devis gratuit et nous vous rappalerons dans les plus bref delai pour en discuter d'avantage</h4>
                            </div>
                            <div class=" animated slideInLeft delay-3">
                                <a href="./devis.php" class="btn  btn-primary "> Demander un devis   </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img class=" animated slideInRight delay-4" width="300px" height="317px" src="./images/index/experiance2.png" />
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div  class="row top-buffer">
                        <div class=" col-md-offset-1 col-md-6  ">
                            <div class=" animated slideInDown delay-2">
                                <h3> Vous avez des  objets précieux ou fragiles  </h3>
                                <h4> Et vous avez <span class="label label-default">peur de les perdres ou qu'ils se cassent </span>   </h4>
                                <h4> Nous partenaire d'assurance sont les garant de vos objets </h4>
                            </div>
                            
                        </div>
                        <div class="col-md-3">
                            <img class=" animated slideInRight delay-4" width="281px" height="179px" src="./images/index/assurances.jpg" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </div>            

        <div class="section">

            <div class="container">

                <div class="row">
                    <div class="col-lg-4">                    
                        <h3><i class="fa fa-check-circle"></i> Formules adaptées</h3>
                        <div class="col-md-4">
                            <img src="<?php echo IMAGESITE; ?>adapter.png" alt="image" class="img-thumbnail">                        
                        </div>
                        <div class="col-md-8">
                            <p>Nos formules sont adaptées à vos besoins. De la formule économique à la luxe, sans oublier la formule standard.</p>
                        </div> 
                        <a class="btn btn-sm btn-primary pull-left btn-block" href="service.php">Plus d'information >></a>                   
                    </div>
                    <div class="col-lg-4">                    
                        <h3><i class="fa fa-check-circle"></i> Paiement facilité</h3>
                        <div class="col-lg-4">
                            <img src="<?php echo IMAGESITE; ?>tpe.png" alt="image" class="img-thumbnail">                        
                        </div>
                        <div class="col-lg-7">
                            <p>Possibilité de payer en 3x sans frais. <br/>Paiement par carte bancaire</p>
                        </div>
                        <a class="btn btn-sm btn-primary pull-left btn-block" href="devis.php">Plus d'information >></a>
                    </div>
                    <div class="col-lg-4">
                        <h3><i class="fa fa-check-circle"></i> Devis Gratuit</h3>
                        <div class="col-lg-4">
                            <img src="<?php echo IMAGESITE; ?>devis_gratuit.png" alt="image" class="img-thumbnail">                        
                        </div>
                        <div class="col-lg-7">
                            <p>Demandez-nous un devis gratuit et personnalisé. Votre devis en moins de 24 heures.</p>
                        </div>
                        <a class="btn btn-sm btn-primary pull-left btn-block" href="devis.php">Plus d'information >></a>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->

        </div>
        <!-- /.section -->

        <div class="section-colored text-center">

            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <h2>Vous souhaitez comparer?</h2>
                        <p>Un peu de stress? Changer de lieu de vie, d'environnement, peut parfois être angoissant. Pourtant,il suffit souvent de bien s'y préparer et d'être entouré de bons conseils. AMEGO Déménagement possède l'expérience nécessaire, l'équipe saura vous conseiller et vous apporter les bonnes informations. Le choix d'un bon professionnel vous permettra de déménager en toute sérénité.</p>
                        <p>Demandez un <a href="devis.php">devis déménagement </a>! La société AMEGO vous propose une première évaluation en ligne.</p>
                        <hr>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->

        </div>
        <!-- /.section-colored -->

        <div class="section">

            <div class="container">

                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Asurez-vous de nos services en regardant les photos</h2>
                        <hr>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="<?php echo IMAGESITE; ?>demenageur1.jpg">
                            <img class="img-responsive img-home-portfolio" src="<?php echo IMAGESITE; ?>demenageur1.jpg">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="<?php echo IMAGESITE; ?>demenageur2.jpg">
                            <img class="img-responsive img-home-portfolio" src="<?php echo IMAGESITE; ?>demenageur2.jpg">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="<?php echo IMAGESITE; ?>demenageur3.jpg">
                            <img class="img-responsive img-home-portfolio" src="<?php echo IMAGESITE; ?>demenageur3.jpg">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="<?php echo IMAGESITE; ?>demenageur4.jpg">
                            <img class="img-responsive img-home-portfolio" src="<?php echo IMAGESITE; ?>demenageur4.jpg">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="<?php echo IMAGESITE; ?>demenageur5.jpg">
                            <img class="img-responsive img-home-portfolio" src="<?php echo IMAGESITE; ?>demenageur5.jpg">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="<?php echo IMAGESITE; ?>demenageur6.jpg">
                            <img class="img-responsive img-home-portfolio" src="<?php echo IMAGESITE; ?>demenageur6.jpg">
                        </a>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->

        </div>
        <!-- /.section -->

        <div class="section-colored">

            <div class="container">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <h2>Vidéo de déménagement 1:</h2>
                        <ul>
                            <li>Paris 75</li>
                            <li>5 personnes</li>
                            <li>2 camions</li>
                            <li>3 heurs</li>
                            <li>Meillheure materielle</li>
                            <li>Meillheurs services</li>
                            <li>Clien 100% <strong>satisfait</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="flex-video widescreen">
                            <iframe allowfullscreen="" src="http://player.vimeo.com/video/71876963" frameborder="0" width="500" height="281"></iframe>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->

        </div>
        <!-- /.section-colored -->

        <div class="section">

            <div class="container">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="flex-video widescreen">
                            <iframe allowfullscreen="" src="http://player.vimeo.com/video/71876963" frameborder="0" width="500" height="281"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <h2>Vidéo de déménagement 2:</h2>
                        <ul>
                            <li>Paris 75</li>
                            <li>5 personnes</li>
                            <li>2 camions</li>
                            <li>3 heurs</li>
                            <li>Meillheure materielle</li>
                            <li>Meillheurs services</li>
                            <li>Clien 100% <strong>satisfait</li>
                        </ul>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->

        </div>
        <!-- /.section -->

        <div class="container">

            <div class="row well">
                <div class="col-lg-8 col-md-8">
                    <h4>Vous souhaitez comparer?</h4>
                    <p>Demandez un devis déménagement ! La société AMEGO vous propose une première évaluation en ligne.</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <a class="btn btn-lg btn-primary pull-right" href="devis.php">Devis déménagement</a>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->


        <?php
        include './menu/footer.php';
        ?>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="<?php echo RESOURCESITE; ?>js/bootstrap.min.js"></script>
        <script src="<?php echo RESOURCESITE; ?>js/holder.js"></script>
    </body>
</html>
