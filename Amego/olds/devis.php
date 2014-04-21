<?php
include_once 'config/config.php';
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
        <link rel="shortcut icon" href="./images/favicon.png">

        <title>Devi déménagement</title>

        <!-- Bootstrap core CSS -->
        <link href="./dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap theme -->
        <link href="./dist/css/bootstrap-theme.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->

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
                <h1>Demande de devis déménagement</h1>
                <p>Pour renseigner nos services et afin de mieux répondre à votre demande vous pouvez dors et déjà 
                    compléter ces quels éléments utiles à l'organisation de votre déménagement. Nos déménageurs pourront 
                    ainsi vous répondre plus efficacement.</p>
            </div>

            <div class="container">

                <form class="form-horizontal" role="form">
                    <h1><span class="label label-default">Vos coordonnées</span></h1>
                    <br/>
                    <div class="form-group">
                        <span for="inputNom" class="col-sm-2 label label-success">Votre nom</span>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNom">
                        </div>
                    </div>
                    <div class="form-group">
                        <span for="inputTelephone" class="col-sm-2 label label-info">Téléphone</span>   
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputTelephone">
                        </div>
                    </div>
                    <div class="form-group">
                        <span for="inputDate" class="col-sm-2 label label-warning">Date de déménagement prévu</span>   
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="inputDate">
                        </div>
                    </div>

                    <h1><span class="label label-default">Adresse de départ</span></h1>
                    <br/>
                    <div class="form-group">
                        <span for="inputAdresse" class="col-sm-2 label label-success">Adresse</span>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputAdresse">
                        </div>
                    </div>
                    <div class="form-group">
                        <span for="inputCodePostal" class="col-sm-2 label label-info">Code postal</span>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputCodePostal">
                        </div>
                    </div>
                    <div class="form-group">
                        <span for="inputEtage" class="col-sm-2 label label-warning">Etage</span>
                        <div class="col-sm-10">
                            <select class="form-control" id="inputEtage">
                                <option>RDC</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <span for="inputAscenceur" class="col-sm-2 label label-success">Adresse</span>
                        <div class="col-sm-10">
                            <select class="form-control" id="inputAscenceur">
                                <option>Oui</option>
                                <option>Non</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <span for="inputPortage" class="col-sm-2 label label-info">Portage</span>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPortage" placeholder="distance entre le stationnement et l'accès à l'immeuble">
                        </div>
                    </div>
                    <div class="form-group">
                        <span for="inputPrecision" class="col-sm-2 label label-warning">Précision</span>
                        <div class="col-sm-10">
                            <textarea id="inputPrecision" class="form-control" rows="3" placeholder="Précisez ici si vous avez des objets lourds et encombrants, votre ascenceur est-il petit, moyen, grand etc..."></textarea>
                        </div>
                    </div>            

                    <h1><span class="label label-default">Adresse d'arrivée</span></h1>
                    <br/>

                    <div class="form-group">
                        <span for="inputAdresseAr" class="col-sm-2 label label-success">Adresse</span>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputAdresseAr">
                        </div>
                    </div>
                    <div class="form-group">
                        <span for="inputCodePostalAr" class="col-sm-2 label label-info">Code postal</span>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputCodePostalAr">
                        </div>
                    </div>
                    <div class="form-group">
                        <span for="inputEtageAr" class="col-sm-2 label label-warning">Etage</span>
                        <div class="col-sm-10">
                            <select class="form-control" id="inputEtageAr">
                                <option>RDC</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <span for="inputAscenceurAr" class="col-sm-2 label label-success">Adresse</span>
                        <div class="col-sm-10">
                            <select class="form-control" id="inputAscenceurAr">
                                <option>Oui</option>
                                <option>Non</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <span for="inputPortageAr" class="col-sm-2 label label-info">Portage</span>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPortageAr" placeholder="distance entre le stationnement et l'accès à l'immeuble">
                        </div>
                    </div>
                    <div class="form-group">
                        <span for="inputPrecisionAr" class="col-sm-2 label label-warning">Précision</span>
                        <div class="col-sm-10">
                            <textarea id="inputPrecisionAr" class="form-control" rows="3" placeholder="Précisez ici si vous avez des objets lourds et encombrants, votre ascenceur est-il petit, moyen, grand etc..."></textarea>
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
            <script src="./dist/js/bootstrap.min.js"></script>
            <script src="./dist/js/holder.js"></script>

    </body></html>