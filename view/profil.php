<?php $title = 'Profil';
ob_start(); ?>

<div class="containerProfil col-lg-10">
    <div class="photoProfil">
        <img src=http://image.noelshack.com/fichiers/2019/01/4/1546507376-profile-2092113-12802.png >
    </div>
    <div class="ChampProfil">
        <p><?= $data[0] ?></p>
    </div>

</div>



<?php $content = ob_get_clean();
require_once('view/template.php'); ?>
