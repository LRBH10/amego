<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
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

  <body>

    <?php
    include './menu/header.php';
    ?>

    <div class="container">

      <div class="row">

        <div class="col-lg-12">
          <h1 class="page-header">Nos formules
            <small> de déménagement</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Accueil</a>
            </li>
            <li class="active">Nos Formules</li>
          </ol>
        </div>

      </div>



      <div id="formule_eco" class="row">

        <div class="col-md-7"> 
          <?php
          include './formules/eco.php';
          ?>
        </div>
        <div class="col-md-5">                    

          <h2>Formule économique</h2>
          <p>La formule déménagement économique, vous permet de bénéficier de nos services à petits prix en participant avant, pendant et après  votre déménagement, par exemple en emballant vos biens (meubles, objets fragiles….) ou encore  le démontage et le remontage de vos meubles.</p>

          <h3>Les prestations assurées par la société AMEGO</h3>

          <p><b>Avant votre déménagement :</b></p>                    
          <ul>
            <li>la logistique de votre déménagement (planning de la préparation, date du déménagement, cubage du camion,…)</li>
            <li>les différents matériels dont vous avez besoin pour l'emballage de vos biens.</li>
          </ul>

          <p><b>Le jour du déménagement :</b></p>
          <ul>
            <li>la protection de vos affaires avec du matériel adapté (couvertures, housses et bullpack ).</li>
            <li>la mise sous housse de vos matelas et sommiers.</li>
            <LI>le chargement, et la livraison de l'ensemble de vos meubles et objets.</LI>
            <li>la remise en place de vos meubles.</li>
          </ul>

          <p><b>Les prestations qui restent à votre charge :</b></p>
          <ul>
            <li>l'emballage et le déballage de l'ensemble de vos objets.</li>
            <li>le démontage et le remontage de vos meubles.</li>
            <LI>le regroupement de vos objets personnels : papiers, clefs, bijoux et autres objets de valeur.</LI>
          </ul>

        </div>

      </div>

      <div id="formule_standard" class="row">                
        <div class="col-md-5">                    

          <h2>Formule standard</h2>
          <p>Nos équipes démontent et remontent vos meubles et prennent en charge L'emballage et le déballage de vos objets fragiles (vaisselle, tableaux…)</p>

          <h3>Les prestations assurées par la société AMEGO</h3>


          <p><b>Avant votre déménagement :</b></p>

          <ul>
            <li>la logistique de votre déménagement (planning de la préparation, date du déménagement, cubage du camion,…).</li>
            <li>les différents matériels dont vous avez besoin pour l'emballage de vos biens.</li>
          </ul>

          <p><b>Le jour du déménagement :</b></p>
          <ul>
            <li>la protection de vos affaires avec du matériel adapté (couvertures, housses et bullpack ).</li>
            <li>l'emballage et le déballage de vos objets fragiles.</li>
            <li>la mise sous housse de vos matelas et sommiers.</li>
            <LI>le chargement, et la livraison de l'ensemble de vos meubles et objets.</LI>
            <li>la remise en place de vos meubles.</li>
            <li>le démontage et le remontage de vos meubles.</li>
          </ul>

          <p><b>Les prestations qui restent à votre charge :</b></p>
          <ul>
            <li>l'emballage et le déballage de l'ensemble de vos objets non fragiles.</li>
          </ul>

        </div>

        <div class="col-md-7"> 
          <?php
          include './formules/standard.php';
          ?>
        </div>


      </div>

      <div id="formule_luxe" class="row">

        <div class="col-md-7"> 
          <?php
          include './formules/complet.php';
          ?>
        </div>
        <div class="col-md-5">                    

          <h2>Formule Complète</h2>
          <p>Il s'agit du meilleur en matière de services. L'équipe d'AMEGO se charge de la totalité du travail.</p>

          <ul>
            <li>le chargement et déchargement de la totalité de vos biens sont assurés par nos services.</li>
            <li>le mobilier est démonté puis remonté dans votre nouvelle maison.</li>
            <li>tous vos objets (fragiles ou pas) sont emballés à votre domicile puis déballés et replacés, même vos vêtements sont rangés dans une boîte garde-robes et déposés à l'endroit que vous désirez.</li>
          </ul>

          <p><b>Il ne vous reste plus à votre charge que vos bijoux et les affaires que vous souhaitez garder prêt de vous.</b></p>


        </div>

      </div>

      <div id="comparaisons" class="row">
        <h2>Comparaisons des formules</h2>
        <div class="container">

          <div class="well">
            <p>
              Les formules ici proposées: 
              <span class="label label-success">economique</span>, 
              <span class="label label-info">standart</span> et 
              <span class="label label-primary">VIP</span>, sont parfaitement étudiées pour les besoins relevés des particuliers 
              Pour toutes vos demandes concernant nos services spécialisés, veuillez nous contacter.
            </p>
          </div>


          <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading"><h1><span class="label label-default">Notre service demenagement pour les particuliers</span></h1></div>

            <!-- Table -->

            <table class="table table-striped">
              <tr>
                <th><span class="label label-warning">Liste des prestations</span></th>
                <th><center><span class="label label-success">Formule ECO</span></center></th> 
              <th><center><span class="label label-info">Formule STANDART</span></center></th>
              <th><center><span class="label label-primary">Formule V.I.P.</span></center></th>
              </tr>

              <tr>
                <td>Mise en penderie des vêtements sur cintres</td>
                <td><center><span class="glyphicon glyphicon-ok"></span></center></td> 
              <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
              <td><center><span class="glyphicon glyphicon-ok"></span></center></td>

              </tr>

              <tr>
                <td>Protection et conditionnement du mobilier</td>
                <td><center><span class="glyphicon glyphicon-ok"></span></center></td> 
              <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
              <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
              </tr>
              <tr>
                <td>Manutention, transport en camion capitonné</td>
                <td><center><span class="glyphicon glyphicon-ok"></span></center></td> 
              <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
              <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
              </tr>
              <tr>
                <td>Démarches pour autorisations de stationnement</td>
                <td><center><span class="glyphicon glyphicon-ok"></span></center></td> 
              <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
              <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
              </tr>
              <tr>
                <td>Livraison a domicile de cartons et adhésifs</td>
                <td><center><span class="glyphicon glyphicon-ok"></span></center></td> 
              <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
              <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
              </tr>
              <tr>
                <td>Démontage et remontage des meubles</td>
                <td><center><span class="glyphicon glyphicon-remove"></span></center></td> 
              <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
              <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
              </tr>
              <tr>
                <td>Emballage des objets fragiles.</td>
                <td><center><span class="glyphicon glyphicon-remove"></span></center></td> 
              <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
              <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
              </tr>
              <tr>
                <td>Emballage intégral des objets non fragiles.</td>
                <td><center><span class="glyphicon glyphicon-remove"></span></center></td> 
              <td><center><span class="glyphicon glyphicon-remove"></span></center></td>
              <td><center><span class="glyphicon glyphicon-ok"></span></center></td>
              </tr>
            </table>
          </div>

          <!-- FOOTER -->
        </div> 
      </div>



      <?php
      include './menu/footer.php';
      ?>
      
     
    </div>




    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./dist/js/bootstrap.min.js"></script>
    <script src="./dist/js/holder.js"></script>

  </div>
</body>
</html>
