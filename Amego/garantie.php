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

        <link rel="shortcut icon" href="./images/logo/logo50x50.png" type="image/x-icon"/> 
        <link rel="icon" href="./images/logo/photo.jpg" type="image/x-icon"/>
        
        <title>Garanties</title>

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
                    <h1 class="page-header">Garanties
                        <small> assurences</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Accueil</a>
                        </li>
                        <li class="active">Garanties</li>
                    </ol>
                </div>

            </div>

            <div id="formule_eco" class="row">

                <div class="col-md-6">
                    <img class="img-responsive" src="<?php echo IMAGESITE; ?>assurance.jpg">
                </div>
                <div class="col-md-6">                    
                    
                    <h2>L'assurance contractuelle</h2>
                    <p> Ce type d'assurance assurance incluse d'office dans tout type de contrat. La societe de demenagement dans ce cas est responsable des meubles et objets qui lui sont confiés sauf dans des cas :</P>                   
                    <ul>
                        <li>De force majeure</li>
                        <li>De vol</li>
                        <li>D'incendie</li>
                        <li>Emeutes, attentats, grèves </li>                        
                    </ul>
                    
                    <p>Dans des cas comme listés ci-dessus notre assureur n'est pas engagé à indemniser le montant de vos préjudices.                  
                    Ensuite pour que la prise en charge soit effective, il est important de bien remplir le document appellé <b>declaration de biens de valeur</b> et de le remettre à votre société déménagement avant le déménagement.     
                    Dans la déclaration de valeur vous êtes tenu de lister tous les biens à déménager et de leur donner leur valeur individuelle , sans depasser la valeur maximum individuelle par objet definie dans votre contrat et sans depasser la valeur globale d'assurance definit dans votre contrat (que vous pouvez augmenter si nécessaire). </p>
                </div>
            </div>
            
            <div id="formule_standard" class="row">                
                <div class="col-md-6">                    
                    
                    <h2>L'assurance dommage</h2>
                    <p>Dans ce type de contrat la societe de demenagement est responsable de toute avarie ou perte de votre mobilier en cours de demenagement quelque soit les circonstances (cas de force marjeure, incendie ...).</p>        
                    <p>Comme pour l'assurance contractuelle, le document "déclaration de biens de valeur" doit être rempli et remis avant le déménagement à la société de déménagement.</p>        
                </div>
                
                <div class="col-md-6">
                    <img class="img-responsive" src="<?php echo IMAGESITE; ?>assurance2.jpg">
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