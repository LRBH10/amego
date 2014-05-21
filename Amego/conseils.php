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

        <title>Conseil</title>

        <!-- Bootstrap core CSS -->

        <link href="./dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="./dist/css/modern-business.css" rel="stylesheet">
        <link href="./dist/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    </head>

    <body>

        <?php
        include './menu/header.php';
        ?>

        <!-- Page Content -->

        <div class="container">

            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">Conseils
                        <small> pour déménager</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Accueil</a>
                        </li>
                        <li class="active">Conseils</li>
                    </ol>
                </div>

            </div>
            <!-- /.row -->

            <div class="row">

                <div class="col-lg-12">
                    <img class="img-responsive" src="./images/conseils.jpg">
                </div>

            </div>
            <!-- /.row -->

            <!-- Service Paragraphs -->

            <div class="row">        

                <h2 class="page-header">Comment bien préparer son déménagement et bien déménager ?</h2>

                <dl class="dl-horizontal">
                    <dt><img src="./images/eau.gif" alt="image" class="img-thumbnail"></dt>
                    <dd>                    
                        <p>Si vous êtes dans un logement collectif vous n'avez pas de démarche à effectuer si ce n'est pas le cas, vous devez vous rapprocher de votre fournisseur d'eau et demander la mise en route de votre abonnement.</p>
                    </dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt><img src="./images/laposte.gif" alt="image" class="img-thumbnail"></dt>
                    <dd><br/>
                        <p>Demander à la poste à ce que votre courrier puisse être réexpédié à votre nouvelle adresse pendant 1 an (service payant).</p>
                    </dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt><img src="./images/cpam.gif" alt="image" class="img-thumbnail"></dt>
                    <dd>
                        <p><br/>Prévenez votre caisse d'assurance maladie de votre changement d'adresse et demander un transfert du dossier.</p>
                    </dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt><img src="./images/caf.gif" alt="image" class="img-thumbnail"></dt>
                    <dd>
                        <br/>
                        <p>Avertissez la caisse d'allocation familiale et demandez le transfert de votre dossier.</p>
                    </dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt><img src="./images/mairie.gif" alt="image" class="img-thumbnail"></dt>
                    <dd>
                        <p>La mairie : Demandez votre nouvelle carte d'électeur. Vous pouvez demander (gratuit) à ce que votre carte d'identité soit refaite et prenne en compte le changement d'adresse mais ce n'est pas obligatoire.</p>
                    </dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt><img src="./images/voiture.gif" alt="image" class="img-thumbnail"></dt>
                    <dd>
                        <p>Vous ne changez pas de département, demander a la prefecture un simple changement d'adresse sur votre carte grise. Si vous changez de département, il est obligatoire de changer de plaque d'immatriculation et de carte grise.</p>
                    </dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt><img src="./images/impots.gif" alt="image" class="img-thumbnail"></dt>
                    <dd>
                        <br/>
                        <p>Prévenez les impôts de votre changement d'adresse.</p>
                    </dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt><img src="./images/telephone.gif" alt="image" class="img-thumbnail"></dt>
                    <dd>
                        <br/>
                        <p>Pensez à resilier votre abonnement téléphonique (ligne fixe - adsl) et à reprendre un abonnement pour votre nouvelle adresse.</p>
                    </dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt><img src="./images/banque.gif" alt="image" class="img-thumbnail"></dt>
                    <dd>
                        <p>Renseignez vous si votre changement d'adresse n'a pas d'incidence sur votre banque. Dans le cas où vous devez changer de compte bancaire, pensez à envoyer votre nouveau RIB au organisme qui effectue des prélèvements automatique.</p>
                    </dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt><img src="./images/edf-gdf.gif" alt="image" class="img-thumbnail"></dt>
                    <dd>                    
                        <p>Prenez contact avec un Agent EDF-GDF pour faire le relevé de compteur au moins 2 
                            semaines avant votre déménagement, et demander à résilier votre contrat au lendemain de votre déménagement.
                            Pensez à faire également la démarche inverse pour avoir la mise en place de votre contrat au moins 1 
                            jour avant votre arrivée sur votre nouvelle adresse.</p>
                    </dd>
                </dl>


                <blockquote class="blockquote-reverse">
                    <p>Bien déménager c'est savoir prendre les devants sur les documents administratifs et procédures à mettre en place avant, pendant et après le déménagement.</p>
                    <footer>La direction</footer>
                </blockquote>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

        <?php
        include './menu/footer.php';
        ?>
        <!-- /.container -->

        <!-- JavaScript -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="./dist/js/bootstrap.min.js"></script>
        <script src="./dist/js/holder.js"></script>

    </body>

</html>