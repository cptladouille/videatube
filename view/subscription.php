<?php $title = 'Abonnement';
ob_start(); ?>
<html>
<div >
    <div >
        <h2>Abonnements disponibles</h2>
    </div>
    <div class = "row">
        <div class= "col-1"></div>
        <div class ="col-md-3 subscriptionContainer">
            <h3><?=  $datas[0]->getTitle();  ?></h3>
            <br>
            <p>Profitez d'un jour d'abonnement afin d'avoir accès a toutes les vidéos du site durant une journée!</p>
            <p>Nombre de jours d'abonnement : <?= $datas[0]->getDuration(); ?></p>
            <br>
            <br>
            <p class = "priceAbo"><?= $datas[0]->getPrice(); ?> €</p>
        </div>
        <div class ="col-md-3 subscriptionContainer">
            <h3><?=  $datas[1]->getTitle();  ?></h3>
            <br>
            <p>Profitez d'une semaine d'abonnement afin d'avoir accès a toutes les vidéos du site durant une semaine!</p>
            <p>Nombre de jours d'abonnement : <?= $datas[1]->getDuration(); ?></p>
            <br>
            <br>
            <p class = "priceAbo"><?= $datas[1]->getPrice(); ?> €</p>
        </div>
        <div class ="col-md-3 subscriptionContainer">
            <h3><?=  $datas[2]->getTitle();  ?></h3>
            <br>
            <p>Profitez d'un mois d'abonnement afin d'avoir accès a toutes les vidéos du site durant un mois!</p>
            <p>Offre spéciale ! en souscrivant a cet abonnement vous aurez accès a 7 jours d'essais offert en plus de votre mois !</p>
            <p>Nombre de jours d'abonnement : <?= $datas[2]->getDuration(); ?></p>
            <p>Nombre de jours d'essai : <?= $datas[2]->getNbDaysTrial(); ?></p>
            <br>
            <br>
            <p class = "priceAbo"><?= $datas[2]->getPrice(); ?> €</p>
        </div>
    </div>
</div>

</html>

<?php $content = ob_get_clean();
require_once ('view/template.php');?>