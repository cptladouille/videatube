<?php $title = 'Profil';
ob_start(); ?>

<div class="containerProfil col-lg-10">
    <div class = "row">
        <div class="photoProfil">
            <?php
            if($_SESSION['avatar']!='')
            { ?>
                <img src="./ressources/avatars/<?= $_SESSION['avatar']?>" width="400" height="400" class="avatar" alt="">
            <?php }else{ ?>
                <img src=http://image.noelshack.com/fichiers/2019/01/4/1546507376-profile-2092113-12802.png width="400" height="400" class = "avatar">
            <?php } ?>
        </div>
        <div class="ChampProfil">
            
            <label class = "lab" for="nom">Nom : <?= $_SESSION['nom'] ?></label>
            <br>
            <label class = "lab" for="prenom">Prénom : <?= $_SESSION['prenom'] ?></label>
            <br>
            <label class = "lab" for="pseudo">Pseudo : <?= $_SESSION['pseudo'] ?></label>
            <br>
            <label class = "lab" for="mail">Email : <?= $_SESSION['mail'] ?></label>
            <br>
            <label class = "lab" for="role">Rôle : <?= $_SESSION['nomRole'] ?></label>
        </div>
    </div>
    <div class = "row">
        <h3 class = 'title'>Modifier mes informations</h3>

    </div>
</div>

<?php $content = ob_get_clean();
require_once('view/template.php'); ?>
