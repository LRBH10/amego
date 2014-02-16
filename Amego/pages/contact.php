
<?php
include_once '../config/config.php';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="<?php echo IMAGESITE; ?>favicon.png">

        <title>Contact</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo RESOURCESITE; ?>css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap theme -->
        <link href="<?php echo RESOURCESITE; ?>css/bootstrap-theme.min.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style type="text/css"></style><style id="holderjs-style" type="text/css"></style></head>

    <body role="document" style="">

        <?php
        include INCLUDESITE . '/menu/header.php';
        ?>

        <div class="container theme-showcase" role="main">

            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div class="jumbotron">
                <h1>Contact</h1>
                <p>Pour contacter les services déménagements AMEGO, appelez par téléphone le <kbd>01 42 26 52 20</kbd>ou 
                    utiliser le formulaire ci-dessous. Nous vous répondrons dans les meilleurs délais.</p>
            </div>

            <div class="container">

                <form class="form-horizontal" role="form">

                    <h1><span class="label label-default">Contactez-nous</span></h1>
                    <br/>
                    <div class="form-group">
                        <span for="inputNom" class="col-sm-2 label label-success">Votre nom</span>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNom">
                        </div>
                    </div>
                    <div class="form-group">
                        <span for="inputEmail" class="col-sm-2 label label-info">Adresse e-mail</span>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                    </div>            
                    <div class="form-group">
                        <span for="inputNumero" class="col-sm-2 label label-warning">Numéro de téléphone</span>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNumero">
                        </div>
                    </div>
                    <div class="form-group">
                        <span for="inputMesage" class="col-sm-2 label label-success">Précision</span>
                        <div class="col-sm-10">
                            <textarea id="inputMesage" class="form-control" rows="9" placeholder="Ecrivez votre message ici......"></textarea>
                        </div>
                    </div>            


                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </div>
                    </div>
                </form>




                <div class="page-header">
                </div>
                <div class="well">
                    <p>Pour votre information les demenageurs AMEGO situés à Paris (75) interviennent essentiellemement dans les département limitrophes; Yvelines (78), hauts de seine (92), seine st denis (93), val de marne (94), seine et marne (77), essonne (91).</p>
                </div>


                <hr class="featurette-divider">

                <!-- /END THE FEATURETTES -->


                <!-- FOOTER -->
                <footer>
                    <p class="pull-right"><a href="#">Back to top</a></p>
                    <p>&copy; 2014 AMEGO, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
                </footer>

            </div> <!-- /container -->


            <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="<?php echo RESOURCESITE; ?>js/bootstrap.min.js"></script>
        <script src="<?php echo RESOURCESITE; ?>js/holder.js"></script>


    </body></html>