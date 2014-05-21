
<?php
include_once './config/config.php';


/**
 * Get a web file (HTML, XHTML, XML, image, etc.) from a URL.  Return an
 * array containing the HTTP server response header fields and content.
 */
function get_web_page( $url )
{
    $options = array(
        CURLOPT_RETURNTRANSFER => true,     // return web page
        CURLOPT_HEADER         => false,    // don't return headers
        CURLOPT_FOLLOWLOCATION => true,     // follow redirects
        CURLOPT_ENCODING       => "",       // handle all encodings
        CURLOPT_USERAGENT      => "spider", // who am i
        CURLOPT_AUTOREFERER    => true,     // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
        CURLOPT_TIMEOUT        => 120,      // timeout on response
        CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
    );

    $ch      = curl_init( $url );
    curl_setopt_array( $ch, $options );
    $content = curl_exec( $ch );
    $err     = curl_errno( $ch );
    $errmsg  = curl_error( $ch );
    $header  = curl_getinfo( $ch );
    curl_close( $ch );

    $header['errno']   = $err;
    $header['errmsg']  = $errmsg;
    $header['content'] = $content;
    return $header;
}
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
        <link href="./dist/css/bootstrap.min.css" rel="stylesheet">

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
        </section>



        <section class="container" role="main"> 
            <!--iframe class="col-lg-12" height="1200px" src='http://www.fmd-sa.com/catalogue/1/caisses-cartons'></iframe-->
            
            <?php 
                    get_web_page('http://www.fmd-sa.com/catalogue/1/caisses-cartons');
            ?>
        </section>



        <!-- JavaScript -->
        <!-- JavaScript -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="./dist/js/bootstrap.min.js"></script>
        <script src="./dist/js/holder.js"></script>

    </body>

</html>