<?php
$root = str_replace('\\', '/', dirname(__DIR__));

require_once('model/videoManager.php');

function getHome(){
    $vM = new videoManager();
    $data = $vM->getListOfLinks();
    require_once ('view/home.php');
    
}

function showRecentVideos()
{

}

function getVideo(){
    require_once ('view/video.php');
}

function getTheme($theme)
{
    switch ($theme)
    {
        case 0:
            $datas = getAllVideo();
            break;
        case 1:
            $datas = getVideosByTheme('action');
            break;
        case 2:
            $datas = getVideosByTheme('aventure');
            break;
        case 3:
            $datas = getVideosByTheme('cuisine');
            break;
        case 4:
            $datas = getVideosByTheme('beaute');
            break;
        case 5:
            $datas = getVideosByTheme('animaux');
            break;
        case 6:
            $datas = getVideosByTheme('tuto');
            break;
        default:
            break;
    }
    $title = 'Thèmes';
    require_once ('view/theme.php');
}

function getSubscription(){
    require_once ('view/subscription.php');
}

function getConnexion(){

    require_once ('view/connexion.php');
}

function getInscription(){
    require_once ('view/inscription.php');
}

function getProfil(){
    require_once ('view/profil.php');
}


?>