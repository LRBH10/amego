<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function printter($param, $id, $default = 0) {

  $class = "alert alert-danger";
  $var1 = "";
  $var2 = "";
  $var3 = "";
  switch ($default) {
    case 0:
      $var1 = "checked";
      break;

    case 1:
      $var2 = "checked";
      $class = "alert alert-info";

      break;

    case 2:
      $var3 = "checked";
      $class = "alert alert-success";
      break;

    default:
      break;
  }




  echo '<div class = "col-md-4">';
  echo '<div class = "form-group text-center">';
  echo '<h4 id = "' . $id . '" class = "' . $class . '">' . $param . '</h4>';

  echo '<div class = "col-md-3 well">';
  echo '<input type = "radio" name = "' . $id . '" value = "1" onchange="reconf(\'#' . $id . '\', 1);" ' . $var1 . ' > <strong>  <span class = "badge " >Client </span> </strong> <br>';
  echo '</div>';
  echo '<div class = "col-md-6 well">';
  echo '<input type = "radio" name = "' . $id . '" value = "2" onchange="reconf(\'#' . $id . '\', 2);"  ' . $var2 . '> <strong><span class = "badge " > Client </span> et
  <span class = "badge " > Amego</span></strong> <br>';
  echo '</div>';
  echo '<div class = " col-md-3 well">';
  echo '<input type = "radio" name = "' . $id . '" value = "3" onchange="reconf(\'#' . $id . '\', 3);" ' . $var3 . '> <strong>  <span class="badge " >Amego</span> </strong>  <br>
            </div>
          </div>
        </div>';
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="./images/logo/logo50x50.png" type="image/x-icon"/> 
    <link rel="icon" href="./images/logo/photo.jpg" type="image/x-icon"/>

    <title>Nos packs et formules demenagement</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="dist/css/amego.css" rel="stylesheet">


    <script language="javascript" type="text/javascript" src="dist/js/raphal.js"></script>
    <script language="javascript" type="text/javascript" src="dist/js/graphael.js"></script>
    <script language="javascript" type="text/javascript" src="dist/js/graphal.pie.js"></script>





  </head>

  <body itemscope itemtype="http://schema.org/Product"> 

    <?php
    include './menu/header.php';
    ?>

    <div class="container">

      <div class="row">

        <div class="col-lg-12">
          <h1 class="page-header">Déménagement à la Carte
            <small> créer votre propre formule </small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Accueil</a>
            </li>
            <li class="active">A la Carte</li>
          </ol>
        </div>

      </div>
    </div>



    <form  class="container" role="form" method="POST" action="devis.php?alacarte">


      <h3> Choisissez ce que vous voulez prendre à votre charge, Ainsi celle d'Amego </h3>

      <!--div class="form-group text-center">
        <h3 id="effet" class="alert alert-danger">Les effets personnels </h3>


        <div class="row ">
          <div class="col-md-4 well">
            <input  type="radio" name="effet" value="1" checked> <strong> A la charge du <span class="badge badgesize" >Client </span> </strong>  <br>
          </div>
          <div class="col-md-4 well">
            <input  type="radio" name="effet" value="2" disabled="true"> <strong> Partager la tache  entre <span class="badge badgesize" > Client </span>  et
              <span class="badge badgesize" > Amego</span></strong>  <br>
          </div>
          <div class=" col-md-4 well">
            <input  type="radio" name="effet" value="3" disabled="true"> <strong> A la charge d' <span class = "badge badgesize" >Amego</span> </strong> <br>
          </div>
        </div>
      </div -->

      <div class="row">
        <?php
        printter("Emballage  des articles  non  fragiles (Linge plier, livres, DVD...) ", "emarticle");
        printter("Emballage de la  vaisselles  <br>fragiles  ", "emvaisselles", 2);
        printter("Mise en penderie <br>des vêtements sur cintre  ", "penderie", 2);
        printter("Emballage des objets fragiles ( cadre, miroir, tableau ...) ", "emobjfragile", 2);
        printter("Protection et conditionnement  <br> du mobilier", "protcond", 2);
        printter("Protection sous hausse des sommiers, matelas, canapés, fauteuils ...  ", "profaut", 2);
        printter("Demontage et Remontage des  meubles imposant ( lit , dressing, living ...) ", "demontage", 2);
        printter("Démarche pour autorisation <br>de stationnement  ", "demautris", 2);
        printter("Manutention, transport encamion capitonné  ", "transport", 2);
        ?>
      </div>


      <div class="row">

        <?php
        printter("Livraison des cartons + adhesifs  ", "livraisoncarton", 2);
        ?>

        <div class="col-md-4 ">
        </div>
        <div class="col-md-4 ">

          <div class="form-group text-center">
            <h4 id="effet" class="alert alert-danger">Les effets personnels </h4>
            <div class="col-md-3 well">
              <input  type="radio" name="effet" value="1" checked> <strong> <span class="badge " >Client </span> </strong>  <br>
            </div>
            <div class="col-md-6 well">
              <input  type="radio" name="effet" value="2" disabled="true"> <strong> <span class="badge " > Client </span>  et
                <span class="badge " > Amego</span></strong>  <br>
            </div>
            <div class=" col-md-3 well">
              <input  type="radio" name="effet" value="3" disabled="true"> <strong> <span class = "badge " >Amego</span> </strong> <br>
            </div>
          </div>
        </div>


      </div>

      <br>
      <br>


      <div class="row ">

        <div class="col-md-4">
          <div class="form-inline">
            <label for="volumeDem">Volume Total</label>
            <input name="volume" type="number" step="any" class="form-control" id="exampleInputEmail1" placeholder="Volume">
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-inline">
            <label >Nombre de Déménageurs</label>
            <input name="nbrdem" type="number"  class="form-control" id="exampleInputEmail1" placeholder="Nombre de déménageur">
          </div>
        </div>

        <div class="col-md-offset-1 col-md-3">
          <div class="checkbox">
            <label>
              <input name="needmontmeuble" type="checkbox"> Besoin d'un Monte Meuble
            </label>
          </div>
        </div>

      </div>
      <br>

      <div class="row">
        <button type="submit" class="col-md-12 btn-lg btn btn-primary" >Demander un devis gratuit et nous vous recontacterons dans les plus brefs delais</button>
      </div>



    </form>
  </div>


</div>
<?php
include './menu/footer.php';
?>







<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="./dist/js/bootstrap.min.js"></script>
<script src="./dist/js/holder.js"></script>

<script type="text/javascript">

  function reconf(who, what) {
    switch (what) {
      case 1:
        $(who).removeClass().addClass("alert alert-danger");
        break;

      case 2:
        $(who).removeClass().addClass("alert alert-info");
        break;

      case 3:
        $(who).removeClass().addClass("alert alert-success");
        break;
    }

  }

</script>

</div>
</body>
</html>
