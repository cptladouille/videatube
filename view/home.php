<?php $title = 'Acceuil';
ob_start(); ?>














    <div class='containerhome'>
        <div class='row'>
            <div>Vidéos Récentes gratuites :
                <br>
                <div class='row ligneVideo'>
                    <div class='col-lg-3 video'>
                        <object data="<?= $data[0] ?>"></object>
                    </div>
                    <div class='col-lg-3 video'>
                        <object data="<?= $data[1] ?>"></object>
                    </div>
                    <div class='col-lg-3 video'>
                        <object data="<?= $data[2] ?>"></object>
                    </div>
                    <div class='col-lg-3 video'>
                        <object data="<?= $data[3] ?>"></object>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <div class='row'>
            <div>Vidéos Récentes monétisées :
                <div class='row ligneVideo'>
                    <div class='col-lg-3 video'>
                        <object data="<?= $data[0] ?>"></object>
                    </div>
                    <div class='col-lg-3 video'>
                        <object data="<?= $data[1] ?>"></object>
                    </div>
                    <div class='col-lg-3 video'>
                        <object data="<?= $data[2] ?>"></object>
                    </div>
                    <div class='col-lg-3 video'>
                        <object data="<?= $data[3] ?>"></object>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>
    <br>
    <div><?= $data2[3] ?></div>


<?php $content = ob_get_clean();
require_once('view/template.php'); ?>