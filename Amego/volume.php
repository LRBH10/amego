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
        <link href="<?php echo RESOURCESITE; ?>css/modern-business.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <script src="<?php echo RESOURCESITE; ?>js/amego.js"></script>
    </head>

    <body>

        <?php
        include './menu/header.php';
        ?>

        <div class="container">

            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">Calcule 
                        <small>du volume</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Accueil</a>
                        </li>
                        <li class="active">Calcule du volume</li>
                    </ol>
                </div>

            </div>

            <div class="row">

                <div class="col-md-3">
                    <img class="img-responsive" src="<?php echo IMAGESITE; ?>volume.jpg">
                </div>

                <div class="col-md-6">
                    <h2>Calculer le volume de vos biens</h2>
                    <p>Le calcul du volume par notre calculateur, vous permet d'avoir une idée approximative de votre volume.</p>
                    <p>En aucun cas il peut être aussi précis qu'un commmercial, car il est difficile pour vous d'estimer le nombre de cartons, et penser à tous les détails (cave ...).</p>
                    <p>Le calcul du volume nous permet d'avoir une idée approximative de votre volume qui porra servire comme une estimations de la coute totale.</p>

                </div>
                <div class="col-md-3">
                    <img class="img-responsive" src="<?php echo IMAGESITE; ?>metro.jpg">
                </div>
            </div>

            <!-- Team Member Profiles -->            
            <div class="row">

                <div class="col-lg-12">
                    <h2 class="page-header">Vos biens</h2>
                </div>

                    <div class="col-md-6">
                        <div class="col-md-5" >
                            <img class="img-thumbnail" src="<?php echo IMAGESITE; ?>armoire.jpg">
                        </div>
                        <div class="col-md-6">
                            <label for="inArmoire1porte" class="col-sm-8 control-label">Armoire 1 porte</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inArmoire1porte">
                            </div>
                            <label for="inArmoire2porte" class="col-sm-8 control-label">Armoire 2 porte</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inArmoire2porte">
                            </div>
                            <label for="inArmoire3porte" class="col-sm-8 control-label">Armoire 3 porte</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inArmoire3porte">
                            </div>
                            <label for="inArmoire4porte" class="col-sm-8 control-label">Armoire 4 porte</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inArmoire4porte">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="col-md-5">
                            <img class="img-thumbnail" src="<?php echo IMAGESITE; ?>canape.jpg">
                        </div>
                        <div class="col-md-6">
                            <label for="inCanape1place" class="col-sm-8 control-label">Canapé 1 place</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inCanape1place">
                            </div>
                            <label for="inCanape2place" class="col-sm-8 control-label">Canapé 2 places</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inCanape2place">
                            </div>
                            <label for="inCanape3place" class="col-sm-8 control-label">Canapé 3 places</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inCanape3place">
                            </div>
                            <label for="inCanape5place" class="col-sm-8 control-label">Canapé 5 places</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inCanape4place">
                            </div>
                        </div>              
                    </div>


                    <div class="col-md-6">
                        <div class="col-md-5">
                            <img class="img-thumbnail" src="<?php echo IMAGESITE; ?>buffet.jpg">
                        </div>
                        <div class="col-md-6">
                            <label for="inBuffetHaut" class="col-sm-8 control-label">Buffet haut</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inBuffetHaut">
                            </div>
                            <label for="inBuffetBas" class="col-sm-8 control-label">Buffet bas</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inBuffetBas">
                            </div>
                        </div>                
                    </div>                  

                    <div class="col-md-6">
                        <div class="col-md-5">
                            <img class="img-thumbnail" src="<?php echo IMAGESITE; ?>meubletv.jpg">
                        </div>
                        <div class="col-md-6">
                            <label for="inLiving" class="col-sm-8 control-label">Living</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inLiving">
                            </div>
                            <label for="inMeubleTv" class="col-sm-8 control-label">Meuble TV</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inMeubleTv">
                            </div>
                        </div>                
                    </div>

                    <div class="col-md-6">
                        <div class="col-md-5">
                            <img class="img-thumbnail" src="<?php echo IMAGESITE; ?>vaisselier.jpg">
                        </div>
                        <div class="col-md-6">
                            <label for="inVaisselier" class="col-sm-8 control-label">Vaisselier</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inVaisselier">
                            </div>
                        </div>                
                    </div>

                    <div class="col-md-6">
                        <div class="col-md-5">
                            <img class="img-thumbnail" src="<?php echo IMAGESITE; ?>meublecusine.jpg">
                        </div>
                        <div class="col-md-6">
                            <label for="inCusineHaut" class="col-sm-8 control-label">Meuble cuisine haut</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inCusineHaut">
                            </div>
                            <label for="inCusineBas" class="col-sm-8 control-label">Meuble cuisine bas</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inCusineBas">
                            </div>
                        </div>                
                    </div>

                
                    <div class="col-md-6">
                        <div class="col-md-5">
                            <img class="img-thumbnail" src="<?php echo IMAGESITE; ?>matelas.jpg">
                        </div>
                        <div class="col-md-6">                            
                            <label for="inMatela1place" class="col-sm-8 control-label">Matelas 1 place</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inMatela1place">
                            </div>
                            <label for="inSommier1place" class="col-sm-8 control-label">Sommier 1 place</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inSommier1place">
                            </div>
                            <label for="inMatela2place" class="col-sm-8 control-label">Matelas 2 place</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inMatela2place">
                            </div>
                            <label for="inSommier2place" class="col-sm-8 control-label">Sommier 2 place</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inSommier2place">
                            </div>               
                        </div>                
                    </div>

                    <div class="col-md-6">
                        <div class="col-md-5">
                            <img class="img-thumbnail" src="<?php echo IMAGESITE; ?>tv.jpg">
                        </div>
                        <div class="col-md-6">                            
                            <label for="inPetiteTv" class="col-sm-8 control-label">Petite TV</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inPetiteTv">
                            </div>
                            <label for="inMoyenneTv" class="col-sm-8 control-label">Moyenne TV</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inMoyenneTv">
                            </div>
                            <label for="inGrandeTv" class="col-sm-8 control-label">Grande TV</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inGrandeTv">
                            </div>
                            <label for="inOrdinateur" class="col-sm-8 control-label">Ordinateur</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inOrdinateur">
                            </div>               
                        </div>              
                    </div>
                
                    <div class="col-md-6">
                        <div class="col-md-5">
                            <img class="img-thumbnail" src="<?php echo IMAGESITE; ?>velo.jpg">
                        </div>
                        <div class="col-md-6">                            
                            <label for="inVeloAdulte" class="col-sm-8 control-label">Vélo adulte</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inVeloAdulte">
                            </div>
                            <label for="inVeloEnfant" class="col-sm-8 control-label">Vélo enfant</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inVeloEnfant">
                            </div>
                            <label for="inVeloAppartement" class="col-sm-8 control-label">Vélo appartement</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inVeloAppartement">
                            </div>            
                        </div>              
                    </div>
                
                    <div class="col-md-6">
                        <div class="col-md-5">
                            <img class="img-thumbnail" src="<?php echo IMAGESITE; ?>commode.jpg">
                        </div>
                        <div class="col-md-6">                            
                            <label for="inCommode" class="col-sm-8 control-label">Commode</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inCommode">
                            </div>
                            <label for="inChevet" class="col-sm-8 control-label">Chevet</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inChevet">
                            </div>
                        </div>              
                    </div>
                
                    <div class="col-md-6">
                        <div class="col-md-5">
                            <img class="img-thumbnail" src="<?php echo IMAGESITE; ?>bureau.jpg">
                        </div>
                        <div class="col-md-6">                            
                            <label for="inBurreauSimple" class="col-sm-8 control-label">Burreau simple</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inBurreauSimple">
                            </div>
                            <label for="inBurreauAngle" class="col-sm-8 control-label">Burreau d'anglr</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inBurreauAngle">
                            </div>
                        </div>              
                    </div>
                
                    <div class="col-md-6">
                        <div class="col-md-5">
                            <img class="img-thumbnail" src="<?php echo IMAGESITE; ?>table.jpg">
                        </div>
                        <div class="col-md-6">                            
                            <label for="inTableManger" class="col-sm-8 control-label">Table à manger</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inTableManger">
                            </div>
                            <label for="inTableBase" class="col-sm-8 control-label">Table basse</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inTableBase">
                            </div>
                        </div>              
                    </div>
                
                    <div class="col-md-6">
                        <div class="col-md-5">
                            <img class="img-thumbnail" src="<?php echo IMAGESITE; ?>chaise.jpg">
                        </div>
                        <div class="col-md-6">                            
                            <label for="inChaise" class="col-sm-8 control-label">Chaise</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inChaise">
                            </div>
                            <label for="inChaisePliante" class="col-sm-8 control-label">Chaise pliante</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inChaisePliante">
                            </div>
                        </div>              
                    </div>
                
                    <div class="col-md-6">
                        <div class="col-md-5">
                            <img class="img-thumbnail" src="<?php echo IMAGESITE; ?>etagiere.jpg">
                        </div>
                        <div class="col-md-6">                            
                            <label for="inEtagiere" class="col-sm-8 control-label">Etagière</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inEtagiere">
                            </div>
                        </div>              
                    </div>
                
                    <div class="col-md-6">
                        <div class="col-md-5">
                            <img class="img-thumbnail" src="<?php echo IMAGESITE; ?>laveligne.jpg">
                        </div>
                        <div class="col-md-6">                            
                            <label for="inLaveLigne" class="col-sm-8 control-label">Lave linge</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inLaveLigne">
                            </div>
                        </div>          
                        <div class="col-md-6">                            
                            <label for="inLaveVaisselle" class="col-sm-8 control-label">Lave vaisselle</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inLaveVaisselle">
                            </div>
                        </div> 
                        <div class="col-md-6">                            
                            <label for="inSecheLinge" class="col-sm-8 control-label">Seche linge</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inSecheLinge">
                            </div>
                        </div> 
                        <div class="col-md-6">                            
                            <label for="inFrigo" class="col-sm-8 control-label">Frigo</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inFrigo">
                            </div>
                        </div> 
                        <div class="col-md-6">                            
                            <label for="inCuisiniere" class="col-sm-8 control-label">Cuisiniere</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inCuisiniere">
                            </div>
                        </div> 
                    </div>
                
                    <div class="col-md-6">
                        <div class="col-md-5">
                            <img class="img-thumbnail" src="<?php echo IMAGESITE; ?>piano.jpg">
                        </div>
                        <div class="col-md-6">                            
                            <label for="inPianoDroit" class="col-sm-8 control-label">Piano droit</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inPianoDroit">
                            </div>
                            <label for="inPianoQueue" class="col-sm-8 control-label">Piano à queue ou demi-queue</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inPianoQueue">
                            </div>
                            <label for="inCoffreFort" class="col-sm-8 control-label">Coffre fort</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inCoffreFort">
                            </div>
                        </div>              
                    </div>
                
                    <div class="col-md-6">
                        <div class="col-md-5">
                            <img class="img-thumbnail" src="<?php echo IMAGESITE; ?>statue.jpg">
                        </div>
                        <div class="col-md-6">                            
                            <label for="inStatue" class="col-sm-8 control-label">Statue</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inStatue">
                            </div>
                            <label for="inMiroir" class="col-sm-8 control-label">Miroir</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inMiroir">
                            </div>
                            <label for="inLuminaire" class="col-sm-8 control-label">Luminaire</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inLuminaire">
                            </div>
                        </div>              
                    </div>
                
                    <div class="col-md-6">
                        <div class="col-md-5">
                            <img class="img-thumbnail" src="<?php echo IMAGESITE; ?>carton.jpg">
                        </div>
                        <div class="col-md-6">                            
                            <label for="inCarton" class="col-sm-8 control-label">Carton</label>
                            <div class="col-sm-4">
                                <input type="number" value="0" min="0" max="15" class="form-control" id="inCarton">
                            </div>                            
                        </div>              
                    </div>
                
            </div>
                
            <div class="col-md-12">
                <button class="btn btn-primary btn-lg btn-block" 
                        data-toggle="modal" data-target="#myModal" onclick="calculeVolume()">Calculer le volume</button>
            </div>
                
            <form role="form" action="devis.php">
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Volume totale</h4>
                      </div>
                      <div class="modal-body">
                        Le volume totale de vos objetcs est de <strong id="volumeVal">0</strong> metre cube.
                      </div>
                      <div class="modal-footer">
                          <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                    
                                <button type="submit" class="btn btn-primary">Devis déménagement</button>                                
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <input type="hidden" name="calculatedVolume" id="calculatedVolume"/>
            </form>

                <div class="container">

                    <hr>

                    <footer>
                        <div class="row">
                            <div class="col-lg-12">
                                <p>Copyright &copy; AMEGO 2014</p>
                            </div>
                        </div>
                    </footer>

                </div>

            </div>
            <!-- /.container -->

            <!-- JavaScript -->
            <!-- JavaScript -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
            <script src="<?php echo RESOURCESITE; ?>js/bootstrap.min.js"></script>
            <script src="<?php echo RESOURCESITE; ?>js/holder.js"></script>            
    </body>

</html>