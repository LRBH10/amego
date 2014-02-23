<?php
include_once './config/config.php';
include_once './menu/navigation.php';
?>

<html lang="en"><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Contact - Modern Business - Start Bootstrap Template</title>

        <!-- Bootstrap core CSS -->
        <link href="dist/css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="dist/css/amego.css" rel="stylesheet">

        <style type="text/css"></style></head>

    <body style="">
        
        <?php
        include './menu/header.php';
        navigation('contact');
        ?>
        <!-- Page Content -->
        
        

        <div class="container">

            <div class="row">

                <div class="col-lg-12">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=paris&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=60.116586,135.263672&amp;ie=UTF8&amp;hq=&amp;hnear=Paris,+%C3%8Ele-de-France,+France&amp;t=m&amp;ll=48.860085,2.353134&amp;spn=0.039528,0.072956&amp;z=13&amp;output=embed"></iframe>
                </div>

            </div>
        
            <hr class="featurette-divider">

            <div class="row">

                <div class="col-sm-8">
                    <h3>Soyons en contact!</h3>
                    <form role="form" method="POST" action="contact-form-submission.php">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label for="input1">Votre Nom</label>
                                <input type="text" name="contact_name" class="form-control" id="input1">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="input2">Votre email</label>
                                <input type="email" name="contact_email" class="form-control" id="input2">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="input3">Votre numero de téléphone</label>
                                <input type="phone" name="contact_phone" class="form-control" id="input3">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label for="input4">Votre Message</label>
                                <textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

                <address class="col-sm-4">
                    <h3>AMEGO Déménagement</h3>
                    <p>
                        Rue ..... <br>
                        Paris, 00000<br>
                    </p>
                    <p><span class="glyphicon glyphicon-phone-alt"></span> <abbr title="Phone">P</abbr>: +33 (0)1 42 26 52 20</p>
                    <p><span class="glyphicon glyphicon-envelope"></span> <abbr title="Email">E</abbr>: <a href="mailto:feedback@startbootstrap.com">contact@amego.fr</a></p>
                    <p><span class="glyphicon glyphicon-time"></span> <abbr title="Hours">H</abbr>: Lundi - Vendredi: 8:00  à 19:00 </p>
                    <!--ul class="list-unstyled list-inline list-social-icons">
                        <li class="tooltip-social facebook-link"><a href="#facebook-page" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                        <li class="tooltip-social linkedin-link"><a href="#linkedin-company-page" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
                        <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                        <li class="tooltip-social google-plus-link"><a href="#google-plus-page" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
                    </ul-->
                </address>

            </div><!-- /.row -->

        </div><!-- /.container -->

        <div class="container">

            <hr>

            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright © Company 2013</p>
                    </div>
                </div>
            </footer>

        </div><!-- /.container -->

        <!-- JavaScript -->
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="dist/js/bootstrap.js"></script>
        <script src="dist/js/amego.js"></script>
    </body>
</html>
