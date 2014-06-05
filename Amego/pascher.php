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

  echo '<div class = "col-md-6 well">';
  echo '<input type = "radio" name = "' . $id . '" value = "1" onchange="reconf(\'#' . $id . '\', 1);" ' . $var1 . ' > <strong>  <span class = "badge " >Client </span> </strong> <br>';
  echo '</div>';
  //echo '<div class = "col-md-6 well">';
  //echo '<input type = "radio" name = "' . $id . '" value = "2" onchange="reconf(\'#' . $id . '\', 2);"  ' . $var2 . '> <strong><span class = "badge " > Client </span> et
  //<span class = "badge " > Amego</span></strong> <br>';
  //echo '</div>';
  echo '<div class = " col-md-6 well">';
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

    <title>demenagement pas Chere</title>

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
          <h1 class="page-header">Location
            <small>  déménagement pas chere</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Accueil</a>
            </li>
            <li class="active">Location pas cher</li>
          </ol>
        </div>

      </div>
    </div>




    <?php
    include './menu/footer.php';
    ?>





  </div>
</body>
</html>
