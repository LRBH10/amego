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
            <ul class="nav navbar-nav">
                <li><a href="<?php echo ROOTSITE; ?>index.php">Accueil</a></li>
                <li><a href="<?php echo ROOTSITE; ?>service.php">Nos services</a></li>
            </ul>
            <ul class="nav navbar-nav pull-right">
                <li><a href="<?php echo ROOTSITE; ?>devis.php">Devis déménagement</a></li>
                <li><a href="<?php echo ROOTSITE; ?>contact.php">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>

</header>