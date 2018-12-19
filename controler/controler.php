<?php session_start(); 


$root = str_replace('\\', '/', dirname(__DIR__));

require('model/model.php');

function getHome(){
    $data = getUser();
    require_once ('view/home.php');
    
}

function getVideo(){
    require_once ('view/video.php');
}
function getTheme($theme){
    switch ($theme)
    {
        case 1:
            $datas = getATheme('action');
            break;
        case 2:
            $datas = getATheme('aventure');
            break;
        case 3:
            $datas = getATheme('cuisine');
            break;
        case 4:
            $datas = getATheme('beaute');
            break;
        case 5:
            $datas = getATheme('animaux');
            break;
    }

    require_once ('view/theme.php');
}

function getSubscription(){
    require_once ('view/subscription.php');
}

function getConnexion(){

    require_once ('view/connexion.php');
}
?>