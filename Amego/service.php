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
                            <th><span class="label label-success">Formule ECO</span></th> 
                            <th><span class="label label-info">Formule STANDART</span></th>
                            <th><span class="label label-primary">Formule V.I.P.</span></th>
                        </tr>

                        <tr>
                            <td>Mise en penderie des vêtements sur cintres</td>
                            <td><span class="glyphicon glyphicon-ok"></span></td> 
                            <td><span class="glyphicon glyphicon-ok"></span></td>
                            <td><span class="glyphicon glyphicon-ok"></span></td>

                        </tr>

                        <tr>
                            <td>Protection et conditionnement du mobilier</td>
                            <td><span class="glyphicon glyphicon-ok"></span></td> 
                            <td><span class="glyphicon glyphicon-ok"></span></td>
                            <td><span class="glyphicon glyphicon-ok"></span></td>
                        </tr>
                        <tr>
                            <td>Manutention, transport en camion capitonné</td>
                            <td><span class="glyphicon glyphicon-ok"></span></td> 
                            <td><span class="glyphicon glyphicon-ok"></span></td>
                            <td><span class="glyphicon glyphicon-ok"></span></td>
                        </tr>
                        <tr>
                            <td>Démarches pour autorisations de stationnement</td>
                            <td><span class="glyphicon glyphicon-ok"></span></td> 
                            <td><span class="glyphicon glyphicon-ok"></span></td>
                            <td><span class="glyphicon glyphicon-ok"></span></td>
                        </tr>
                        <tr>
                            <td>Livraison a domicile de cartons et adhésifs</td>
                            <td><span class="glyphicon glyphicon-ok"></span></td> 
                            <td><span class="glyphicon glyphicon-ok"></span></td>
                            <td><span class="glyphicon glyphicon-ok"></span></td>
                        </tr>
                        <tr>
                            <td>Démontage et remontage des meubles</td>
                            <td><span class="glyphicon glyphicon-remove"></span></td> 
                            <td><span class="glyphicon glyphicon-ok"></span></td>
                            <td><span class="glyphicon glyphicon-ok"></span></td>
                        </tr>
                        <tr>
                            <td>Emballage des objets fragiles.</td>
                            <td><span class="glyphicon glyphicon-remove"></span></td> 
                            <td><span class="glyphicon glyphicon-ok"></span></td>
                            <td><span class="glyphicon glyphicon-ok"></span></td>
                        </tr>
                        <tr>
                            <td>Emballage intégral des objets non fragiles.</td>
                            <td><span class="glyphicon glyphicon-remove"></span></td> 
                            <td><span class="glyphicon glyphicon-remove"></span></td>
                            <td><span class="glyphicon glyphicon-ok"></span></td>
                        </tr>
                    </table>
                </div>




                <div class="page-header">
                </div>
                <div class="well">
                    <p>Pour votre information les demenageurs AMEGO situés à Paris (75) interviennent essentiellemement dans les département limitrophes; Yvelines (78), hauts de seine (92), seine st denis (93), val de marne (94), seine et marne (77), essonne (91).</p>
                </div>

               <!-- FOOTER -->
                <?php
                include INCLUDESITE . '/menu/footer.php';
                ?>
            </div> 
        </section>

        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="<?php echo RESOURCESITE; ?>js/bootstrap.min.js"></script>

    </body>
</html>