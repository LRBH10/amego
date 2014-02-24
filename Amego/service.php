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
        <link rel="shortcut icon" href="<?php echo IMAGESITE; ?>favicon.png">

        <title>Contact</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo RESOURCESITE; ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo RESOURCESITE; ?>css/bootstrap-theme.min.css" rel="stylesheet">

        <style type="text/css"></style>
        <style id="holderjs-style" type="text/css"></style>
    </head>

    <body role="document" style="">


        <?php
        include INCLUDESITE . '/menu/header.php';
        ?>

        <section class="container theme-showcase" role="main">

            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div class="jumbotron">
                <h1>Une gamme de prestations adaptées à vos besoins</h1>
                <p><kbd>AMEGO</kbd> vous propose de faire en ligne <a href="devi.html" > une demande de devis pour votre déménagement</a>. Toutefois, nous préférerons toujours nous déplacer 
                    chez vous pour une estimation réellement adaptée à votre besoin et vous conseiller la meilleure formule pour votre déménagement.
                </p>
            </div>

            <div class="container">

                <div class="well">
                    <p>
                        Les formules ici proposées: 
                        <span class="label label-success">economique</span>, 
                        <span class="label label-info">standart</span> et 
                        <span class="label label-primary">VIP</span>, sont parfaitement étudiées pour les besoins relevés des particuliers 
                        Pour toutes vos demandes concernant nos services spécialisés, veuillez nous contacter.
                    </p>
                </div>


                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><h1><span class="label label-default">Notre service demenagement pour les particuliers</span></h1></div>

                    <!-- Table -->

                    <table class="table table-striped">
                        <tr>
                            <th><span class="label label-warning">Liste des prestations</span></th>
                            <th><center><span class="label label-success">Formule ECO</span></center></th> 
                        <th><center><span class="label label-info">Formule STANDART</span></center></th>
                        <th><center><span class="label label-primary">Formule V.I.P.</span></center></th>
                        </tr>

                        <tr>
                            <td>Mise en penderie des vêtements sur cintres</td>
                            <td><center><span class="glyphicon glyphicon-ok"></span></center></td> 
                        <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
                        <td><center><span class="glyphicon glyphicon-ok"></span></center></td>

                        </tr>

                        <tr>
                            <td>Protection et conditionnement du mobilier</td>
                            <td><center><span class="glyphicon glyphicon-ok"></span></center></td> 
                        <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
                        <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
                        </tr>
                        <tr>
                            <td>Manutention, transport en camion capitonné</td>
                            <td><center><span class="glyphicon glyphicon-ok"></span></center></td> 
                        <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
                        <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
                        </tr>
                        <tr>
                            <td>Démarches pour autorisations de stationnement</td>
                            <td><center><span class="glyphicon glyphicon-ok"></span></center></td> 
                        <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
                        <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
                        </tr>
                        <tr>
                            <td>Livraison a domicile de cartons et adhésifs</td>
                            <td><center><span class="glyphicon glyphicon-ok"></span></center></td> 
                        <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
                        <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
                        </tr>
                        <tr>
                            <td>Démontage et remontage des meubles</td>
                            <td><center><span class="glyphicon glyphicon-remove"></span></center></td> 
                        <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
                        <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
                        </tr>
                        <tr>
                            <td>Emballage des objets fragiles.</td>
                            <td><center><span class="glyphicon glyphicon-remove"></span></center></td> 
                        <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
                        <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
                        </tr>
                        <tr>
                            <td>Emballage intégral des objets non fragiles.</td>
                            <td><center><span class="glyphicon glyphicon-remove"></span></center></td> 
                        <td><center><span class="glyphicon glyphicon-remove"></span></center></td>
                        <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
                        </tr>
                    </table>
                </div>

                <!-- FOOTER -->
            </div> 
        </section>



        <section class="container">

            <div class="col-lg-12">
                <h2 class="page-header">Services</h2>
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#service-one" data-toggle="tab">Service Economique</a>
                    </li>
                    <li class=""><a href="#service-two" data-toggle="tab">Service Standard</a>
                    </li>
                    <li class=""><a href="#service-three" data-toggle="tab">Service VIP</a>
                    </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="service-one">
                        <i class="fa fa-gear pull-left fa-4x">Standard </i>
                        <p>Description</p>
                        <p>blabla</p>
                    </div>
                    <div class="tab-pane fade" id="service-two">
                        <i class="fa fa-gears pull-left fa-4x"></i>
                        <p>Description</p>
                    </div>
                    <div class="tab-pane fade" id="service-three">
                        <i class="fa fa-magic pull-left fa-4x"></i>
                        <p>Description</p>
                    </div>
                </div>
            </div>


        </section>


        <?php
        include INCLUDESITE . '/menu/footer.php';
        ?>

        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="<?php echo RESOURCESITE; ?>js/bootstrap.min.js"></script>

    </body>
</html>