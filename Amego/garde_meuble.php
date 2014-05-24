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

    <title>Garde Meuble</title>

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
          <h1 class="page-header">Garde Meuble
            <small> pour votre confort</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Accueil</a>
            </li>
            <li class="active">Garde Meuble</li>
          </ol>
        </div>

      </div>

      <section class="row">

        <div class="col-md-6 ">
          <img class="img-responsive" src="./images/meuble/gardemeublejpg.jpg">   
        </div>
        <div class="col-md-6">      
          <br>
          <br>
          <h2>C'est Quoi?</h2>
          <p>Comme son nom l’indique, le garde-meubles est un lieu <span class="badge">clos et couvert</span>   où l'on entrepose du mobilier ou, plus clairement, un lieu où l'on garde des meubles. </p>


        </div>
      </section>
      <br>
      <section  class="row vspace40">                
        <div class="col-md-6">                    

          <h2>Caractéristiques </h2>
          <ul>
            <li>Avec des tailles différentes, nos caisses permettent un stockage de <span class="badge">2 à 12 m³</span> par caisse.</li>
            <li>Nos conteneurs sont <span class="badge">en bois</span>. </li>
            <li>Ils sont <span class="badge">ventilés</span> pour permettre l'aération de vos effets.</li>
            <li>Ceux-ci sont protégés contre la poussière, l'humidité et les chocs (dus à la manutention).</li>
            <li>Nos conteneurs <span class="badge">sont plombés</span> et garantissent une sécurité maximale de vos meubles. </li>
            <li><strong>Le scellage peut se faire devant vous</strong>, à votre domicile ou à l'entrepôt.</li>
          </ul>
        </div>

        <div class="col-md-6">
          <img class="img-responsive" src="./images/meuble/gardeamego.png">
        </div>

      </section>




      <section class=" panel ">
        <center><h1><span class="label label-default">Tarifs de notre garde-meubles</span></h1></center>

        <div class="text-center">
          <div class="row">
            <div class="col-lg-offset-4 col-lg-4">

              <table class=" table table-bordered">
                <tr>
                  <th><center><span class="label label-success">Cubage</span></center></th>
                <th><center><span class="label label-success">Prix</span></center></th> 
                </tr>

                <tr>
                  <td>2 <strong>m³</strong></td>
                  <td><center>39<span class="glyphicon glyphicon-euro"></span> HT </center></td> 

                </tr>

                <tr>
                  <td>4 <strong>m³</strong></td>
                  <td><center>49<span class="glyphicon glyphicon-euro"></span> HT </center></td> 

                </tr>

                <tr>
                  <td>6 <strong>m³</strong></td>
                  <td><center>65<span class="glyphicon glyphicon-euro"></span> HT </center></td> 

                </tr>

                <tr>
                  <td>8 <strong>m³</strong></td>
                  <td><center>90<span class="glyphicon glyphicon-euro"></span> HT </center></td> 

                </tr>

                <tr>
                  <td>10 <strong>m³</strong></td>
                  <td><center>100<span class="glyphicon glyphicon-euro"></span> HT </center></td> 

                </tr>

                <tr>
                  <td>12 <strong>m³</strong></td>
                  <td><center>109<span class="glyphicon glyphicon-euro"></span> HT </center></td> 

                </tr>

                <tr>
                  <td>15 <strong>m³</strong></td>
                  <td><center>130<span class="glyphicon glyphicon-euro"></span> HT </center></td> 

                </tr>

                <tr>
                  <td>18 <strong>m³</strong></td>
                  <td><center>160<span class="glyphicon glyphicon-euro"></span> HT </center></td> 

                </tr>

                <tr>
                  <td>20 <strong>m³</strong></td>
                  <td><center>170<span class="glyphicon glyphicon-euro"></span> HT </center></td> 

                </tr>

                <tr>
                  <td>25 <strong>m³</strong></td>
                  <td><center>210<span class="glyphicon glyphicon-euro"></span> HT </center></td> 

                </tr>

                <tr>
                  <td>28 <strong>m³</strong></td>
                  <td><center>220<span class="glyphicon glyphicon-euro"></span> HT </center></td> 

                </tr>

                <tr>
                  <td>30 <strong>m³</strong></td>
                  <td><center>320<span class="glyphicon glyphicon-euro"></span> HT </center></td> 

                </tr>




              </table>
              </center>
            </div>
          </div>
        </div>


      </section>


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