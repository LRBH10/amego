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

        <title>Garantie</title>

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
                    <h1 class="page-header">Messagerie
                        <small> AMEGO</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Accueil</a>
                        </li>
                        <li class="active">Message</li>
                    </ol>
                </div>

            </div>
            <?php
            require_once('./dist/phpmailer/class.phpmailer.php');

            if (isset($_POST['contactNom']) &&
                    isset($_POST['contactMail']) &&
                    isset($_POST['contactTel']) &&
                    isset($_POST['contactMessage'])) {

                $message = '<p>La mseeage suivante est envouyée automatiquement, merci de ne pas répondre.</p>' .
                        '<h1>Contacte avec un client</h1>' .
                        '<p><strong>Nom : </strong>' . $_POST['contactNom'] . '</p>' .
                        '<p><strong>Mail : </strong>' . $_POST['contactMail'] . '</p>' .
                        '<p><strong>Tel : </strong>' . $_POST['contactTel'] . '</p>' .
                        '<p><strong>Message : </strong>' . $_POST['contactMessage'] . '</p>' .
                        '<h2>L\'équipe de AMEGO DEMENAGEMENT</h2>';

                $mail = new PHPMailer();
                $mail->IsHTML(true);
                $mail->CharSet = "utf-8";
                $mail->SetFrom('adresse-mail@gmail.com', 'Expéditeur AMEGO');
                $mail->Subject = "[Contact avec un client]";

                $mail->Body = $message;
                $mail->AddAddress('blaze_nastov@hotmail.com');

                if (!$mail->Send()) {
                    echo '<h2>Votre message n\'a pas été envoyée</h2>';
//        echo 'Mailer Error: ' . $mail->ErrorInfo;
//        exit;
                } else {
                    echo '<h2>Votre message a été envoyée avec succès</h2>
            <p>Le responsable de la mise en relations avec les clients va vous répondre dans les meilleurs délais</p>
            <p>L\'équipe de AMEGO DEMENAGEMENT vous remercie.</p>';
                }
            }

            if (isset($_POST['devisNom']) &&
                    isset($_POST['devisPrenom']) &&
                    isset($_POST['devisTel']) &&
                    isset($_POST['devisMail']) &&
                    isset($_POST['devisObjetsSpe']) &&
                    isset($_POST['devisVolume']) &&
                    isset($_POST['devisDate']) &&
                    isset($_POST['devisAdresseDep']) &&
                    isset($_POST['devisEtageDep']) &&
                    isset($_POST['devisAscenceurDep']) &&
                    isset($_POST['devisAdresseDest']) &&
                    isset($_POST['devisEtageArr']) &&
                    isset($_POST['devisAscenceurArr'])) {

                $nom = $_POST['devisNom'];
                $prenom = $_POST['devisPrenom'];
                $tel = $_POST['devisTel'];
                $personneMail = $_POST['devisMail'];
                $objSpe = $_POST['devisObjetsSpe'];
                $volume = $_POST['devisVolume'];
                $date = $_POST['devisDate'];
                $adrDep = $_POST['devisAdresseDep'];
                $etageDep = $_POST['devisEtageDep'];
                $ascDep = $_POST['devisAscenceurDep'];
                $adrArr = $_POST['devisAdresseDest'];
                $etageArr = $_POST['devisEtageArr'];
                $ascArr = $_POST['devisAscenceurArr'];

                $message = '<p>La mseeage suivante est envouyée automatiquement, merci de ne pas répondre.</p>' .
                        '<h1>Demande de devis de déménagement</h1>' .
                        '<p><strong>Nom : </strong>' . $nom . '</p>' .
                        '<p><strong>Prenom : </strong>' . $prenom . '</p>' .
                        '<p><strong>Tel : </strong>' . $tel . '</p>' .
                        '<p><strong>Email : </strong>' . $personneMail . '</p>' .
                        '<p><strong>Objects spéciaux : </strong>' . $objSpe . '</p>' .
                        '<p><strong>Volume : </strong>' . $volume . '</p>' .
                        '<p><strong>Date de déménagement : </strong>' . $date . '</p>' .
                        '<p><strong>Adresse de départ : </strong>' . $adrDep . '</p>' .
                        '<p><strong>Etage d\'imeuble de départ : </strong>' . $etageDep . '</p>' .
                        '<p><strong>Ascenceur d\'imeuble de départ : </strong>' . $ascDep . '</p>' .
                        '<p><strong>Adresse d\'arrivé : </strong>' . $adrArr . '</p>' .
                        '<p><strong>Etage d\'imeuble de arrivé : </strong>' . $etageArr . '</p>' .
                        '<p><strong>Ascenceur d\'imeuble de arrivé : </strong>' . $ascArr . '</p>';
                if (isset($_POST['devisComment']))
                    $message = $message . '<p><strong>Commentaire : </strong>' . $_POST['devisComment'] . '</p>';
                $message = $message . '<h2>L\'équipe de AMEGO DEMENAGEMENT</h2>';


                $mail = new PHPMailer();
                $mail->IsHTML(true);
                $mail->CharSet = "utf-8";
                $mail->SetFrom('adresse-mail@gmail.com', 'Expéditeur AMEGO');
                $mail->Subject = "[Demande de Devis déménagement] " . $date;

                $mail->Body = $message;
                $mail->AddAddress('blaze_nastov@hotmail.com');

                if (!$mail->Send()) {
                    echo '<h2>Votre message n\'a pas été envoyée</h2>';
//        echo 'Mailer Error: ' . $mail->ErrorInfo;
//        exit;
                } else {
                    echo '<h2>Votre message a été envoyée avec succès</h2>
            <p>Le responsable de la mise en relations avec les clients va vous répondre dans les meilleurs délais</p>
            <p>L\'équipe de AMEGO DEMENAGEMENT vous remercie.</p>';
                }
            }
            ?>
           <?php
                    include './menu/footer.php';
            ?>
        </div>
        <!--container -->

        <!-- JavaScript -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="./dist/js/bootstrap.min.js"></script>
        <script src="./dist/js/holder.js"></script>

    </body>

</html>