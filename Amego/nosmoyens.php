
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
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    </head>

    <body>

        <?php
        include './menu/header.php';
        ?>

        <section class="container" role="navigation">
            <div class="col-lg-12">
                <h1 class="page-header">Nos Moyens 
                    <small>utilisés pour votre confort</small>
                </h1>
            </div>
            <ol class="breadcrumb">
                <li><a href="index.php">Accueil</a>
                </li>
                <li class="active">Nos Moyens</li>
            </ol>
        </section>>



        <section class="container" role="main"> 
            <iframe class="col-lg-12" height="1200px" src='http://www.fmd-sa.com/catalogue/1/caisses-cartons'></iframe>
        </section>



        <!-- JavaScript -->
        <!-- JavaScript -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="<?php echo RESOURCESITE; ?>js/bootstrap.min.js"></script>
        <script src="<?php echo RESOURCESITE; ?>js/holder.js"></script>

    </body>

</html>