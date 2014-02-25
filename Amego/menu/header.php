<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<header class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo ROOTSITE; ?>index.php">AMEGO</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <li><a href="<?php echo ROOTSITE; ?>index.php">Accueil</a></li>
                <li><a href="<?php echo ROOTSITE; ?>service.php">Nos services</a></li>
                
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Déménager <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo ROOTSITE; ?>devis.php">Devis déménagement</a></li>
                            <li><a href="<?php echo ROOTSITE; ?>volume.php">Calcule du Volume</a></li>
                            <li><a href="<?php echo ROOTSITE; ?>conseils.php">Conseils</a></li>
                        </ul>
                </li>           
                    
                
                <li><a href="<?php echo ROOTSITE; ?>nous.php">Qui Somme Nous</a></li>
                <li><a href="<?php echo ROOTSITE; ?>contact.php">Nous Contactez</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>

</header>