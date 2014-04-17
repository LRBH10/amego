
<?php
include_once './config/config.php';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Calcule du volume</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo RESOURCESITE; ?>css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="<?php echo RESOURCESITE; ?>css/modern-business.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo RESOURCESITE; ?>css/imageflow.css" type="text/css" />
    </head>

    <body>

        <?php
        include './menu/header.php';
        ?>

        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">Nos Moyens 
                        <small>utilisés pour votre confort</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Accueil</a>
                        </li>
                        <li class="active">Calcule du volume</li>
                    </ol>
                </div>

            </div>

            <h1> En Construction </h1>



            <div id="unique_name" class="imageflow"> 
                <img src="images/chaise.jpg" longdesc="#" width="50" height="50" alt="Text_1" />
                <img src="images/bureau.jpg" longdesc="#" width="50" height="50" alt="Text_2" />
                <img src="images/buffet.jpg" longdesc="#" width="50" height="50" alt="Text_3" />
            </div>

        </div>

        <!-- JavaScript -->
        <!-- JavaScript -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="<?php echo RESOURCESITE; ?>js/bootstrap.min.js"></script>
        <script src="<?php echo RESOURCESITE; ?>js/holder.js"></script>
        <script src="<?php echo RESOURCESITE; ?>js/imageflow.js" type="text/javascript"></script>
        <script type="text/javascript">
            domReady(function()
            {
                var instanceOne = new ImageFlow();
                instanceOne.init({ImageFlowID: 'unique_name'});
                instanceOne.seal(true);
            });
        </script>

    </body>

</html>