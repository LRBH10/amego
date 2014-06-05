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
    <meta name="author" content="LRBH10">

    <link rel="shortcut icon" href="./images/logo/logo50x50.png" type="image/x-icon"/> 
    <link rel="icon" href="./images/logo/photo.jpg" type="image/x-icon"/>

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
    <link href="./dist/css/diff/amelia.css" rel="stylesheet">


    <!-- Add custom CSS here -->
    <link href="./dist/css/animated.css" rel="stylesheet">
    <link href="./dist/font-awesome/css/font-awesome.min.css" rel="stylesheet">


    <script language="javascript" type="text/javascript" src="dist/js/raphal.js"></script>
    <script language="javascript" type="text/javascript" src="dist/js/graphael.js"></script>
    <script language="javascript" type="text/javascript" src="dist/js/graphal.pie.js"></script>

  </head>

  <body role="document">

    <?php
    include './menu/header.php';
    ?>

    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
         <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active ">
          <div  class="row container top-buffer">
            <div class="   col-md-3">

            </div>
            <div class="   col-md-5 ">
              <div class=" animated slideInDown delay-2">
                <h3> Vous voulez  déménager ?   </h3>
                <h4> Vous cherchez le déménageur qui suggère les meilleurs offres <span class="label label-default">qualité / prix</span>    </h4>
                <h4> Estimez combien ça vous coûtera et demandez un devis gratuit </h4>
              </div>
              <div class=" animated slideInLeft delay-3">
                <a href="volume.php" class="btn  btn-primary "> Estimez votre déménegament et Demandez un devis </a> 
              </div>
            </div>
            <div class="col-lg-2 col-md-3">
              <img class=" animated slideInRight delay-4" width="400px" height="250px" src="./images/index/camion22.png" />
            </div>
          </div>
        </div>
        <div class="item "> 
          <div  class="row ">
            <div class="col-lg-offset-2 col-lg-6 col-md-offset-1 col-md-6 top-buffer ">
              <div class=" animated slideInDown delay-2">
                <h4> Le meuble qui ne rentre pas dans l'ascenseur, les escaliers qui sont trop étroits ou tout simplement le poids de l'objet à transporter !!!   </h4>
                <h4> Ne vous posez plus de questions, découvrez nos solutions, toutes adaptées à vos besoins et à vos envies...  </h4>
                <ul>
                  <li>  Auto-porteur</li>
                  <li>  L'échelle électrique</li>
                  <li>  Echelle électrique</li>
                </ul>
              </div>
              <div class=" animated slideInLeft delay-3">
                <a href="./monte_meuble.php" class="btn  btn-primary "> En savoir plus   </a>
                <a href="./garde_meuble.php" class="btn  btn-primary "> En savoir plus  sur Garde Meuble </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-3">
              <br>
              <img class=" animated slideInRight delay-4 vspace30" width="300px" height="200px" src="./images/index/monte.png" />
            </div>
          </div>
        </div>
        <div class="item "> 
          <div  class="row ">
            <div class="col-lg-offset-2 col-lg-6 col-md-offset-1 col-md-6 top-buffer ">
              <div class=" animated slideInDown delay-2">
                <h3> Vous avez des  suggestions precises pour votre déménagement   </h3>
                <h4> Nous mettrons toutes <span class="label label-default">nos experiences et notre savoir faire </span> pour vous satisfaire  </h4>
                <h4> Vous pouvez  demander un devis gratuit et nous vous rappellerons dans les plus bref delais pour en discuter d'avantage</h4>
              </div>
              <div class=" animated slideInLeft delay-3">
                <a href="./devis.php" class="btn  btn-primary "> Demandez un devis   </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-3">
              <img class=" animated slideInRight delay-4" width="300px" height="317px" src="./images/index/experiance2.png" />
            </div>
          </div>
        </div>
        <div class="item">
          <div  class="row top-buffer">
            <div class="col-lg-offset-2 col-lg-6 col-md-offset-1 col-md-6  ">
              <div class=" animated slideInDown delay-2">
                <h3> Vous avez des  objets précieux ou fragiles  </h3>
                <h4> Et vous avez <span class="label label-default"> peur de les perdres ou qu'ils se cassent </span>   </h4>
                <h4> Nos partenaires d'assurance sont les garants de vos objets </h4>
              </div>

            </div>
            <div class="col-lg-2 col-md-3">
              <img class=" animated slideInRight delay-4" width="250px" height="250px" src="./images/index/assurance2.png" />
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
              <img src="./images/index/adapter.png" alt="image" class="img-thumbnail">                        
            </div>
            <div class="col-md-8">
              <p>Nos formules sont adaptées à vos besoins. De la formule économique à la luxe, sans oublier la formule standard.</p>
            </div> 
            <a class="btn btn-sm btn-primary pull-left btn-block" href="formules.php">Plus d'information >></a>                   
          </div>
          <div class="col-lg-4">                    
            <h3><i class="fa fa-check-circle"></i> Paiement facilité</h3>
            <div class="col-lg-4">
              <img src="./images/index/tpe.png" alt="image" class="img-thumbnail">                        
            </div>
            <div class="col-lg-7">
              <p>Possibilité de payer en 3x sans interêts. <br/>Paiement par carte bancaire</p>
            </div>
            <a class="btn btn-sm btn-primary pull-left btn-block" href="devis.php">Plus d'information >></a>
          </div>
          <div class="col-lg-4">
            <h3><i class="fa fa-check-circle"></i> Devis Gratuit</h3>
            <div class="col-lg-4">
              <img src="./images/index/devis_gratuit.png" alt="image" class="img-thumbnail">                        
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



    <div class="section-colored">
      <div class=" text-center">

        <div class="container">

          <div class="row">
            <div class="col-lg-12">

              <p>Un peu de stress? Changer de lieu de vie, d'environnement, peut parfois être angoissant. Pourtant,il suffit souvent de bien s'y préparer et d'être entouré par de bons conseillers.<br/> 
                AMEGO Déménagement possède l'expérience nécessaire, l'équipe saura vous conseiller et vous apporter les bonnes informations. <br>
                Le choix d'un bon professionnel vous permettra de déménager en toute sérénité.</p>
              <p>Demandez un <a href="devis.php">devis déménagement </a>! La société AMEGO vous propose une première évaluation en ligne.</p>
              <hr>
            </div>
          </div>
          <!-- /.row -->

        </div>
        <!-- /.container -->

      </div>
    </div>
    <!-- /.section-colored -->
    <div class=" text-center">
      <h2>Vous souhaitez comparer nos formules?</h2>
      <div class="container">
        <?php
        include './formules/all.php';
        ?>
        
        <div class="row">
          <br>
          <br>
          <a href="./alacarte.php" class="col-md-offset-2 col-md-8 btn btn-lg btn-primary" > Ou tout simplement créer votre propre formule de déménagement </a>
        </div>
        
      </div>
    </div>




    <div itemscope itemtype="http://schema.org/ImageGallery" class="section">

      <div class="container">

        <div class="row">
          <div class="col-lg-12 text-center">
            <h2>Assurez-vous de nos services en regardant les photos</h2>
            <hr>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <a href="./images/index/demenageur1.jpg">
              <img class="img-responsive img-home-portfolio" src="./images/index/demenageur1.jpg">
            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <a href="./images/index/demenageur2.jpg">
              <img class="img-responsive img-home-portfolio" src="./images/index/demenageur2.jpg">
            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <a href="./images/index/demenageur3.jpg">
              <img class="img-responsive img-home-portfolio" src="./images/index/demenageur3.jpg">
            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <a href="./images/index/demenageur4.jpg">
              <img class="img-responsive img-home-portfolio" src="./images/index/demenageur4.jpg">
            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <a href="./images/index/demenageur5.jpg">
              <img class="img-responsive img-home-portfolio" src="./images/index/demenageur5.jpg">
            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <a href="./images/index/demenageur6.jpg">
              <img class="img-responsive img-home-portfolio" src="./images/index/demenageur6.jpg">
            </a>
          </div>
        </div>
        <!-- /.row -->

      </div>
      <!-- /.container -->

    </div>
    <!-- /.section -->

    <!--div class="section-colored">
  
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
           
  
        </div>
  
    </div>
    <!-- /.section-colored -->

    <!--div class="section">
  
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
  
  
        </div>
  
  
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
    <script src="./dist/js/bootstrap.min.js"></script>
    <script src="./dist/js/holder.js"></script>
  </body>
</html>
