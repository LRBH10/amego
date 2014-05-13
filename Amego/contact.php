<?php
include_once './config/config.php';
include_once './menu/navigation.php';
?>

<html lang="en"><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="./images/logo/logo50x50.png" type="image/x-icon"/> 
        <link rel="icon" href="./images/logo/photo.jpg" type="image/x-icon"/>
        
        <title>Contact </title>

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
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?q=20+avenue+Albert+Einstein,le+blanc+mesnil,+93150+ile+de+france&amp;ie=UTF8&amp;hq=&amp;hnear=20+Avenue+Albert+Einstein,+93150+Le+Blanc-Mesnil&amp;gl=fr&amp;t=m&amp;z=14&amp;ll=48.944157,2.471106&amp;output=embed"></iframe>
                </div>

            </div>
        
            <hr class="featurette-divider">

            <div class="row">

                <div class="col-sm-8">
                    <h3>Soyons en contact!</h3>
                    <form role="form" method="POST" action="sendMail.php">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label for="contactNom">Votre Nom</label>
                                <input type="text" name="contactNom" class="form-control" id="contactNom" required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="contactMail">Votre email</label>
                                <input type="email" name="contactMail" class="form-control" id="contactMail" required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="contactTel">Votre numero de téléphone</label>
                                <input type="phone" name="contactTel" class="form-control" id="contactTel" 
                                       pattern="[0-9]+" maxlength="10" required>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label for="contactMessage">Votre Message</label>
                                <textarea name="contactMessage" class="form-control" rows="6" id="contactMessage" required></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-primary">Envoyez</button>
                            </div>
                        </div>
                    </form>
                </div>

                <address class="col-sm-4">
                    <h3>AMEGO Déménagement</h3>
                    <p>
                    20 avenue Albert Einstein, <br>
                        le blanc mesnil, 93150<br>
                        ile de france
                    </p>

                    <p><span class="glyphicon glyphicon-phone-alt"></span> <abbr title="Phone">P</abbr>: +33 (0)1 48 67 29 41</p>
                    <p><span class="glyphicon glyphicon-envelope"></span> <abbr title="Email">E</abbr>: <a href="mailto:contact@amego-demenagement.com">contact@amego-demenagement.com</a></p>
                    <p><span class="glyphicon glyphicon-time"></span> <abbr title="Hours">H</abbr>: Lundi - Vendredi: 8:00  à 19:00 </p>
                    <!--ul class="list-unstyled list-inline list-social-icons">
                        <li class="tooltip-social facebook-link"><a href="#facebook-page" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                        <li class="tooltip-social linkedin-link"><a href="#linkedin-company-page" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
                        <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                        <li class="tooltip-social google-plus-link"><a href="#google-plus-page" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
                    </ul-->
                </address>

            </div><!-- /.row -->

            <?php
                    include './menu/footer.php';
            ?>
            
        </div><!-- /.container -->

        
        <!-- JavaScript -->
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="dist/js/bootstrap.js"></script>
        <script src="dist/js/amego.js"></script>
    </body>
</html>
