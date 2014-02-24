<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function navigation($param) {
    ?>
    <div class="container">
        <?php
        switch ($param) {
            case 'contact': {
                    ?>
                    <div class="col-lg-12">
                        <h1 class="page-header">Contact <small>Nous aimerions avoir de vos nouvelles!</small></h1>

                        <ol class="breadcrumb">
                            <li><a href="index.php">Acceuil</a></li>
                            <li class="active">Contact</li>
                        </ol>
                    </div>
                    <?php
                    break;
                }



            default: {
                    echo 'PHOTO ';
                    break;
                }
        }
        ?>
    </div>
    <?php
}
?>
