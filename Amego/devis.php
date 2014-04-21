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

        <title>Conseil</title>

        <!-- Bootstrap core CSS -->

        <link href="./dist/css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="./dist/css/modern-business.css" rel="stylesheet">
        <link href="./dist/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
        <script>
            var autocompleteDepart, autocompleteDesct;

            function initialize() {
                // Create the autocomplete object, restricting the search
                // to geographical location types.
                autocompleteDepart = new google.maps.places.Autocomplete(
                        /** @type {HTMLInputElement} */(document.getElementById('devisAdresseDep')),
                        {types: ['geocode']});
                autocompleteDesct = new google.maps.places.Autocomplete(
                        /** @type {HTMLInputElement} */(document.getElementById('devisAdresseDest')),
                        {types: ['geocode']});
            }

//            function faireRecapitulatif(){
//                var nom = document.getElementById("devisNom").value+ ' ' + document.getElementById("devisPrenom").value;
//                document.getElementById("recName").innerHTML=nom;
//                document.getElementById("sendName").innerHTML=nom;
//                
//                var tel = document.getElementById("devisTel").value;
//                document.getElementById("recTel").innerHTML=tel;
//                document.getElementById("sendTel").innerHTML=tel;
//                
//                var mail = document.getElementById("devisMail").value;
//                document.getElementById("recMail").innerHTML=mail;
//                document.getElementById("sendMail").innerHTML=mail;
//                
//                var date = document.getElementById("devisDate").value;
//                document.getElementById("recDate").innerHTML=date;
//                document.getElementById("sendDate").innerHTML=date;
//                
//                var adrDep = document.getElementById("devisAdresseDep").value;
//                document.getElementById("recAdrDep").innerHTML=adrDep;
//                document.getElementById("sendAdrDep").innerHTML=adrDep;
//                
//                var etageDep = document.getElementById("devisEtageDep").value;
//                document.getElementById("recEtageDep").innerHTML=etageDep;
//                document.getElementById("sendEtageDep").innerHTML=etageDep;
//                
//                var ascDep = document.getElementById("devisAscenceurDep").value;
//                document.getElementById("recAscenDep").innerHTML=ascDep;
//                document.getElementById("sendAscDep").innerHTML=ascDep;
//                
//                var adrArr = document.getElementById("devisAdresseDest").value;
//                document.getElementById("recAdrArr").innerHTML=adrArr;
//                document.getElementById("sendAdrArr").innerHTML=adrArr;
//                
//                var etageArr = document.getElementById("devisEtageArr").value;
//                document.getElementById("recEtageArr").innerHTML=etageArr;
//                document.getElementById("sendEtageArr").innerHTML=etageArr;
//                
//                var ascArr =document.getElementById("devisAscenceurArr").value;
//                document.getElementById("recAscenArr").innerHTML=ascArr;
//                document.getElementById("sendAscArr").innerHTML=ascArr;
//                
//                var vol = document.getElementById("devisVolume").value;
//                document.getElementById("recVolume").innerHTML=vol;
//                document.getElementById("sendVolume").innerHTML=vol;
//                
//                var objSpe = document.getElementById("devisObjetsSpe").value;
//                document.getElementById("recObjetsSpe").innerHTML=objSpe;
//                document.getElementById("sendObjSpe").innerHTML=objSpe;
//                
//                var comment = document.getElementById("devisComment").value;
//                document.getElementById("recComment").innerHTML=comment;
//                document.getElementById("sendComment").innerHTML=comment;
//            }
        </script>
    </head>

    <body onload="initialize()">

        <?php
        include './menu/header.php';
        ?>

        <!-- Page Content -->

        <div class="container">            
            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">Devis déménagement
                        <small> gratuit</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Accueil</a>
                        </li>
                        <li class="active">Devis Déménagement</li>
                    </ol>
                </div>

            </div>
            <!-- /.row -->

            <div class="row">

                <div class="col-lg-12">
                    <img class="img-responsive" src="./images/devis.png" />
                </div>

            </div>
            <!-- /.row -->


            <div class="row">
                <form data-toggle="validator" method="POST" role="form" action="sendMail.php">
                    <!--        Version 3 -->     
                    <div class="col-lg-6">
                        <h2>Informations Clients :</h2>

                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h1 class="panel-title">Coordonées personnelles</h1>
                            </div>
                            <div class="panel-body">
                                <div class="form-group col-xs-6">
                                    <label for="devisNom">Nom</label>
                                    <input type="text" name="devisNom" class="form-control" id="devisNom" placeholder="Votre nom" required>
                                </div>
                                <div class="form-group col-xs-6">
                                    <label for="devisPrenom">Prenom</label>
                                    <input type="text" name="devisPrenom" class="form-control" id="devisPrenom" placeholder="Votre prenom" required>
                                </div>
                                <div class="form-group col-xs-6">
                                    <label for="devisTel">Téléphone</label>
                                    <input type="text" name="devisTel" class="form-control" id="devisTel" placeholder="Votre numéro" 
                                           pattern="[0-9]+" maxlength="10" required>
                                </div>
                                <div class="form-group col-xs-6">
                                    <label for="devisMail">E-Mail</label>
                                    <input type="email" name="devisMail" class="form-control" id="devisMail" placeholder="Votre email" 
                                           data-error="L'adresse e-mail n'est pas valide" required>
                                </div>                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <h2>Informations Biens :</h2>
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h1 class="panel-title">Objects spéciaux et Volume total</h1>
                            </div>
                            <div class="panel-body">
                                <div class="col-sm-6">
                                    <label for="devisObjetsSpe">Objects spéciaux</label>
                                    <textarea id="devisObjetsSpe" name="devisObjetsSpe" class="form-control" rows="5" placeholder="Précisez ici si vous avez des objets spéciaux"></textarea>
                                </div>                    
                                <div class="form-group col-xs-6">
                                    <label for="devisVolume">Volume</label>
                                    <div class="list-group">
                                        <a href="volume.php" class="list-group-item list-group-item-warning">Calculer le volume</a>
                                    </div>
                                    <input type="text" name="devisVolume" class="form-control" pattern="[0-9]+" id="devisVolume" placeholder="Entrez le volume ici"
                                    <?php
                                    if (isset($_GET['calculatedVolume']))
                                        echo 'value="' . $_GET['calculatedVolume'] . '"';
                                    ?> required>                        
                                </div>
                            </div>
                        </div>
                    </div>                


                    <div class="col-lg-12">
                        <h2>Informations Déménagement :</h2>
                        <div class="col-lg-6">                        
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h1 class="panel-title">Départ</h1>
                                </div>
                                <div class="panel-body">    
                                    <div class="col-sm-4">
                                        <label for="devisDate">Date</label>
                                        <input type="date" name="devisDate" class="form-control" id="devisDate" required>
                                    </div>
                                    <div class="col-sm-8">
                                        <label for="devisRueDep">Adresse</label>
                                        <input type="text" name="devisAdresseDep" class="form-control" id="devisAdresseDep" placeholder="Adresse (départ)" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="devisEtageDep">Etage</label>
                                        <input type="number" name="devisEtageDep" class="form-control" min="0" id="devisEtageDep" placeholder="Etage (départ)" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="devisAscenceurDep">Ascenceur</label>
                                        <select class="form-control" name="devisAscenceurDep" id="devisAscenceurDep">
                                            <option>Aucun</option>
                                            <option>Ascenceur petit</option>
                                            <option>Ascenceur moyen</option>
                                            <option>Ascenceur grand</option>
                                        </select>                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h1 class="panel-title">Arrivée</h1>
                                </div>
                                <div class="panel-body">
                                    <div class="col-sm-12">
                                        <label for="devisRueArr">Adresse</label>
                                        <input type="text" name="devisAdresseDest" class="form-control" id="devisAdresseDest" placeholder="Adresse (arrivé)" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="devisEtageArr">Etage</label>
                                        <input type="number" name="devisEtageArr" class="form-control"  min="0" id="devisEtageArr" placeholder="Etage (arrivé)" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="devisAscenceurArr">Ascenceur</label>
                                        <select class="form-control" name="devisAscenceurArr" id="devisAscenceurArr">
                                            <option>Aucun</option>
                                            <option>Ascenceur petit</option>
                                            <option>Ascenceur moyen</option>
                                            <option>Ascenceur grand</option>
                                        </select>                        
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-lg-offset-3">
                        <h2>Informations Complementaires :</h2>
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h1 class="panel-title">Commentaire</h1>
                            </div>
                            <div class="panel-body">
                                <textarea id="devisComment" name="devisComment" class="form-control" rows="8" placeholder="Détaillez votre déménagement, plus vous donnerez des informations précises, plus le devis de votre demenagement sera précis"></textarea>                   
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-warning btn-lg btn-block">Envoyez</button>
                    </div>
                </form>

                <!--                <form role="form" action="sendMail.php">
                                 Modal 
                                
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Récapitulatif</h4>
                                      </div>
                                        <div class="modal-body">                            
                                            <p><b>Nom :</b> <em id="recName">Blazo Nastov</em></p>
                                            <input type="hidden" name="sendName" id="sendName"/>
                                            
                                            <p><b>Tel :</b> <em id="recTel">075 180 256</em></p>  
                                            <input type="hidden" name="sendTel" id="sendTel"/>
                                            
                                            <p><b>E-mail :</b> <em id="recMail">Blazo.Nastov@gmail.com</em></p>
                                            <input type="hidden" name="sendMail" id="sendMail"/>
                                            
                                            <p><b>Date déménagement :</b> <em id="recDate">12 Jul 2014</em></p>
                                            <input type="hidden" name="sendDate" id="sendDate"/>
                                            
                                            <p><b>Adresse départ :</b> <em id="recAdrDep">10 rue Daru 34000 Montpellier</em></p>
                                            <input type="hidden" name="sendAdrDep" id="sendAdrDep"/>
                                            
                                            <p><b>Etage :</b> <em id="recEtageDep">4</em></p>
                                            <input type="hidden" name="sendEtageDep" id="sendEtageDep"/>
                                            
                                            <p><b>Ascenceur :</b> <em id="recAscenDep">Aucun</em></p>
                                            <input type="hidden" name="sendAscDep" id="sendAscDep"/>
                                            
                                            <p><b>Adresse arrivé :</b> <em id="recAdrArr">10 rue Daru 34000 Montpellier</em></p>
                                            <input type="hidden" name="sendAdrArr" id="sendAdrArr"/>
                                            
                                            <p><b>Etage :</b> <em id="recEtageArr">4</em></p>
                                            <input type="hidden" name="sendEtageArr" id="sendEtageArr"/>
                                            
                                            <p><b>Ascenceur :</b> <em id="recAscenArr">Aucun</em></p>
                                            <input type="hidden" name="sendAscArr" id="sendAscArr"/>
                                            
                                            <p><b>Volume totale :</b> <em id="recVolume">78 m3</em></p>
                                            <input type="hidden" name="sendVolume" id="sendVolume"/>
                                            
                                            <p><b>Objects spéciaux :</b> <em id="recObjetsSpe">78 m3</em></p>
                                            <input type="hidden" name="sendObjSpe" id="sendObjSpe"/>
                                            
                                            <p><b>Commentaires :</b> <em id="recComment">78 m3</em></p>
                                            <input type="hidden" name="sendComment" id="sendComment"/>
                                            
                                        </div>  
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Envoyez</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </form>-->
                <!-- /.row -->

            </div>


            <!-- /.container -->

            <?php
            include './menu/footer.php';
            ?>
            <!-- /.container -->

            <!-- JavaScript -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
            <script src="./dist/js/bootstrap.min.js"></script>
            <script src="./dist/js/holder.js"></script>

    </body>

</html>