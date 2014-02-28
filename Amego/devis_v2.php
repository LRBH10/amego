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
        <meta name="author" content="">

        <title>Conseil</title>

        <!-- Bootstrap core CSS -->

        <link href="<?php echo RESOURCESITE; ?>css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="<?php echo RESOURCESITE; ?>css/modern-business.css" rel="stylesheet">
        <link href="<?php echo RESOURCESITE; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet">
    </head>

    <body>

        <?php
        include './menu/header.php';
        ?>

        <!-- Page Content -->

        <div class="container">

            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">Devis déménagement
                        <small> gratuit</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Accueil</a>
                        </li>
                        <li class="active">Devis Déménagement</li>
                    </ol>
                </div>

            </div>
            <!-- /.row -->

            <div class="row">

                <div class="col-lg-12">
                    <img class="img-responsive" src="<?php echo IMAGESITE; ?>devis.png">
                </div>

            </div>
            <!-- /.row -->


            <div class="row">
                <!--        Version 3 -->     
                <div class="col-lg-6">
                    <h2>Informations Clients :</h2>

                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h1 class="panel-title">Coordonées personnelles</h1>
                        </div>
                        <div class="panel-body">
                            <div class="form-group col-xs-6">
                                <label for="devisNom">Nom</label>
                                <input type="text" name="devisNom" class="form-control" id="devisNom" placeholder="Votre nom">
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="devisPrenom">Prenom</label>
                                <input type="text" name="devisPrenom" class="form-control" id="devisPrenom" placeholder="Votre prenom">
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="devisTel">Téléphone</label>
                                <input type="text" name="devisTel" class="form-control" id="devisTel" placeholder="Votre numéro">
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="devisMail">E-Mail</label>
                                <input type="text" name="devisMail" class="form-control" id="devisMail" placeholder="Votre email">
                            </div>                
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2>Informations Biens :</h2>
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h1 class="panel-title">Objects spéciaux et Volume totale</h1>
                        </div>
                        <div class="panel-body">
                            <div class="col-sm-6">
                                <label for="devisObjetsSpe">Objects spéciaux</label>
                                <textarea id="devisObjetsSpe" name="devisObjetsSpe" class="form-control" rows="5" placeholder="Précisez ici si vous avez des objets spéciaux"></textarea>
                            </div>                    
                            <div class="form-group col-xs-6">
                                <label for="devisNom">Volume</label>
                                <div class="list-group">
                                    <a href="volume.php" class="list-group-item list-group-item-warning">Calculer le volume</a>
                                </div>
                                <input type="text" name="devisNom" class="form-control" id="devisNom" placeholder="Entrez le volume ici">                        
                            </div>
                        </div>
                    </div>
                </div>                


                <div class="col-lg-12">
                    <h2>Informations Déménagement :</h2>
                    <div class="col-lg-6">                        
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h1 class="panel-title">Départ</h1>
                            </div>
                            <div class="panel-body">    
                                <div class="col-sm-6">
                                    <label for="devisDate">Date</label>
                                    <input type="date" name="devisDate" class="form-control" id="devisDate">
                                </div>
                                <div class="col-sm-6">
                                    <label for="devisRueDep">Rue</label>
                                    <input type="text" name="devisRueDep" class="form-control" id="devisRueDep" placeholder="Rue (départ)">
                                </div>
                                <div class="col-sm-6">
                                    <label for="devisCodePostalDep">Code postal</label>
                                    <input type="text" name="devisCodePostalDep" class="form-control" id="devisCodePostalDep" placeholder="Code postal (départ)">
                                </div>
                                <div class="col-sm-6">
                                    <label for="devisVilleDep">Ville</label>
                                    <input type="text" name="devisVilleDep" class="form-control" id="devisVilleDep" placeholder="Ville (départ)">
                                </div>
                                <div class="col-sm-6">
                                    <label for="devisEtageDep">Etage</label>
                                    <input type="number" name="devisEtageDep" class="form-control" id="devisEtageDep" placeholder="Etage (départ)">
                                </div>
                                <div class="col-sm-6">
                                    <label for="devisAscenceurDep">Ascenceur</label>
                                    <select class="form-control" id="devisAscenceurDep">
                                        <option>Aucun</option>
                                        <option>Ascenceur petit</option>
                                        <option>Ascenceur moyen</option>
                                        <option>Ascenceur grand</option>
                                    </select>                        
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-lg-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h1 class="panel-title">Arrivé</h1>
                            </div>
                            <div class="panel-body">
                                <div class="col-sm-6">
                                    <label for="devisRueArr">Rue</label>
                                    <input type="text" name="devisRueArr" class="form-control" id="devisRueArr" placeholder="Rue (arrivé)">
                                </div>
                                <div class="col-sm-6">
                                    <label for="devisCodePostalArr">Code postal</label>
                                    <input type="text" name="devisCodePostalArr" class="form-control" id="devisCodePostalArr" placeholder="Code postal (arrivé)">
                                </div>
                                <div class="col-sm-6">
                                    <label for="devisVilleArr">Ville</label>
                                    <input type="text" name="devisVilleArr" class="form-control" id="devisVilleArr" placeholder="Ville (arrivé)">
                                </div>
                                <div class="col-sm-6">
                                    <label for="devisEtageArr">Etage</label>
                                    <input type="number" name="devisEtageArr" class="form-control" id="devisEtageArr" placeholder="Etage (arrivé)">
                                </div>
                                <div class="col-sm-6">
                                    <label for="devisAscenceurArr">Ascenceur</label>
                                    <select class="form-control" id="devisAscenceurArr">
                                        <option>Aucun</option>
                                        <option>Ascenceur petit</option>
                                        <option>Ascenceur moyen</option>
                                        <option>Ascenceur grand</option>
                                    </select>                        
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-lg-offset-3">
                    <h2>Informations Complementaires :</h2>
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h1 class="panel-title">Commentaire</h1>
                        </div>
                        <div class="panel-body">
                            <textarea id="devisComment" name="devisComment" class="form-control" rows="8" placeholder="Indiquez dans la case une indication concernant votre demenagement, plus vous donnerez des informations précises, plus le devis de votre demenagement sera précis"></textarea>                   
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-12">
                    <button type="button" class="btn btn-warning btn-lg btn-block ">Envoyez</button>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->

            <div class="container">

                <hr>

                <footer>
                    <div class="row">
                        <div class="col-lg-12">
                            <p>Copyright &copy; AMEGO 2014</p>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- /.container -->

            <!-- JavaScript -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
            <script src="<?php echo RESOURCESITE; ?>js/bootstrap.min.js"></script>
            <script src="<?php echo RESOURCESITE; ?>js/holder.js"></script>

    </body>

</html>